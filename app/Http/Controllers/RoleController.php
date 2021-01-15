<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    function __construct()
	{
		// $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
		// $this->middleware('permission:role-create', ['only' => ['create','store']]);
		// $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
		// $this->middleware('permission:role-delete', ['only' => ['destroy']]);
	}
	public function index(Request $request)
	{
		$roles = Role::orderBy('id','DESC')->paginate(5);
		return view('admin.params.roles.index',compact('roles'))
		->with('i', ($request->input('page', 1) - 1) * 5);
	}
	public function create()
	{

		$permissions = Permission::get();
		return view('admin.params.roles.create',compact('permissions'));
	}
	public function store(Request $request)
	{
		$this->validate($request, [
		'name' => 'required|unique:roles,name',
		'permission' => 'required',
		]);
		$role = Role::create(['name' => $request->input('name')]);
		$role->syncPermissions($request->input('permission'));

		if($request->ajax())
        {
            return array(
                'responseCode'=>200,
            ) ;
        }
		return redirect()->route('roles.index')
		->with('success','Role created successfully');
	}
	public function show(Request $request)
	{
		$role_id = $request['role_id'];
		$role = Role::find($role_id);
		if (empty($role)) {
			return redirect(app()-> getLocale().'/404');
		}
		$rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
		->where("role_has_permissions.role_id",$role_id)
		->get();
		return view('admin.params.roles.show',compact('role','rolePermissions'));
	}
	public function edit(Request $request)
	{
		$role_id = $request['role_id'];
		$role = Role::find($role_id);
        if (empty($role)) {
            if($request->ajax())
            {
                return array(
                    'responseCode'=>404
                ) ;
            }
            return redirect(app()-> getLocale().'/404');
        }


		$permission = Permission::get();
		$rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$role_id)
		->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
		->all();
		return view('admin.params.roles.edit',compact('role','permission','rolePermissions'));
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
		'name' => 'required',
		'permission' => 'required',
		]);
		$role = Role::find($id);
		$role->name = $request->input('name');
		$role->save();
		$role->syncPermissions($request->input('permission'));
		return redirect()->route('roles.index')
		->with('success','Role updated successfully');
	}

	public function destroy($id)
	{
		DB::table("roles")->where('id',$id)->delete();
		return redirect()->route('roles.index')
		->with('success','Role deleted successfully');
	}



}
