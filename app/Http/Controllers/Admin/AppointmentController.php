<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use App\Models\Department;
use App\Models\Appointment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments=Appointment::with('departmentRelation','doctorRelation')->get();
        return view('admin.pages.appointment.appointment-list',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('admin.pages.appointment.appointment-create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());


        Appointment::create([
            'appointment_id'=>Str::random(8),
            'p_id'=>$request->p_id,
            'd_department'=>$request->d_department,
            'doctor'=>$request->doctor,
            'date'=>$request->date,
            'problem'=>$request->problem,
            'status'=>$request->status
        ]);

        Toastr::success('Appointment Created Successfully');
        return redirect()->route('appointment.index');
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
        $departments=Department::all();
        $appointment=Appointment::find($id);
        return view('admin.pages.appointment.appointment-edit',compact('departments','appointment'));
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
        // dd($request->all());
        $appointment=Appointment::find($id);

        $appointment->update([
            'p_id'=>$request->p_id,
            'd_department'=>$request->d_department,
            'doctor'=>$request->doctor,
            'date'=>$request->date,
            'problem'=>$request->problem,
            'status'=>$request->status
        ]);

        Toastr::success('Appointment Updated Successfully');
        return redirect()->route('appointment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::find($id)->delete();

        Toastr::success('Appointment Deleted Successfully');
        return redirect()->route('appointment.index');
    }
}
