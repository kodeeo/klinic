<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::all();

         return view('admin.pages.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'department_id'=>'required',
            'designation'=>'required',
            'details'=>'required',
            'available'=>'required',
            'room_no'=>'required',
            'fee'=>'required',
            'password'=>'required',

        ]);
        Doctor::create([
            'name'=>$request->name,   
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'department_id'=>$request->department_id,
            'designation'=>$request->designation,
            'details'=>$request->details,
            'available'=>$request->available,
            'room_no'=>$request->room_no,
            'fee'=>$request->fee,
            'password'=>bcrypt($request->password),

        ]);
        Toastr::success('Doctor Added Successfully');
        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor=Doctor::find($id);
        return view('admin.pages.doctor.view',compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor=Doctor::find($id);
        return view('admin.pages.doctor.edit',compact('doctor'));
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
        $doctor=Doctor::find($id);
        $doctor->update([
            'name'=>$request->name,   
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'department_id'=>$request->department_id,
            'designation'=>$request->designation,
            'details'=>$request->details,
            'available'=>$request->available,
            'room_no'=>$request->room_no,
            'fee'=>$request->fee,
            'password'=>bcrypt($request->password),

        ]);
        Toastr::success('Doctor Updated Successfully');
        return redirect()->route('doctor.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        Toastr::error('Doctor Deleted Successfully');
        return redirect()->back();        
    }
}
