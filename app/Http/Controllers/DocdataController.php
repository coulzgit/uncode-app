<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Imports\DocdatasImport;
use App\Models\Doc;
use Maatwebsite\Excel\Facades\Excel;

class DocdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc_datas = AccData::all();
        return view('docs.index')->with('doc_datas', $doc_datas);
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

    public function importdoctada()

    {

       return view('docdatas.import');

    }



    /**

    * @return \Illuminate\Support\Collection

    */

    public function export()

    {

        return Excel::download(new UsersExport, 'users.xlsx');

    }



    /**

    * @return \Illuminate\Support\Collection

    */

    public function import()

    {

        Excel::import(new DocdatasImport,request()->file('file'));



        return back();

    }

}
