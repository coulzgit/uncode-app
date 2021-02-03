<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Models\Account;
use App\Models\Uncode;
use App\Models\Projet;
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;
use App\MyClasses\LoadingManager;
use App\Helpers\DBHelper;

use Auth;
use Mail;
use Session;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Log;
use Image;


class AccountController extends Controller
{
    
    public function index()
    {
        $accounts = $this->getListComptes();
        $loadingManager = new LoadingManager();
        $projets= $loadingManager->getUserProjet();
        return view('admin.uncod.comptes_clients.liste_comptes.index',
            [
                'accounts'=>$accounts,
                'projets'=>$projets

            ]);
    }

    public function create()
    {
        $licences = DB::table('licences')->get();
        $loadingManager = new LoadingManager();
        $projets= $loadingManager->getUserProjet();
        return view('admin.uncod.comptes_clients.new_account.index',
            [
                'licences' => $licences,
                'projets' => $projets
        ]);
    }

    public function store(Request $request)
    {
       
        $licence_id=$request['licence_id'];
        $account_code=random_int(10000,99999);
        $account_statut=false;
        if ($request['statut']=="ON") {
            $account_statut=true;
        }
        Account::create([
            'code'=>$account_code,
            'statut'=>$account_statut,
            'licence_id'=>$licence_id
        ]);

        $message="Create account sucessfully";
        if(app()->getLocale()=="fr"){
            $message="Création de compte réussie";
        }
        if($request->ajax())
        {
            return array(
                'responseCode'=>200,
                'message'=>$message
            ) ;
        }
        return redirect()->back()->with('message',$message);
    }

    
    public function show(Request $request)
    {
        $account_id = $request['account_id'];
        $myCollect=collect([]);
        $account = Account::find($account_id);
        if (empty($account)) {
            return redirect(app()-> getLocale().'/404');
        }
        
        $account = $this->formatAccountData($account_id);
        $loadingManager = new LoadingManager();
        $projets= $loadingManager->getUserProjet();
        return view('admin.uncod.comptes_clients.liste_comptes.details.index',['account'=>$account,'projets'=>$projets]);
    }

   
    public function edit(Request $request, $id)
    {

        $licences = DB::table('licences')->get();
        $id=$request['account_id'];
        Log::info('account_id: '.$id);
        $account = Account::find($id);
        if (empty($account)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        $loadingManager = new LoadingManager();
        $projets= $loadingManager->getUserProjet();
        return view('admin.uncod.comptes_clients.edit_account.index',
            [
                'licences' => $licences,
                'account' => $account,
                'projets'=>$projets]
            );
        }

    
    public function update(Request $request, $id)
    {
        $account_id=$request['account_id'];
        $account = Account::find($account_id);
        if (empty($account)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }

        $licence_id=$request['licence_id'];
        $account_statut=false;
        if ($request['statut']=="ON") {
            $account_statut=true;
        }

        $account->statut=$account_statut;
        $account->licence_id=$licence_id;
        $account->save();

        $message="Update account Sucessfully";
        if(app()->getLocale()=="fr"){
            $message="Modification de compte Réussie";
        }
        if($request->ajax())
        {
            return array(
                'responseCode'=>200,
                'message'=>$message
            ) ;
        }
        return redirect()->back()->with('message',$message);
    }

   
    public function destroy(Request $request)
    {
        $account_id=$request['account_id'];
        $account = Account::find($account_id);
        if (empty($account)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        //$account->delete(); attente
        return redirect()->back()->with('message','success');

    }

    public function config(Request $request){
        $account_id = $request['account_id'];
        $accountData = $this->getAccountConfigured($account_id);
        $acc_data_columns=DBHelper::getAccDataColumns();
        $doc_columns=DBHelper::getDocColumns();
        $projets= DBHelper::getUserProjet();

        return view('admin.uncod.comptes_clients.config_account.index',[
                'account'=>$accountData,
                'doc_columns'=>$doc_columns,
                'acc_data_columns'=>$acc_data_columns,
                'projets'=>$projets
            ]
        );
    }
    public function saveConfig(Request $request)
    {
        
    }
    private function getListComptes(){
        $accounts = [];
        try {
            
            $accounts = Account::all();
            $accounts = $this->formaterListAccount($accounts);
    
        } catch (Exception $e) {}
        return $accounts;
    }
    private function formaterListAccount($accounts){
        $myCollect=collect([]);
        try {
            foreach ($accounts as $key => $account) {
               $myCollect->push($this->formatAccountData($account['id']));
            }
        } catch (Exception $e) {
            
        }
        return $myCollect;

    }
    private function getAccountConfigured($account_id){
        $myCollect = collect([]);
        
        try {
            $account = Account::find($account_id);
            $myCollect->put('account',$account);
            $doc_columns=DocColumnShow::where('account_id',$account_id)->get();
            $acc_data_columns=AccDataColumnShow::where('account_id',$account_id)->get();

            $myCollect->put('doc_columns',$doc_columns);
            $myCollect->put('acc_data_columns',$acc_data_columns);
        } catch (Exception $e) {
            
        }
        return $myCollect;
    }
    private function getAccDataColumns(){
        
        $acc_data_columns=collect([]);

            $acc_data_columns->put('list1',['sort_order', 'brutto', 'brutto_calc', 'vat', 'vat_pros', 'accepted', 'acceptor_id', 'accepted_date', 't1', 't2', 't3', 't4', 't5', 't6', 't7', 't8', 't9', 't10', 't11', 't12', 't13', 't14', 't15', 't16', 't17', 't18', 't19', 't20', 't21', 't22', 't23', 't24', 't25', 't26', 't27', 't28', 't29', 't30', 't31', 't32', 't33', 't34', 't35', 't36', 't37', 't38', 't39', 't40', 't41', 't42', 't43', 't44', 't45', 't46', 't47', 't48', 't49', 't50', 't51', 't52', 't53', 't54', 't55', 't56', 't57']);

             $acc_data_columns->put('list2',['t58', 't59', 't60', 't61', 't62', 't63', 't64', 't65', 't66', 't67', 't68', 't69', 't70', 't71', 't72', 't73', 't74', 't75', 't76', 't77', 't78', 't79', 't80', 't81', 't82', 't83', 't84', 't85', 'n1', 'n2', 'n3', 'n4', 'n5', 'n6', 'n7', 'n8', 'n9', 'n10', 'n11', 'n12', 'n13', 'n14', 'n15', 'n16', 'n17', 'n18', 'n19', 'n20', 'stamp_date', 'stamp_uid', 'net_sum', 'net_calc', 'layer', 'reviewed', 'reviewer_id', 'reviewed_date']);
        return $acc_data_columns;
    }
    
    private function getDocColumns(){
        
        $doc_columns=collect(['doc_id', 'scan_date', 'comp_no', 'supplier_num', 'invoice_num', 'voucher_num', 'invoice_date', 'invoice_last_date', 'invoice_sum', 'status_index', 'order_num', 'exchange_rate', 'invoice_currency', 'invoice_sum_calc', 'supplier_name', 'attrib_t1', 'attrib_t2', 'attrib_t3', 'attrib_t4', 'attrib_t5', 'attrib_t6', 'attrib_t7', 'attrib_n', 'attrib_n2', 'attrib_n3', 'attrib_n4', 'attrib_d', 'attrib_d2', 'attrib_d3', 'attrib_d4', 'vat_sum', 'invoice_type', 'prebooked', 'entry_date', 'net_sum_calc', 'net_sum', 'vat_sum_calc', 'contract_num', 'payment_date', 'invoice_category']);
        return $doc_columns;
    }
    public function detailsAccount(Request $request){
        $account_id = $request['account_id'];
        $myCollect=collect([]);
        $account = Account::find($account_id);
        if (empty($account)) {
            return redirect(app()-> getLocale().'/404');
        }
        
        $account = $this->formatAccountData($account_id);
        $loadingManager = new LoadingManager();
        $projets= $loadingManager->getUserProjet();
        return view('admin.uncod.comptes_clients.liste_comptes.details.index',['account'=>$account,'projets'=>$projets]);
    }
    private function formatAccountData($account_id){

        $myCollect = collect([]);
        
        try {
            $account = Account::find($account_id);
            $myCollect->put('account',$account);
            //PROPRIETAIRE
            $proprietaire = User::with('roles')->where('account_id',$account_id)->where('account_owner',true)->first();
            $licence = Licence::find($account->licence_id);
            $users = User::where('account_id',$account_id)->with('roles')->get();
            $projets = $this->getProjetByAccount($account_id);
            $myCollect->put('proprietaire',$proprietaire);
            $myCollect->put('users',$users);
            $myCollect->put('projets',$projets);
            $myCollect->put('licence',$licence);

        } catch (Exception $e) {
            
        }
        return $myCollect;
    }
    private function getProjetByAccount($account_id){ 
        $myCollect = collect([]);
        try {
            $projets = Projet::where('account_id',$account_id)->get();
            foreach ($projets as $key => $projet) {
                $item = collect([]);
                $item->put('nom',$projet['nom']);
                $item->put('created_at',$this->formaterDate( $projet['created_at'],'long'));
                $item->put('created_by',User::find($projet['created_by']));


                $myCollect->push($item);

            }
        } catch (Exception $e) {
            
        }
        return $myCollect;
    }
    private function formaterDate($date_string,$date_type)
    {
        $monthsArray= [
                "January"=>[
                    "n_m_fr"=>"Jan",
                    "n_m_en"=>"Jan",
                    "n_l_fr"=>"Janvier",
                    "n_l_en"=>"January",

                ],
                "February"=>[
                    "n_m_fr"=>"Fév",
                    "n_m_en"=>"Feb",
                    "n_l_fr"=>"Février",
                    "n_l_en"=>"February",
                ],
                "March"=>[
                    "n_m_fr"=>"Mar",
                    "n_m_en"=>"Mar",
                    "n_l_fr"=>"Mardi",
                    "n_l_en"=>"March",
                ],
                "April"=>[
                    "n_m_fr"=>"Avr",
                    "n_m_en"=>"Apr",
                    "n_l_fr"=>"Avril",
                    "n_l_en"=>"April",
                ],
                "May"=>[
                    "n_m_fr"=>"Mai",
                    "n_m_en"=>"May",
                    "n_l_fr"=>"Mai",
                    "n_l_en"=>"May",
                ],
                "June"=>[
                    "n_m_fr"=>"Jun",
                    "n_m_en"=>"Jun",
                    "n_l_fr"=>"Juin",
                    "n_l_en"=>"June",
                ],
                "July"=>[
                    "n_m_fr"=>"Jul",
                    "n_m_en"=>"Jul",
                    "n_l_fr"=>"Juillet",
                    "n_l_en"=>"July",
                ],

                "August"=>[
                    "n_m_fr"=>"Aug",
                    "n_m_en"=>"Aug",
                    "n_l_fr"=>"Aout",
                    "n_l_en"=>"Auguster",
                ],

                "September"=>[
                    "n_m_fr"=>"Sep",
                    "n_m_en"=>"Sep",
                    "n_l_fr"=>"Septembre",
                    "n_l_en"=>"September",
                ],

                "October"=>[
                    "n_m_fr"=>"Oct",
                    "n_m_en"=>"Oct",
                    "n_l_fr"=>"Octobre",
                    "n_l_en"=>"October",
                ],

                "November"=>[
                    "n_m_fr"=>"Nov",
                    "n_m_en"=>"Nov",
                    "n_l_fr"=>"Novembre",
                    "n_l_en"=>"November",
                ],
                "December"=>[
                    "n_m_fr"=>"Déc",
                    "n_m_en"=>"Dec",
                    "n_l_fr"=>"Décembre",
                    "n_l_en"=>"December",
                ]
            ];

        $myDate = $date_string->format('Y-m-d');
        $day = Carbon::parse($myDate)->format('l');
        $month = Carbon::parse($myDate)->format('F');
        $day_num=substr($myDate,8,2) ;//2020-09-24
        $month_num=substr($myDate,5,2) ;//2020-09-24
        $year_num=substr($myDate,0,4) ;//2020-09-24
        if ($date_type=="long") {
            $month_name_min = $monthsArray[$month]["n_l_en"];
            if(app()->getLocale()=="fr"){
                $month_name_min = $monthsArray[$month]["n_l_fr"];
            }
            return $day_num.' '.$month_name_min.' '.$year_num;
        }elseif ($date_type=="min"){
            $month_name_min = $monthsArray[$month]["n_m_en"];
            if(app()->getLocale()=="fr"){
                $month_name_min = $monthsArray[$month]["n_m_fr"];
            }
            return $day_num.' '.$month_name_min.' '.$year_num;
        }
    }

    public function marqueBlanche(Request $request){
        $loadingManager = new LoadingManager();
        $projets= $loadingManager->getUserProjet();
        $accounts = Account::where("statut",1)->get();
        return view('admin.uncod.comptes_clients.marque_blanche.index',
            [
                'projets'=>$projets,
                'accounts'=>$accounts
            ]
        );
    }
    
    public function saveMarqueBlanche(Request $request){
        $validator = Validator::make($request->all(), [
                    'app_name' => 'required',
                    'accountID' => 'required',
                    'app_logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
                ]
            );
        if (!$validator->passes()) {
             return redirect()->back()->withErrors('errors',$validator->errors());
        }
        $account_id= $request["accountID"];
        $account = Account::find($account_id);
        if (empty($account)) {
            return redirect(app()-> getLocale().'/404');
        }
        $accountWithSameDomaine=Account::where("domaine_name",$request["domaine_name"])
        ->where("id","<>",$account_id)->first();
        if (!empty($accountWithSameDomaine)) {
            return redirect()->back()->with('domaine_name_error','already used');
        }

        $originalImage= $request->file('app_logo');
        $currentDate = Carbon::now()->toDateString();
        $imagename = $currentDate.'-'.uniqid().'.'.$originalImage->getClientOriginalExtension();
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/uncode/marque_blanches/miniatures/';
        $originalPath = public_path().'/uncode/marque_blanches/';
        $thumbnailImage->save($originalPath.time().$imagename);
        $thumbnailImage->resize(500, null, function ($constraint) {
        $constraint->aspectRatio();
        });
        $thumbnailImage->save($thumbnailPath.time().$imagename); 
        $account["app_logo"]= $imagename;

        $account["app_name"]=$request["app_name"];
        $account["domaine_name"]=$request["domaine_name"];
        $account->save();
        return redirect()->back()->with('succes','succes');   
    }

    public function displayData(Request $request){
        $projets= DBHelper::getUserProjet();
        $accounts = Account::where("statut",1)->get();
        $acc_data_columns=DBHelper::getAccDataColumns();
        $doc_columns=DBHelper::getDocColumns();

        $acc_data_names=DBHelper::getAccDataNames(1);
        $doc_data_names=DBHelper::getDocDataNames(1);
        
        return view('admin.uncod.comptes_clients.display_data.index',
            [
                'projets'=>$projets,
                'accounts'=>$accounts,
                'acc_data_columns'=>$acc_data_columns,
                'doc_columns'=>$doc_columns,
                'acc_data_names'=>$acc_data_names,
                'doc_data_names'=>$doc_data_names
            ]
        );
    }
    public  function saveDisplayData(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'projet_id' => 'required',
                    'donne_entetes' => 'required|array|min:7|max:7',
                    'donne_imputations' => 'required|array|min:7|max:7'
                ]
            );
        Log::info("donne_entetes: ".json_encode($request["donne_entetes"]));
        if (!$validator->passes()) {
            Log::info("Error: ".json_encode($validator->errors()));
             return redirect()->back()->with('error','error');
        }
        $projet_id= $request["projet_id"];
        $projet = Projet::find($projet_id);
        if (empty($projet)) {
            return redirect(app()-> getLocale().'/404');
        }
        DB::table('doc_column_shows')->where('account_id',$projet->account_id)
        ->where('projet_id',$projet_id)->delete();
        foreach ($request["donne_entetes"] as $key => $value) {
            DocColumnShow::create(
                [
                    "account_id"=>$projet->account_id,
                    "projet_id"=>$projet_id,
                    "column_name"=>$value       
                ]
            );
        }
        DB::table('acc_data_column_shows')->where('account_id',$projet->account_id)
        ->where('projet_id',$projet_id)
        ->delete();
        foreach ($request["donne_imputations"] as $key => $value) {
            AccDataColumnShow::create(
                [
                    "account_id"=>$projet->account_id,
                    "projet_id"=>$projet_id,
                    "column_name"=>$value   
                ]
            );
        }
        return redirect()->back()->with('succes','succes');
    }
    public function getDataNamesAjax(Request $request){
        $validator = Validator::make($request->all(), [
                    'projet_id' => 'required'
                ]
            );
        if (!$validator->passes()) {
            return array(
                'responseCode'=>404,
                'error'=>'error'
            ) ;
        }
        $acc_data_names = DBHelper::getAccDataNames($request['projet_id']);
        $doc_data_names = DBHelper::getDocDataNames($request['projet_id']);


        $acc_data_columns=DBHelper::getAccDataColumns();
        $doc_columns=DBHelper::getDocColumns();

        $returnDEHTML = view('admin.uncod.comptes_clients.display_data.donne_entete_select')->with(
            [
                'doc_columns'=> $doc_columns,
                'doc_data_names'=> $doc_data_names
            ])->render();

        $returnDIHTML = view('admin.uncod.comptes_clients.display_data.donne_imputation_select')->with(
            [
                'acc_data_columns'=> $acc_data_columns,
                'acc_data_names'=> $acc_data_names
            ])->render();
            return response()->json(array(
                'responseCode'=>200, 
                'htmlDE'=>$returnDEHTML,
                'htmlDI'=>$returnDIHTML)
            );

    }
    public function customiser(Request $required){
        $uncode = DB::table('uncodes')->first();
        $projets= DBHelper::getUserProjet();
        return view('admin.uncod.parametrages.index',
            [
                'uncode'=>$uncode,
                'projets'=>$projets,
            ]
        );
    }
    public function saveCustomiser(Request $request){

        $validator = Validator::make($request->all(), [
                    'app_name' => 'required',
                    'email' => 'required',
                    'app_favicon' => 'required|image|mimes:jpeg,jpg,png|max:2048',
                    'app_logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
                ]
            );
        if (!$validator->passes()) {
             return redirect()->back()->withErrors('errors',$validator->errors());
        }
        
        $uncode = Uncode::first();
        if (empty($uncode)) {
            return redirect(app()-> getLocale().'/404');
        }
        //SAVE LOGO
        $originalImage= $request->file('app_logo');
        $currentDate = Carbon::now()->toDateString();
        $imagename = $currentDate.'-'.uniqid().'.'.$originalImage->getClientOriginalExtension();
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/uncode/marque_blanches/miniatures/';
        $originalPath = public_path().'/uncode/marque_blanches/';
        $thumbnailImage->save($originalPath.time().$imagename);
        $thumbnailImage->resize(500, null, function ($constraint) {
        $constraint->aspectRatio();
        });
        $thumbnailImage->save($thumbnailPath.time().$imagename);
        $uncode->app_logo= $imagename; 
        
        //SAVE FAVICON
        $originalImage= $request->file('app_favicon');
        $currentDate = Carbon::now()->toDateString();
        $imagename = $currentDate.'-'.uniqid().'.'.$originalImage->getClientOriginalExtension();
        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/uncode/marque_blanches/miniatures/';
        $originalPath = public_path().'/uncode/marque_blanches/';
        $thumbnailImage->save($originalPath.time().$imagename);
        $thumbnailImage->resize(500, null, function ($constraint) {
        $constraint->aspectRatio();
        });
        $thumbnailImage->save($thumbnailPath.time().$imagename); 
        $uncode->favicon= $imagename;

        $uncode->app_name=$request["app_name"];
        $uncode->email=$request["email"];
        $uncode->contact_url=$request["contact_url"];
        $uncode->telephone1=$request["telephone1"];
        $uncode->telephone2=$request["telephone2"];

        $uncode->save();
        return redirect()->back()->with('succes','succes');

    }
     
   
}
