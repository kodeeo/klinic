<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function list(){

return view('admin.pages.roles.index_role');

   }
   public function create(){

      return view('admin.pages.roles.create_role');
   }
   public function store(Request $request){
      
Role::create([

   'name'=>$request->name
]);


   }
}
