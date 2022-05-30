<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {  $permissions=Permission::paginate(10);
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
       return redirect()->route('admin.permission.index');
    }

    public function delete($permission_id)
    {
      Permission::find($permission_id)->delete();
      return redirect()->back();
    }
}
