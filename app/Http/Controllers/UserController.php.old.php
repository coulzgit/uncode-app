<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\RegisterNotify;
use App\Models\User;
use App\Models\Account;
use App\Models\Projet;
use App\Models\Licence;
use Auth;
use Mail;
use Session;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class UserController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function login(Request $request){

        if($request->isMethod('post')){
            $admin = 'Bienvenue dans la partie admin';
            $client = 'Bienvenue dans la partie client';
            $message = 'Email ou Mot de Passe incorect';

            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'nom_role'=>'admin'])){

                //echo "succes"; die;
                return redirect(app()-> getLocale().'/admin/dashboard')->with(['admin' => $admin]);
             }

             elseif(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password'], 'nom_role'=>'client'])){
                return redirect(app()-> getLocale().'/admin/dashboard/client')->with(['admin' => $admin]);;
            }


            else{
                //echo "failed"; die;

                return redirect(app()-> getLocale().'/connexion')->with(['message' => $message]);
            }
        }
        return view('admin/uncod/.signin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
         //

         return view('users.index');
     }

     public function dashboard()
     {
         //
         //$recruteurs = Recruteur::orderBy('id')->get();
         //$acc_data_names = acc_data_names::all();
        //return view('doctadas.index')->with('acc_data_names', $acc_data_names);
         return view('admin/uncod.index');
     }


     public function dashboard_client()
     {
         //
         //$recruteurs = Recruteur::orderBy('id')->get();
         return view('admin/uncod/client.index');
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      public function inscription()
      {
          //
          $roles = DB::table('roles')->get();
          //$pays = Pay::all();
          return view('admin/uncod.signup',['roles' => $roles]);
      }


      /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function inscriptionc(Request $request)
     {
         //
            request()->validate([

             'nom' => 'required|string|max:255',
             'prenom' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'tel' => 'required|int|max:255',
             'password' => 'required|string|min:6|confirmed',

            ]);

             $message = "Ajouté avec succès";
             $user = new User;
             $user->prenom = $request->get('prenom');
             $user->nom = $request->get('nom');
             $user->tel = $request->get('tel');
             $user->email = $request->get('email');
             $user->nom_role = $request->get('nom_role');
             $user->password = Hash::make($request->get('password'));
             $user->notify(new RegisterNotify());
             $user->save();

             /* if($user->save()){
             error_log('la création a réussi');
             return redirect()->with(['message' => $message]);
             }
             else
                 {
                     flash('user not saved')->error();
                 } */
             return back()->with(['message' => $message]);

     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
    {
        

        $roles = DB::table('roles')->get();
          return view('acounts.signup',['roles' => $roles]);

    
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
        request()->validate([

             'nom' => 'required|string|max:255',
             'prenom' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'tel' => 'required|string|max:255',
             'password' => 'required|string|min:6|confirmed',

        ]);

         $user = new User;
             $user->prenom = $request->get('prenom');
             $user->nom = $request->get('nom');
             //$user->tel = $request->get('tel');
             $user->email = $request->get('email');
             $user->role = $request->get('role');
             $user->password = Hash::make($request->get('password'));
             $user->notify(new RegisterNotify());

         if($user->save()){
             error_log('la création a réussi');

         $message = "Ajouté avec succès";
         $recruteur = new Recruteur();
         $recruteur->civilite = $request->get('civilite');
         $recruteur->prenom = $request->get('prenom');
         $recruteur->nom = $request->get('nom');
         $recruteur->secteur = $request->get('secteur');
         $recruteur->tel = $request->get('tel');
         $recruteur->nom_entreprise = $request->get('nom_entreprise');
         $recruteur->pays = $request->get('pays');
         $recruteur->ville = $request->get('ville');
         $recruteur->image = $request->get('image');
         $recruteur->annonce = $request->get('annonce');
         $recruteur->role = $request->get('role');
         $recruteur->email = $request->get('email');
         $recruteur->password = Hash::make($request->get('password'));

         $recruteur->user_id = $user->id;

         //$agents->save();
         if($recruteur->save())
         {
             Auth::login($user);
             return back()->with(['message' => $message]);

         }
         else
         {
             flash('user not saved')->error();

         }

         }
        return back()->with(['message' => $message]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        request()->validate([

            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'tel' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',

        ]);




        $message = "Recruteur modifés avec succés";



        return redirect('lister_recruteur_admin')->with(['message' => $message]);
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
        $recruteur = Recruteur::find($id);
        $recruteur->delete();

        return back();
    }

/* ################ MODULE ACCOUNT################### */
    public function addUser(){
        return view('admin.uncod.comptes_clients.add_user.index');
    }
    public function createAccount(){
        $licences = DB::table('licences')->get();
        return view('admin.uncod.comptes_clients.new_account.index',
            [
                'licences' => $licences
        ]);
        
    }
    public function saveAccount(Request $request){
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
        return redirect()->back()->with('message',$message);
    }
    public function updateAccount(Request $request){
        $account_id=$request['account_id'];
        $account = Account::find($account_id);
        if (empty($account)) {
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
    private function validateAccountData(array $data){
        $messages = [
            'licence_id.required' => 'Licence required'
            ,
        ];
        if(app()-> getLocale()=="fr"){
          $messages = [
                'licence_id.required' => 'Licence obligatoire',
            ];  
        }

        $validator = Validator::make($data, [
            'licence_id' => 'required'
        ], $messages);

        return $validator;
    }
    public function listAccount(){
        $accounts = $this->getListComptes();
        return view('admin.uncod.comptes_clients.liste_comptes.index',
            [
                'accounts'=>$accounts
            ]);
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
    public function configAccount(){
        
        return view('admin.uncod.comptes_clients.config_account.index');
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
            $proprietaire = User::where('account_id',$account_id)->where('account_owner',true)->first();
            $licence = Licence::find($account->licence_id);
            $users = User::where('account_id',$account_id)->get();
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
    public function editAccount(Request $request){
        $account_id = $request['account_id'];
        $account = Account::find($account_id);
        $licences = DB::table('licences')->get();
        if (empty($account)) {
            return redirect(app()-> getLocale().'/404');
        }
        return view('admin.uncod.comptes_clients.edit_account.index',
            [
                'licences'=>$licences,
                'account'=>$account
            ]);
    }
    
    public function listUser(){
        return view('admin.uncod.comptes_clients.liste_users.index');
    }

    
}