<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Account;
use App\Models\Doc;
use App\User;
use App\MyClasses\DateFormater;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\MyClasses\LoadingManager;
use App\Helpers\DBHelper;

class ProjetController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:projet-list|projet-create|projet-edit|projet-delete', ['only' => ['index','show']]);
        // $this->middleware('permission:projet-create', ['only' => ['create','store']]);
        // $this->middleware('permission:projet-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:projet-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$projets = Projet::get();
        $projets = LoadingManager::getUserProjet();
        $projetFormated = $this->formaterProjetList($projets);
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.projets.index',compact('projets','projetFormated','user_auth'));
    }
    private function formaterProjetList($projets){
        $myCollect = collect([]);
        try {
            foreach ($projets as $key => $projet) {
                $item = collect($projet);
                $account = Account::find($projet->account_id);
                $item->put('account',$account);
                $created_by = User::find($projet->created_by);
                $item->put('created_by',$created_by);

                $dateFormater = new DateFormater();
                $date_string= $dateFormater->formater($projet['created_at'],"min");
                $item->put('created_at',$date_string);

                $myCollect->push($item);
            }
        } catch (Exception $e) {
            
        }
        return $myCollect;
    }
    private function formaterProjet($projet){
        $item = collect($projet);
        try {
            $account = Account::find($projet->account_id);
            $item->put('account',$account);
            $created_by = User::find($projet->created_by);
            $item->put('created_by',$created_by);
            $dateFormater = new DateFormater();
            $date_string= $dateFormater->formater($projet['created_at'],"min");
            $item->put('created_at',$date_string); 
        } catch (Exception $e) {
            
        }
        return $item;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::get();
        $projets = LoadingManager::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.projets.create',compact('accounts','projets','user_auth'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                    'projet_name' => 'required',
                    'account_id' => 'required'
                ]
            );
            if (!$validator->passes()) {
                return array(
                    'responseCode'=>404
                ) ;
            }
            $user_id = Auth::user()->id;
            $account_id=$request['account_id'];
            $nom=$request['projet_name'];
            
            Projet::create([         
                'account_id'=>$account_id,
                'nom'=>$nom,
                'created_by'=>$user_id
            ]);

            return array(
                'responseCode'=>200
            ) ;
        } catch (Exception $e) {
            return array(
                'responseCode'=>404
            ) ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $projet_id = $request['projet_id'];
        $projet = Projet::with('docs')->find($projet_id);
        if (empty($projet)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        $projet =$this->formaterProjet($projet);
        $projets = LoadingManager::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.projets.show',compact('projet','projets','user_auth'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {   
        $projet_id = $request['projet_id'];
        $projet = Projet::find($projet_id);
        if (empty($projet)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        $accounts = Account::get();
        $projets = LoadingManager::getUserProjet();
        $user_auth= DBHelper::getUserAuth();
        return view('admin.uncod.projets.edit',compact('projet','accounts','projets','user_auth'));
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
        try {
            $validator = Validator::make($request->all(), [
                    'projet_name' => 'required',
                    'account_id' => 'required',
                    'projet_id' => 'required'
                ]
            );
            if (!$validator->passes()) {
                return array(
                    'responseCode'=>404
                ) ;
            }
            
            $projet = Projet::find($request['projet_id']);
            if (empty($projet)) {
                return array(
                    'responseCode'=>404
                ) ;
            }
            
            $projet->account_id = $request['account_id'];
            $projet->nom = $request['projet_name'];
            $projet->save();

            return array(
                'responseCode'=>200
            ) ;
        } catch (Exception $e) {
            return array(
                'responseCode'=>404
            ) ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $projet_id = $request['projet_id'];
        $projet = Projet::find($projet_id);
        if (empty($projet)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }
        //$projet->delete();
        if($request->ajax())
        {
            return array(
                'responseCode'=>404
            ) ;
        }
        return redirect()->back()->with('message','succes');
    }
}
