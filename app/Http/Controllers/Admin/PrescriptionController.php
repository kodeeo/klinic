<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Test;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Medicine;
use App\Models\Appointment;
use App\Models\ClinicSetup;
use App\Models\Prescription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $prescription_upid=Prescription::all()->pluck('unique_patient_id');
        // $appointment_upid=Appointment::where('unique_patient_id',$prescription_upid)->first();
        // dd($appointment_upid);
        // $patient_upid=Patient::all()->pluck('unique_patient_id');
        $prescriptions=Prescription::all();
        // $matched=
        // dd($prescriptions);
        return view('admin.pages.prescription.index',compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor=Doctor::all();
        $medicines=Medicine::all();
        $tests=Test::all();
        $clinic=ClinicSetup::where('id',1)->first();
        $date = Carbon::now()->format('d-m-Y');
        return view('admin.pages.prescription.create',compact('doctor','medicines','tests','clinic','date'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'unique_patient_id'=>'required',
        //     'patient_name'=>'required',
        //     'weight'=>'required',
        //     'blood_pressure'=>'required',
        //     'reference'=>'required',
            

        // ]);
        // dd($request->all());
        // dd(auth()->user()->username);
        $medicine_id=$request->medicine_id;
        // dd($medicine_id);
        $medicine_type=$request->medicine_type;
        $medicine_instruction=$request->medicine_instruction;
        $days=$request->days;
        $test_id=$request->test_id;
        $test_instruction=$request->test_instruction;

    foreach($medicine_id as $key=>$data)
    {
     Prescription::insert([
            'medicine_id'=>$data,
            'doctor_id'=>auth()->user()->username,
            'medicine_type'=>$medicine_type[$key],
            'medicine_instruction'=>$medicine_instruction[$key],
            'days'=>$days[$key],
            'unique_patient_id'=>$request->unique_patient_id,      
            'weight'=>$request->weight,   
            'blood_pressure'=>$request->blood_pressure,
            'reference'=>$request->reference,
            'type'=>$request->type,
            'fees'=>$request->fees,
            'patient_note'=>$request->patient_note,
            'complain'=>$request->complain,
            'insurance'=>$request->insurance,
            'test_id'=>$test_id[$key],
            'test_instruction'=>$test_instruction[$key],
        ]);
                    
            }   
       
        Toastr::success('Prescription Added Successfully');
        return redirect()->route('prescription.index');
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
