<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Account;
use App\Models\Projet;
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;

use Auth;
use Mail;
use Session;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Log;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = $this->getListComptes();
        return view('admin.uncod.comptes_clients.liste_comptes.index',
            [
                'accounts'=>$accounts
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $licences = DB::table('licences')->get();
        return view('admin.uncod.comptes_clients.new_account.index',
            [
                'licences' => $licences
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $account_id = $request['account_id'];
        $myCollect=collect([]);
        $account = Account::find($account_id);
        if (empty($account)) {
            return redirect(app()-> getLocale().'/404');
        }
        
        $account = $this->formatAccountData($account_id);
        return view('admin.uncod.comptes_clients.liste_comptes.details.index',['account'=>$account]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return view('admin.uncod.comptes_clients.edit_account.index',
            [
                'licences' => $licences,
                'account' => $account]
            );
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
        return redirect()->back()->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $acc_data_columns=$this->getAccDataColumns();
        $doc_columns=$this->getDocColumns();

        return view('admin.uncod.comptes_clients.config_account.index',[
                'account'=>$accountData,
                'doc_columns'=>$doc_columns,
                'acc_data_columns'=>$acc_data_columns
            ]
        );
    }
    public function saveConfig(Request $request)
    {
        $app_name=$request['app_name'];
        $app_logo=$request['app_logo'];
        $doc_columns=$request['doc_columns'];
        $acc_data_columns=$request['acc_data_columns'];
        
        //Revoir
        $message="Configuration account Sucessfully";
        if(app()->getLocale()=="fr"){
            $message="Configuration de compte Réussie";
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
    private function getListComptes(){
        $accounts = [];
        try {
            
            $accounts = Account::where('statut', true)->get();
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
        return view('admin.uncod.comptes_clients.liste_comptes.details.index',['account'=>$account]);
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
        

        //$periods = CarbonPeriod::create($start,$end);

        // $myCollect = collect([]);
        // foreach ($periods as $date) {
        //     $myDate = $date->format('Y-m-d');
        //     $day = Carbon::parse($myDate)->format('l');
        //     $month = Carbon::parse($myDate)->format('F');
        //     $day_num=substr($myDate,8,2) ;//2020-09-24
        //     $month_num=substr($myDate,5,2) ;//2020-09-24

        //     $myItem = collect([]);
        //     if($day=="Monday"){
        //         $horaires = Horaire::where("user_id",$institut->user_id)
        //         ->where("codeDay","L")
        //         ->where("statut","normale")
        //         ->get();
        //         $hoursDispo = $this->getHourDispo($horaires,$myDate);
        //         $myItem->put("codeDay","L");
        //         $myItem->put("date",$myDate);

        //         $day_name_min="Mon";
        //         if(app()-> getLocale()=="fr"){
        //             $day_name_min="Lun";
        //         }
        //         $myItem->put("day_name_min",$day_name_min);

        //     }elseif($day=="Tuesday"){
        //         $horaires = Horaire::where("user_id",$institut->user_id)
        //         ->where("codeDay","M")
        //         ->where("statut","normale")
        //         ->get();
        //         $hoursDispo = $this->getHourDispo($horaires,$myDate);
        //         $myItem->put("codeDay","M");
        //         $myItem->put("date",$myDate);
        //         $myItem->put("hours",$hoursDispo);

        //         $day_name_min="Tue";
        //         if(app()-> getLocale()=="fr"){
        //             $day_name_min="Mar";
        //         }
        //         $myItem->put("day_name_min",$day_name_min);
        //     }elseif($day=="Wednesday"){
        //         $horaires = Horaire::where("user_id",$institut->user_id)
        //         ->where("codeDay","Me")
        //         ->where("statut","normale")
        //         ->get();
        //         $hoursDispo = $this->getHourDispo($horaires,$myDate);
        //         $myItem->put("codeDay","Me");
        //         $myItem->put("date",$myDate);
        //         $myItem->put("hours",$hoursDispo);

        //         $day_name_min="Wed";
        //         if(app()-> getLocale()=="fr"){
        //             $day_name_min="Mer";
        //         }
        //         $myItem->put("day_name_min",$day_name_min);
        //     }elseif($day=="Thursday"){
        //         $horaires = Horaire::where("user_id",$institut->user_id)
        //         ->where("codeDay","J")
        //         ->where("statut","normale")
        //         ->get();
        //         $hoursDispo = $this->getHourDispo($horaires,$myDate);
        //         $myItem->put("codeDay","J");
        //         $myItem->put("date",$myDate);
        //         $myItem->put("hours",$hoursDispo);

        //         $day_name_min="Thu";
        //         if(app()-> getLocale()=="fr"){
        //             $day_name_min="Jeu";
        //         }
        //         $myItem->put("day_name_min",$day_name_min);
        //     }elseif($day=="Friday"){
        //         $horaires = Horaire::where("user_id",$institut->user_id)
        //         ->where("codeDay","V")
        //         ->where("statut","normale")
        //         ->get();
        //         $hoursDispo = $this->getHourDispo($horaires,$myDate);
        //         $myItem->put("codeDay","V");
        //         $myItem->put("date",$myDate);
        //         $myItem->put("hours",$hoursDispo);

        //         $day_name_min="Fri";
        //         if(app()-> getLocale()=="fr"){
        //             $day_name_min="Ven";
        //         }
        //         $myItem->put("day_name_min",$day_name_min);
        //     }elseif($day=="Saturday"){
        //         $horaires = Horaire::where("user_id",$institut->user_id)
        //         ->where("codeDay","S")
        //         ->where("statut","normale")
        //         ->get();
        //         $hoursDispo = $this->getHourDispo($horaires,$myDate);
        //         $myItem->put("codeDay","S");
        //         $myItem->put("date",$myDate);
        //         $myItem->put("hours",$hoursDispo);

        //         $day_name_min="Sat";
        //         if(app()-> getLocale()=="fr"){
        //             $day_name_min="Sam";
        //         }
        //         $myItem->put("day_name_min",$day_name_min);
        //     }elseif($day=="Sunday"){
        //         $horaires = Horaire::where("user_id",$institut->user_id)
        //         ->where("codeDay","D")
        //         ->where("statut","normale")
        //         ->get();
        //         $hoursDispo = $this->getHourDispo($horaires,$myDate);
        //         $myItem->put("codeDay","D");
        //         $myItem->put("date",$myDate);
        //         $myItem->put("hours",$hoursDispo);

        //         $day_name_min="Sun";
        //         if(app()-> getLocale()=="fr"){
        //             $day_name_min="Dim";
        //         }
        //         $myItem->put("day_name_min",$day_name_min);
        //     }
        //     $myItem->put("month",$month);
        //     $myItem->put("day_num",$day_num);
        //     $myItem->put("month_num",$month_num);
        //     $month_name_min = $monthsArray[$month]["n_m_en"];
        //     if(app()-> getLocale()=="fr"){
        //         $month_name_min = $monthsArray[$month]["n_m_fr"];
        //     }
        //     $myItem->put("month_name_min",$month_name_min);

        //     $myCollect->push($myItem); 
        // }
        // return $myCollect;
    }
    
   
}
