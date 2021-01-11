<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccActionLogName;

class ActionlognameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$actionlog = DB::table('actionLogs')->get();
        $acc_action_log_names = AccActionLogName::all();
        return view('actionnames.index')->with('acc_action_log_names', $acc_action_log_names);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actionlognames.create');
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

            'log_index' => '',
            'log_description' => '',
            'default_view' => '',
            'lan_codelan_code' => '',
            'search_index' => '',

             ]);


        $acc_action_log_names = new AccActionLogName;
        $acc_action_log_names->log_index = $request->input('log_index');
        $acc_action_log_names->log_description = $request->input('log_description');
        $acc_action_log_names->default_view = $request->input('default_view');
        $acc_action_log_names->lan_codelan_code = $request->input('lan_codelan_code');
        $acc_action_log_names->search_index = $request->input('search_index');



        $acc_action_log_names->save();

        return redirect('/actionlognames');
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
