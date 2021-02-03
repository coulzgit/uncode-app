<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Account;
use App\Models\Doc;
use App\Models\DataDoc;
use App\Models\AccData;
use App\Models\Projet;
use App\Models\IpLineItem;
use App\Models\IpLineItemParam;

use App\Models\ActionLog;
use App\Models\ActionLogName;
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;
use App\Models\DocDataName;
use App\Models\AccDataName;
use App\Models\DocColumnShowName;
use App\Models\AccDataColumnShowName;
use App\Helpers\DBHelper;
use Illuminate\Support\Facades\Validator;
use Auth;
use Mail;
use Session;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Log;

use Illuminate\Pagination\Paginator;

use Illuminate\Support\Collection;

use Illuminate\Pagination\LengthAwarePaginator;


class FactureController extends Controller
{
    
    public function index()
    {
        $projets = DBHelper::getUserProjet();
        //$factureData = $this->factureData();

        return view('admin.uncod.factures.index',
            [
                'projets'=>$projets
            ]);
    }
    public function projectInvoices(Request $request){
        $projet_id = $request['projet_id'];
        if (!$this->validProjetId($projet_id)) {
            return redirect(app()-> getLocale().'/404');
        }
        $projets = DBHelper::getUserProjet();
        $invoices = $this->getInvoices($request['projet_id']);
        $donne_entete_names = DBHelper::getDonneEnteteNamesByProjet($projet_id);
        $invoices = $this->getInvoices($projet_id);
        $doc_data_names = DBHelper::getDocDataNames($request['projet_id']);

        $search_data_textes=DBHelper::getSearchDataTexte();
        $search_data_dates=DBHelper::getSearchDataDate();
        $search_data_montants=DBHelper::getSearchDataMontant();

        return view('admin.uncod.factures.index',
            compact(
                'projets',
                'invoices',
                'donne_entete_names',
                'doc_data_names',
                'search_data_textes',
                'search_data_dates',
                'search_data_montants',
                'projet_id'
            )   
        );
    }
    private function validProjetId($projet_id){
        $projet = Projet::find($projet_id);
        if (empty($projet)) {

            return false;
        }
        return Auth::user()->account_id==$projet->account_id;
    }
    private function getInvoices($projet_id){
        $invoices=[];
        $donne_entete_names=DBHelper::getDocColumnShow();
        try {

            $docs = DB::table('docs')
             ->where('projet_id',$projet_id)
             ->select('id','projet_id','doc_id',
                $donne_entete_names[0]->column_name,
                $donne_entete_names[1]->column_name,
                $donne_entete_names[2]->column_name,
                $donne_entete_names[3]->column_name,
                $donne_entete_names[4]->column_name,
                $donne_entete_names[5]->column_name,
                $donne_entete_names[6]->column_name)
            ->get();
             $invoices=$this->formateInvoices($docs);
            
        } catch (Exception $e) {
            Log::error('FactureController/getInvoices: '.$e);
        }
        return $invoices;
    }
    private function formateInvoices($docs){
        $results = Collect([]);
        try {
            $acc_data_colomns=DBHelper::getAccDataColumnShow();
            if (empty($acc_data_colomns)) {
                return $results;
            }
            foreach ($docs as $key => $doc) {
                $acc_data = AccData::where('doc_id',$doc->doc_id)
                ->where('projet_id',$doc->projet_id)
                ->select('id',
                    $acc_data_colomns[0]->column_name,
                    $acc_data_colomns[1]->column_name,
                    $acc_data_colomns[2]->column_name,
                    $acc_data_colomns[3]->column_name,
                    $acc_data_colomns[4]->column_name,
                    $acc_data_colomns[5]->column_name
                )
                ->first();
                $item = Collect($doc);
                $item->put('acc_data',$acc_data);
                $results->push($item);
            }
        } catch (Exception $e) {
            Log::error('FactureController/formateInvoices: '.$e);
        }
        return $results; 
    }
    
    public function paginate($items, $perPage = 9, $page = null, $options = [])

