<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acc_datas = AccData::all();
        return view('datas.index')->with('acc_datas', $acc_datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datas.create');
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

        'data_index' => '',
         'data_field'   =>'',
        'data_name'        =>'',
      'default_value'   =>'',
      'data_type'   =>'',
      'data_formula'    =>'',
      'data_background' =>'',
       'data_format'        =>'',
       'listfile_index'     =>'',
       'lock_field'     =>'',
       'special_field'  =>'',
       'expand_index'   =>'',
       'dont_warn'      =>'',
       'comp_bind_level'    =>'',
       'must_field'     =>'',
       'max_length'     =>'',
       'min_length'     =>'',
       'layer'      =>'',
       'comp_no'    =>'',
       'use_digitgrouping'      =>'',
       'num_digits'     =>'',
       'data_width'     =>'',


    ]);





         $acc_datas = new AccData;
        $acc_datas->data_index = $request->input('data_index');
        $acc_datas->data_field = $request->input('data_field');
        $acc_datas->data_name = $request->input('data_name');
        $acc_datas->default_value = $request->input('default_value');
        $acc_datas->data_type = $request->input('data_type');
        $acc_datas->data_formula = $request->input('data_formula');
        $acc_datas->data_background = $request->input('data_background');
        $acc_datas->data_format = $request->input('data_format');
        $acc_datas->listfile_index = $request->input('listfile_index');
        $acc_datas->lock_field = $request->input('lock_field');
        $acc_datas->special_field = $request->input('special_field');
        $acc_datas->max_length = $request->input('max_length');
        $acc_datas->min_length = $request->input('min_length');
        $acc_datas->layer = $request->input('layer');
        $acc_datas->comp_no = $request->input('comp_no');
        $acc_datas->use_digitgrouping = $request->input('use_digitgrouping');
        $acc_datas->num_digits = $request->input('num_digits');
        $acc_datas->data_width = $request->input('data_width');

        $acc_datas->save();

        return redirect('/actionlogs');
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
