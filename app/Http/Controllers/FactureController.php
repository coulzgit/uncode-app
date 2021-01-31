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
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;
use App\Models\DocDataName;
use App\Models\AccDataName;
use App\Models\DocColumnShowName;
use App\Models\AccDataColumnShowName;
use App\MyClasses\LoadingManager;
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = LoadingManager::getUserProjet();
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
        //$projets =  $this->getUserProjet();
        $projets = LoadingManager::getUserProjet();
        $invoices = $this->getInvoices($request['projet_id']);
        $donne_entete_names = $this->getDonneEnteteNames();
        $invoices = $this->getInvoices($projet_id);
        return view('admin.uncod.factures.index',
            compact(
                'projets',
                'invoices',
                'donne_entete_names')   
        );
    }
    private function getDonneEnteteNames(){
        $doc_column_shows=$this->getDocColumnShow();
        $acc_data_colomn_shows=$this->getAccDataColumnShow();

        $doc_column_shows = collect($doc_column_shows);
        $acc_data_colomn_shows = collect($acc_data_colomn_shows);

        $results=$doc_column_shows->merge($acc_data_colomn_shows);
        
        return $results; 
    }
    private function validProjetId($projet_id){
        $projet = Projet::find($projet_id);
        if (empty($projet)) {

            return false;
        }
        return Auth::user()->account_id==$projet->account_id;
    }
    private function getDocColumnShow(){

        $results=[];
        try {
            $columnShows= DocColumnShow::where('account_id',Auth::user()->account_id)->get();

            foreach ($columnShows as $key => $value) {
                $item=Collect($value);
                $data_name=DocColumnShowName::where('doc_column_show_id', $value->id)
                ->where('code_lang',app()->getLocale())
                ->first();
                $value['libelle']=$data_name;
                $results[]=$value;
            }
        } catch (Exception $e) {
            Log::error('FactureController/getDocColumnShow: '.$e);
        }
        return $results;
    }
    private function getAccDataColumnShow(){
        $results=[];
        try {
            $columnShows= AccDataColumnShow::where('account_id',Auth::user()->account_id)->get();

            foreach ($columnShows as $key => $value) {
                $item=Collect($value);
                $data_name=AccDataColumnShowName::where('acc_data_column_show_id',$value->id)
                ->where('code_lang',app()->getLocale())
                ->first();
                $value['libelle']=$data_name;
                $results[]=$value;
            }
        } catch (Exception $e) {
            Log::error('FactureController/getAccDataColumnShow: '.$e);
        }
        return $results;
    }
    private function getInvoices($projet_id){
        $invoices=[];
        $donne_entete_names=$this->getDocColumnShow();
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
             //$docs = collect($docs);
             //$docs = $docs->collapse();
             $invoices=$this->formateInvoices($docs);
            //$invoices=$docs;

            //$pageSize = 20;
            //$invoices = CollectionHelper::paginate($docs, $pageSize);

            //$collection = collect($docs);
            //$invoices = $collection->paginate(20);

            //$invoices = $this->paginate($collection);
        } catch (Exception $e) {
            Log::error('FactureController/getInvoices: '.$e);
        }
        return $invoices;
    }
    private function formateInvoices($docs){
        $results = Collect([]);
        try {
            $acc_data_colomns=$this->getAccDataColumnShow();
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
    private function getUserProjet(){
        $projets=Projet::with('account')
            ->where('account_id',Auth::user()->id)
            ->get();
        return $projets;
    }
    private function getDonneEntete(){
        $results=Collect([]);
        $doc_column_shows=DocColumnShow::where('account_id',Auth::user()->id)
            ->get();
        try {
            $projets=Projet::with('docs')
            ->where('account_id',Auth::user()->id)
            ->get();
            // $docs=Doc::where('account_id',Auth::user()->id)
            // ->groupBy('projet_id')
            // ->get();
            $results=$projets;
           
        } catch (Exception $e) {
            Log::error('FactureController/getDonneEntete: '.$e);
        }
        return $results;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $ID_DOC = $request["invoice_id"];

        $doc = Doc::find($ID_DOC);
        if (empty($doc)) {
            return redirect(app()-> getLocale().'/404');
        }
        $invoice = $this->formateInvoice($doc);

        $projets = LoadingManager::getUserProjet();
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

            $ip_line_item_params = IpLineItemParam::where("projet_id",$doc->projet_id)
                ->get();
            $ip_line_item_params = Collect($ip_line_item_params);
            $ip_line_item_params = $ip_line_item_params->groupBy("LIP_DATA_FIELD");


            $result->put("doc",$doc);
            $result->put("data_docs",$data_docs_collect);
            $result->put("acc_datas",$acc_datas);
            $result->put("acc_data_names",$acc_data_names);

            $result->put("ip_line_items",$ip_line_items);
            $result->put("ip_line_item_params",$ip_line_item_params);
            
        } catch (Exception $e) {
            Log::error('FactureController/formateInvoice: '.$e);
        }
        return $result; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
