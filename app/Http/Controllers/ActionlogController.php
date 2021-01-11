<?php

namespace App\Http\Controllers;

use App\Models\AccActionLog;
use Illuminate\Http\Request;

class ActionlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$actionlog = DB::table('actionLogs')->get();
        $acc_action_logs = AccActionLog::all();
        return view('actionlogs.index')->with('acc_action_logs', $acc_action_logs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actionlogs.create');
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

            'doc_id' => '',
            'stamp_uid' => '',
            'stamp_date' => '',
            'log_comment' => '',
            'created_at' => '',
            'updated_at' => '',
             ]);

        $acc_action_logs = new AccActionLog;
        $acc_action_logs->nom = $request->input('doc_id');
        $acc_action_logs->stamp_uid = $request->input('stamp_uid');
        $acc_action_logs->stamp_date = $request->input('interface1');
        $acc_action_logs->log_comment = $request->input('log_comment');
        $acc_action_logs->created_at = $request->input('created_at');
        $acc_action_logs->updated_at = $request->input('updated_at');



        $acc_action_logs->save();

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
