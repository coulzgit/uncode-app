<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;

class ProjetController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:projet-list|projet-create|projet-edit|projet-delete', ['only' => ['index','show']]);
        $this->middleware('permission:projet-create', ['only' => ['create','store']]);
        $this->middleware('permission:projet-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:projet-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::latest()->paginate(5);
            return view('projets.index',compact('projets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom'=>'required',
            'account_id'=>'required',
            'created_by'=>'required'
        ]);
        Projet::create($request->all());
        return redirect()->route('projets.index')
            ->with('success','Projet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projets.show',compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $projet = Projet::find($id);
        return view('projets.edit',compact('projet'));
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
        request()->validate([
        'name' => 'required',
        'detail' => 'required',
        ]);
        $projet->update($request->all());
        return redirect()->route('projets.index')
        ->with('success','Projet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::find($id);
        $projet->delete();
            return redirect()->route('projets.index')
            ->with('success','Projet deleted successfully');
    }
}
