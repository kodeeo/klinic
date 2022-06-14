<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role_Permission;
use App\Http\Controllers\Controller;
use App\Models\Module;

class PermissionController extends Controller
{
    public function index()
    {  $permissions=Permission::all();
        return view('admin.pages.permission.index',compact('permissions'));
    }

    public function create()
    {
        return view('admin.pages.permission.create');
    }


    public function store(Request $request)
    {
      Permission::create([
       'name'=>$request->permissionname,
       'slug'=>$request->permissionslug,
       'status'=>$request->permissionstatus,

      ]);
      return redirect()->back()->with('msg','permission create successfully');
    }


    public function show($permission_id)
    {
        $permissionshow=Permission::find($permission_id);
        return view('admin.pages.permission.view',compact('permissionshow'));
    }

    public function edit($permission_id)
    {
        $permissionedit=Permission::find($permission_id);
        return view('admin.pages.permission.edit',compact('permissionedit'));
    }

    public function update(Request $request,$permission_id)
    {
       $permissionupdate=Permission::find($permission_id);
       $permissionupdate->update([
           
       'name'=>$request->permissionname,
       'slug'=>$request->permissionslug,
       'status'=>$request->permissionstatus,

       ]);
       return redirect()->route('permission.index');
    }

    
    public function destroy($permission_id)
    {
      Permission::find($permission_id)->delete();
      return redirect()->back();
    }

    public function permissionList($role_id){
        $role = Role::find($role_id);
        $modules = Module::with('permissions')->get();
        return view('admin.pages.permission.permissions', compact('role', 'modules'));
    }


    public function assign(Request $request, $role_id){
        $role=Role::find($role_id);
        $role->permissions()->sync($request->permission_ids);
        return redirect()->back();
    }


    public function permissionEdit($role_id){
        $role=Role::find($role_id);
        $modules = Module::with('permissions')->get();
        // dd($permission->all());
        return view('admin.pages.permission.permissionEdit', compact('role','modules'));
    }

    public function permissionUpdate(Request $request, $role_id){
        $role=Role::with('rolepermission')->find($role_id);
        $role->rolepermission()->sync($request->permission_ids);
        return redirect()->back();


    }
}
