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
use App\Helpers\DBHelper;

use Auth;
use Mail;
use Session;
use DB;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Log;
use Image;

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
        $projets = DBHelper::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.users.index',compact('users','projets','account','user_auth'))
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
        $projets = DBHelper::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.users.add.index',compact('roles','projets','account','account_has_owner','user_auth'));
    }
    public function store(Request $request,$account_id)
    {
        
        $validator = Validator::make($request->all(), 
            [
              'account_id'=>'required|integer',
              'user_name'=>'required|max:50',
              'prenom'=>'required|max:50',
              'nom'=>'required|max:50',
              //'account_owner'=>'required',
              'email'=>'required|email|unique:users,email',
              'password'=>'required|same:confirm_password',
              'roles' =>'required',
              'user_photo'=>'required|image|mimes:jpeg,jpg,png|max:2048',
            ]
        );


        if (!$validator->passes()) {
            return redirect()->back()->with('errors',$validator->errors());
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        //SAVE PHOTO
        $originalImage= $request->file('user_photo');
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
        $input["photo"]= $imagename; 
        $input['account_owner']=false;
        if ($request['account_owner']=='on') {
            $input['account_owner']=true;
        }
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->back()->with('succes','succes');
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
        $projets = DBHelper::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.users.show.index',compact('user','userRole','account','projets','user_auth'));
    }
    public function edit(Request $request)
    {  
        $user_id = $request['user_id'];
        Log::info('user_id: '.$user_id);
        $user = User::with('roles')->find($user_id);
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
        $projets = DBHelper::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.users.edit.index',compact('user','userRole','roles','account','account_has_owner','projets','user_auth'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), 
            [
              'user_id'=>'required',
              'user_name'=>'required|max:50',
              'prenom'=>'required|max:50',
              'nom'=>'required|max:50',
              'email'=>'required',
              'password'=>'required|same:confirm_password',
              'roles' => 'required',
              'user_photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            ]
        );
        if (!$validator->passes()) {
            return redirect()->back()->with('errors',$validator->errors());
        }
        $userWithEmail=User::where('email',$request['email'])
        ->where('id','<>',$request['user_id'])
        ->first();
        if (!empty($userWithEmail)) {
            return redirect()->back()->with('email_error','email_error');
        }

        $user = User::find($request['user_id']);
        if (empty($user)) {
            return redirect(app()-> getLocale().'/404');
        }
        $input = $request->all();

        //SAVE PHOTO
        $originalImage= $request->file('user_photo');
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
        $input["photo"]= $imagename; 
        $input["photo"]= $imagename; 
        $input['account_owner']=false;
        if ($request['account_owner']=='on') {
            $input['account_owner']=true;
        }
        $user->update($input);
        
        DB::table('model_has_roles')->where('model_id',$request['user_id'])->delete();
        $user->assignRole($request->input('roles'));

        return redirect()->back()->with('succes','succes');
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
                $projets = DBHelper::getUserProjet();
                $user_auth = DBHelper::getUserAuth();
                return redirect(app()-> getLocale().'/admin/dashboard')->with(['admin' => $admin,'projets'=>$projets,'user_auth'=>$user_auth]);
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
        $projets = DBHelper::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin/uncod.index',compact('projets','user_auth'));
    }  
    public function profile(Request $request)
    {
        $user = Auth::user();
        if (empty($user)) {
            return redirect(app()-> getLocale().'/');
        }
        $account = Account::find($user->account_id);
        $userRole = $user->roles->pluck('name','name')->all();
        $projets = DBHelper::getUserProjet();

        $user_auth = DBHelper::getUserAuth();

        return view('admin.uncod.users.profile.index',compact('user','userRole','account','projets','user_auth'));   
    }  

    public function editProfile(Request $request)
    {
        $user = Auth::user();
        if (empty($user)) {
            return redirect(app()-> getLocale().'/');
        }
        $account = Account::find($user->account_id);
        $userRole = $user->roles->pluck('name','name')->all();
        $projets = DBHelper::getUserProjet();

        $user_auth = DBHelper::getUserAuth();

        return view('admin.uncod.users.profile.edit.index',compact('user','userRole','account','projets','user_auth'));   
    }  
    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), 
            [
              'user_name'=>'required|max:50',
              'prenom'=>'required|max:50',
              'nom'=>'required|max:50',
              'password'=>'required|same:confirm_password',
              'user_photo' => 'required|image|mimes:jpeg,jpg,png|max:2048|dimensions:width=200,height=200',
            ]
        );
        if (!$validator->passes()) {
            return redirect()->back()->with('errors',$validator->errors());
        }
        $userWithEmail=User::where('email',$request['email'])
        ->where('id','<>',$request['user_id'])
        ->first();
        if (!empty($userWithEmail)) {
            return redirect()->back()->with('email_error','email_error');
        }

        $user = Auth::user();
        if (empty($user)) {
            return redirect(app()-> getLocale().'/404');
        }
        $input = $request->all();

        //SAVE PHOTO
        $originalImage= $request->file('user_photo');
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
        $input["photo"]= $imagename; 
        $input['account_owner']=false;
        if ($request['account_owner']=='on') {
            $input['account_owner']=true;
        }
        $user->update($input);

        return redirect()->back()->with('succes','succes');
        
    }  
}