    {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(Request $request)
    {
        $ID_DOC = $request["invoice_id"];

        $doc = Doc::find($ID_DOC);
        if (empty($doc)) {
            return redirect(app()-> getLocale().'/404');
        }
        $invoice = $this->formateInvoice($doc);

        $projets = DBHelper::getUserProjet();
        return view('admin.uncod.factures.details.index',
            [
                'projets'=>$projets,
                'invoice'=>$invoice
            ]);
    }
    private function formateInvoice($doc){
        $result = Collect([]);
        try {
            $data_docs_collect=Collect([]);
            $acc_datas_collect=Collect([]);
            $data_docs = DataDoc::where("doc_id",$doc->doc_id)
                ->where("projet_id",$doc->projet_id)
                ->get();
            
            foreach ($data_docs as $key => $doc_data) {
                $doc_data_name=DocDataName::where("projet_id",$doc_data->projet_id)
                ->where("data_index",$doc_data->data_index)
                ->first();
                $doc_data["doc_data_name"]=$doc_data_name;
                $data_docs_collect->push($doc_data);
            }

            $acc_datas = AccData::where("doc_id",$doc->doc_id)
                ->where("projet_id",$doc->projet_id)
                ->get();

            $acc_data_names = AccDataName::where("projet_id",$doc->projet_id)
                ->get();
            $acc_data_names = Collect($acc_data_names);
            $acc_data_names = $acc_data_names->groupBy("data_field");


            $ip_line_items = IpLineItem::where("LIT_DOC_ID",$doc->doc_id)
                ->where("projet_id",$doc->projet_id)
                ->get();
            $ip_line_item_params = DBHelper::getIpLineItemParams($doc->projet_id); 

            $action_logs = ActionLog::where("doc_id",$doc->doc_id)
                ->where("projet_id",$doc->projet_id)
                ->get();
            $action_log_collect=Collect([]);
            $lan_code="EN";
            if (app()->getLocale()=="fr") {
                $lan_code = "FR";
            }
            foreach ($action_logs as $key => $action_log) {
                $action_log_name=ActionLogName::where("log_index",$action_log->log_index)
                ->where("lan_code",$lan_code)
                ->first();
                $action_log['action_log_name']=$action_log_name;

                $action_log_collect->push($action_log);
            }

            $action_log_names =DBHelper::getActionLogNames($doc->projet_id);
            $doc_data_names=DBHelper::getDocDataNames($doc->projet_id);

            $result->put("doc",$doc);
            $result->put("data_docs",$data_docs_collect);
            $result->put("acc_datas",$acc_datas);
            $result->put("acc_data_names",$acc_data_names);

            $result->put("ip_line_items",$ip_line_items);
            $result->put("ip_line_item_params",$ip_line_item_params);
            $result->put("action_logs",$action_log_collect);
            $result->put("action_log_names",$action_log_names);
            $result->put("doc_data_names",$doc_data_names);

            
            
        } catch (Exception $e) {
            Log::error('FactureController/formateInvoice: '.$e);
        }
        return $result; 
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function getDataSearchAjax(Request $request){
        $validator = Validator::make($request->all(), [
                    'projet_id' => 'required',
                    'searchArray' => 'required|array|min:1'
                ]
            );
        if (!$validator->passes()) {
            return array(
                'responseCode'=>404,
                'error'=>'error'
            ) ;
        }

        $projet_id=$request["projet_id"];
        $searchArray=$request["searchArray"];
        
        $donne_entete_names = DBHelper::getDonneEnteteNamesByProjet($projet_id);
        $docs=DBHelper::invoiceFiltre($projet_id,$searchArray);
        $invoices=$this->formateInvoices($docs);
        
        $search_data_textes=DBHelper::getSearchDataTexte();
        $search_data_dates=DBHelper::getSearchDataDate();
        $search_data_montants=DBHelper::getSearchDataMontant();


        $return_html = view('admin.uncod.factures.table_content')->with(
            [
                'donne_entete_names'=> $donne_entete_names,
                'invoices'=> $invoices,
                'search_data_textes'=> $search_data_textes,
                'search_data_dates'=> $search_data_dates,
                'search_data_montants'=> $search_data_montants
            ])->render();
        return response()->json(array(
            'responseCode'=>200, 
            'return_html'=>$return_html)
        );
        
    }
}
