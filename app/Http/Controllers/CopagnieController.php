<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compagnie;

class CopagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnies = Compagnie::all();
        return view('compagnies.index')->with('compagnies', $compagnies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compagnies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'comp_index'  => '',
            'comp_name' => '',
            'comp_parent' => '',
             'comp_struct1'  => '',
            'comp_struct2' => '',
            'comp_struct3'  => '' ,
            'comp_struct4'  => '',
            'comp_struct5'      => '',
            'comp_struct6'  => '',
             'comp_struct7'     => '',
              'comp_struct8'    => '',
               'comp_struct9'   => '',
                'comp_struct10' => '',
                    'comp_date1'    => '',
                     'comp_date2'   => '',
                      'comp_date3'  => '',
                       'valid_start'    => '',
                        'valid_end'     => '',
                         'edipartnerid'     => '',


             ]);


        $compagnies = new Compagnie;
        $compagnies->comp_indexcomp_index = $request->input('comp_indexcomp_index');
        $compagnies->comp_name = $request->input('comp_name');
        $compagnies->comp_parent = $request->input('comp_parent');
        $compagnies->comp_struct1 = $request->input('comp_struct1');
        $compagnies->comp_struct2 = $request->input('comp_struct2');
        $compagnies->comp_struct3 = $request->input('comp_struct3');
        $compagnies->comp_struct4 = $request->input('comp_struct4');
        $compagnies->comp_struct5 = $request->input('comp_struct5');
        $compagnies->comp_struct6 = $request->input('comp_struct6');
        $compagnies->comp_struct7 = $request->input('comp_struct7');
        $compagnies->comp_struct8 = $request->input('comp_struct8');
        $compagnies->comp_struct9 = $request->input('comp_struct9');
        $compagnies->comp_struct10 = $request->input('comp_struct10');
        $compagnies->comp_date1 = $request->input('comp_date1');
        $compagnies->comp_date2 = $request->input('comp_date2');
        $compagnies->comp_date3 = $request->input('comp_date3');
        $compagnies->valid_start = $request->input('valid_start');
        $compagnies->valid_end = $request->input('valid_end');
        $compagnies->edipartnerid = $request->input('edipartnerid');









        $compagnies->save();

        return redirect('/compagnies');
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
}
