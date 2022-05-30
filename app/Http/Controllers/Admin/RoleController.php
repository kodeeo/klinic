<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class RoleController extends Controller
{
   public function list(){
      $roles = Role::all();

return view('admin.pages.roles.index_role', compact('roles'));

   }
   public function create(){

      return view('admin.pages.roles.create_role');
   }
   public function store(Request $request){
      
Role::create([

   'name'=>$request->name,
   'status'=>$request->status,
   'description'=>$request->description,
   'slug'=>$request->slug
]);

Toastr::success('Role Created Successfully', 'success');
return redirect()->back();
   }
  public function detail($role_id){
     $role= Role::find($role_id);
 
return view('admin.pages.roles.details' ,compact('role'));


  }


   public function edit($role_id){
      $role= Role::find($role_id);
      $roles = Role::select('id', 'name')->orderBy('id', 'desc')->get();
      return view('admin.pages.roles.edit_role', compact('role', 'roles'));



   }
   public function update(Request $request, $role_id){

  $roles= Role::all();
  Role::where('id', $role_id)->update([
    'name'=>$request->name,
    'status'=>$request->status,
    'description'=>$request->description,
    'slug'=>$request->slug

  ]);
  Toastr::success('Role Updated Successfully', 'success');
  return redirect()->back();
   }



   
   Public function delete($role_id){
      Role::find($role_id)->delete();
      Toastr::success('Role Deleted Successfully', 'success');



      return redirect()->back();



   }
   
}
