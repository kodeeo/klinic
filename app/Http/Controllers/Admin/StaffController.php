<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Designation;
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
        $designations=Designation::all();
        $staffs=Staff::paginate(10);
        return view('admin.pages.staff.index',compact('staffs','designations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $designations=Designation::all();
        return view('admin.pages.staff.create',compact('designations'));
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
        if($request->hasFile('staff_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('staff_image')->getClientOriginalExtension();
            $request->file('staff_image')->storeAs('/uploads/staffs',$image_name);
        }

        $request->validate([
            'designation_id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'date_of_birth'=>'required',
            'gender'=>'required',
            'degree'=>'required',
            'details'=>'required',
            'password'=>'required',

        ]);
        Staff::create([
            'designation_id'=>$request->designation_id,   
            'name'=>$request->name,   
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'degree'=>$request->degree,
            'details'=>$request->details,
            'password'=>bcrypt($request->password),
            'image'=>$image_name,


        ]);
        Toastr::success('Staff Added Successfully');
        return redirect()->route('staff.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staffs=Staff::find($id);
        return view('admin.pages.staff.view',compact('staffs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staffs=Staff::find($id);
        return view('admin.pages.staff.edit',compact('staffs'));
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
        $staffs=Staff::find($id);

        $image_name=$staffs->image;
        //              step 1: check image exist in this request.
                if($request->hasFile('staff_image'))
                {
                    // step 2: generate file name
                    $image_name=date('Ymdhis') .'.'. $request->file('staff_image')->getClientOriginalExtension();
        
                    //step 3 : store into project directory
        
                    $request->file('staff_image')->storeAs('/staffs',$image_name);
        
                }
            $staffs->update([
            'designation_id'=>$request->designation_id,   
            'name'=>$request->name,   
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'degree'=>$request->degree,
            'details'=>$request->details,
            'image'=>$image_name,
            ]);
            Toastr::success('Staff Updated Successfully');
            return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::find($id)->delete();
        Toastr::error('Staff Deleted Successfully');
        return redirect()->back(); 
    }
}

