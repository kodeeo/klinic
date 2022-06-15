<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\RedirectResponse;

class RoleController extends Controller
{
   public function list(){
   $roles = Role::paginate(10);

return view('admin.pages.roles.index_role', compact('roles'));

   }
   public function create()
   {
      $modules = Module::with('permissions')->get();
      return view('admin.pages.roles.create_role', compact('modules'));
   }
   public function store(Request $request)
   {
      // $request->validate([
      //    'name' => 'required|unique:roles, name'
      // ]);
      // dd($request->all());

      $role = Role::create([
         'name' => $request->name,
         'slug' => Str::slug($request->name),
      ]);
      $role->permissions()->sync($request->permission_ids);
   }
   



  public function detail($role_id){
     $role= Role::find($role_id);
 
return view('admin.pages.roles.details' ,compact('role'));


  }


   public function edit($role_id){
      $role= Role::find($role_id);
      $modules = Module::with('permissions')->get();
      $roles = Role::select('id', 'name')->orderBy('id', 'desc')->get();
      return view('admin.pages.roles.edit_role', compact('role', 'roles', 'modules'));



   }
//    public function update(Request $request, $role_id){

//   $roles= Role::all();
//   Role::where('id', $role_id)->update([
//     'name'=>$request->name,
//    //  'status'=>$request->status,
//     'description'=>$request->description,
//    //  'slug'=>$request->slug

//   ]);
//   Toastr::success('Role Updated Successfully', 'success');
//   return redirect()->back();
//    }

public function update(Request $request,$role_id): RedirectResponse
    {
        $role=Role::where('id',$role_id)->first();

        $role->update([
            'name'=>$request->name,
            'slug'=> Str::slug($request->name),
        ]);
        $role->permissions()->sync($request->permission_ids);
        return redirect()->route('role.list')->with('success','Role Updated Successfully');
    }



   
   Public function delete($role_id){
      Role::find($role_id)->delete();
      Toastr::success('Role Deleted Successfully', 'success');



      return redirect()->back();



   }
   
}
