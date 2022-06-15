<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Staff;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::whereNot('name','Admin')->get();
        $genders=['Male','Female','Others'];
        return view('admin.pages.staff.create',compact('roles','genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name=null;
        if($request->hasFile('image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/staffs',$image_name);
        }

        $request->validate([
            'role_id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'date_of_birth'=>'required',
            'gender'=>'required',
        ]);
        
        User::create([
            'role_id'=>$request->role_id,   
            'first_name'=>$request->first_name,   
            'last_name'=>$request->last_name,   
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'image'=>$image_name,
        ]);

        $nurse=Role::where('name','Nurse')->first();
        $wardboy=Role::where('name','Wardboy')->first();

        if($request->role_id==$nurse->id)
        {
            Toastr::success('Nurse Added Successfully');
            return redirect()->route('nurses.index');
        }
        elseif($request->role_id==$wardboy->id)
        
            Toastr::success('Wardboy Added Successfully');
            return redirect()->route('wardboys.index');
        
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

