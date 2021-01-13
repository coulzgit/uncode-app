<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\AccountsImport;
use App\Models\Account;
use Maatwebsite\Excel\Facades\Excel;

class AcountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.uncod.comptes_clients.liste_comptes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.uncod.comptes_clients.new_account.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input['licence_id']=$request['licence_id'];
        $input['code']=$request['code'];
        $input['statut']=$request['statut'];


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

 /**

    * @return \Illuminate\Support\Collection

    */

    public function importView()

    {

       return view('accounts.import');

    }



    /**

    * @return \Illuminate\Support\Collection

    */

    public function export()

    {

        return Excel::download(new AccountsExport, 'users.xlsx');

    }



    /**

    * @return \Illuminate\Support\Collection

    */

    public function import()

    {

        Excel::import(new AccountsImport,request()->file('file'));



        return back();

    }


}
