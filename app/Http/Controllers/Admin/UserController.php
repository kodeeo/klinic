<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function u_list(){
        $users= User::with('role')->get();
        
        return view('admin.pages.users.index', compact('users'));
    }
    public function u_add(){
      $roles=Role::all();
      return view( 'admin.pages.users.add', compact('roles'));
    }
    public function u_store( Request $request){

   User::create([
     'username'=>$request->name,
     'role_id'=>$request->role_id,
     'email'=>$request->email,
     'password'=>bcrypt($request->password),
     'image'=>$request->image
   ]);

      return redirect()->route('user.list');
    }
    public function u_view($user_id){
   $users= User::find($user_id);
    return view('admin.pages.users.view', compact('users'));

    }
}
