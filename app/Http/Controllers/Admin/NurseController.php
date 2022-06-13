<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Role::where('name','Nurse')->first();
        $nurses=User::where('role_id',$role->id)->get();
        return view('admin.pages.staff.nurse.index',compact('nurses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nurse=User::find($id);
        return view('admin.pages.staff.nurse.show',compact('nurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=Role::whereNot('name','Admin')->get();
        $nurse=User::find($id);
        $genders=['Male','Female','Others'];
        return view('admin.pages.staff.nurse.edit',compact('nurse','roles','genders'));
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
        $nurse=User::find($id);
        $image_name=$nurse->image;
                if($request->hasFile('image'))
                {
                    $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
                    $request->file('image')->storeAs('/uploads/staffs',$image_name);
                }

        $nurse->update([  
            'first_name'=>$request->first_name,   
            'last_name'=>$request->last_name,   
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'image'=>$image_name,
        ]);
        return redirect()->route('nurses.index')->with(Toastr::success('Nurse Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nurse=User::find($id)->delete();
        return redirect()->back()->with(Toastr::error('Nurse Deleted Successully'));
    }
}
