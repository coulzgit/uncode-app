<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccdatanameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acc_data_names = acc_data_names::all();
        return view('doctadas.index')->with('acc_data_names', $acc_data_names);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctadas.index');
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





         $data_names = new AccDataName;
        $data_names->data_index = $request->input('data_index');
        $data_names->data_field = $request->input('data_field');
        $data_names->data_name = $request->input('data_name');
        $data_names->default_value = $request->input('default_value');
        $data_names->data_type = $request->input('data_type');
        $data_names->data_formula = $request->input('data_formula');
        $data_names->data_background = $request->input('data_background');
        $data_names->data_format = $request->input('data_format');
        $data_names->listfile_index = $request->input('listfile_index');
        $data_names->lock_field = $request->input('lock_field');
        $data_names->special_field = $request->input('special_field');
        $data_names->max_length = $request->input('max_length');
        $data_names->min_length = $request->input('min_length');
        $data_names->layer = $request->input('layer');
        $data_names->comp_no = $request->input('comp_no');
        $data_names->use_digitgrouping = $request->input('use_digitgrouping');
        $data_names->num_digits = $request->input('num_digits');
        $data_names->data_width = $request->input('data_width');$this->validate($request, [

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





         $data_names = new AccData;
        $data_names->data_index = $request->input('data_index');
        $data_names->data_field = $request->input('data_field');
        $data_names->data_name = $request->input('data_name');
        $data_names->default_value = $request->input('default_value');
        $data_names->data_type = $request->input('data_type');
        $data_names->data_formula = $request->input('data_formula');
        $data_names->data_background = $request->input('data_background');
        $data_names->data_format = $request->input('data_format');
        $data_names->listfile_index = $request->input('listfile_index');
        $data_names->lock_field = $request->input('lock_field');
        $data_names->special_field = $request->input('special_field');
        $data_names->max_length = $request->input('max_length');
        $data_names->min_length = $request->input('min_length');
        $data_names->layer = $request->input('layer');
        $data_names->comp_no = $request->input('comp_no');
        $data_names->use_digitgrouping = $request->input('use_digitgrouping');
        $data_names->num_digits = $request->input('num_digits');
        $data_names->data_width = $request->input('data_width');

        $data_names->save();

        return redirect('/doctadas');
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
