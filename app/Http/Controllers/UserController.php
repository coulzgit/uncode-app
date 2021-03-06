<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\RegisterNotify;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
// use Hash;
use Illuminate\Support\Arr;

use App\User;
use App\Models\Account;
use App\Models\Projet;
use App\Models\Licence;
use App\Models\DocColumnShow;
use App\Models\AccDataColumnShow;
//use App\Models\Role;

use Auth;
use Mail;
use Session;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Log;

class UserController extends Controller
{

    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest');
    }

    
/* ##########  USER - RULES - PERMISSIONS ########## */
    public function index(Request $request) 
    {
        $account_id = $request['account_id'];
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
        $users = User::with('roles')
        ->where('account_id',$account_id)
        ->orderBy('id','DESC')->get();
        return view('admin.uncod.users.index',compact('users'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    } 
    public function create(Request $request)
    {   
        $account_id = $request['account_id'];
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

        $roles = Role::pluck('name','name')->all();
        $account_has_owner=true;
        $account_has_owner = User::where('account_id',$account_id)
        ->where('account_owner','=',1)
        ->exists();
        
        return view('admin.uncod.users.add.index',compact('roles','account','account_has_owner'));
    }
    public function store(Request $request)
    {
        
         $validator = Validator::make($request->all(), 
            [
              'account_id'=>'required|integer',
              'user_name'=>'required|max:50',
              'prenom'=>'required|max:50',
              'nom'=>'required|max:50',
              'account_owner'=>'required',
              'email'=>'required|email|unique:users,email',
              'password'=>'required|same:confirm_password',
              'roles' => 'required'
            ]
        );
        if (!$validator->passes()) {
            $returnHTML = view('admin.uncod.users.add.error_user_form')->with('errors', $validator->errors())->render();
            return response()->json(array(
                'responseCode'=>422, 
                'html'=>$returnHTML)
            );
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $message="User created successfully";
        $returnHTML = view('admin.uncod.message_succes')->render();
        return response()->json(array(
            'responseCode'=>200, 
            'html'=>$returnHTML)
        );
    }
    public function show(Request $request)
    {
        $user_id = $request['user_id'];
        $user = User::find($user_id);
        if (empty($user)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        $account = Account::find($user->account_id);
        $userRole = $user->roles->pluck('name','name')->all();
        return view('admin.uncod.users.show.index',compact('user','userRole','account'));
    }
    public function edit(Request $request)
    {  
        $user_id = $request['user_id'];
        Log::info('user_id: '.$user_id);
        $user = User::find($user_id);
        if (empty($user)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        $account = Account::find($user->account_id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $account_has_owner=User::where('account_owner',1)->exists();
        return view('admin.uncod.users.edit.index',compact('user','userRole','roles','account','account_has_owner'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), 
            [
              'user_name'=>'required|max:50',
              'prenom'=>'required|max:50',
              'nom'=>'required|max:50',
              'account_owner'=>'required',
              'email'=>'required|email|unique:users,email',
              'password'=>'required|same:confirm_password',
              'roles' => 'required'
            ]
        );
        if (!$validator->passes()) {
            $returnHTML = view('admin.uncod.users.add.error_user_form')->with('errors', $validator->errors())->render();
            return response()->json(array(
                'responseCode'=>422, 
                'html'=>$returnHTML)
            );
        }

        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));

        $returnHTML = view('admin.uncod.message_succes')->render();
        return response()->json(array(
            'responseCode'=>200, 
            'html'=>$returnHTML)
        );
    }
    public function destroy(Request $request)
    {
        $user_id = $request['user_id'];
        $user = User::find($user_id);
        if (empty($user)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        //$user->delete(); //en attente
        if($request->ajax())
        {
            return array(
                'responseCode'=>200
            ) ;
        }
        return redirect()->back()->with('message','succes');
    }
    public function login(Request $request){

        if($request->isMethod('post')){
            $admin = 'Bienvenue dans la partie admin';
            $client = 'Bienvenue dans la partie client';
            $message = 'Email ou Mot de Passe incorect';

            $data = $request->input();
            if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])){

                //echo "succes"; die;
                return redirect(app()-> getLocale().'/admin/dashboard')->with(['admin' => $admin]);
             }

            else{
                //echo "failed"; die;

                return redirect(app()-> getLocale().'/')->with(['message' => $message]);
            }
        }
        return view('admin/uncod/.signin');
    }
    public function dashboard()
    {
        return view('admin/uncod.index');
    }    
}
