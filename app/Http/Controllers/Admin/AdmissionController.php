<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visit;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Admission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions=Admission::all();
        return view('admin.pages.patient.admission.index',compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients=Patient::all();
        $doctors=Doctor::all();
        return view('admin.pages.patient.admission.create',compact('patients','doctors'));
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
            
        // ]);

        $admission=Admission::create([
            
            'unique_admission_id'=>strtoupper(Str::random(10)),
            'unique_patient_id'=>$request->patient_unique_id,
            'doctor_id'=>$request->doctor_id,
            'admission_date'=>$request->admission_date,
            'discharge_date'=>$request->discharge_date,
            'package'=>$request->package,
            'insurance'=>$request->insurance,

            //medical info
            'height'=>$request->height,
            'weight'=>$request->weight,
            'allergies'=>$request->allergies,
            'tendancy'=>$request->tendancy,
            'heart_diseases'=>$request->heart_diseases,
            'high_BP'=>$request->high_BP,
            'accident'=>$request->accident,
            'diabetic'=>$request->diabetic,
            'infection'=>$request->infection,
            'quota'=>$request->quota,
            'others'=>$request->others,

            //guardian info
            'guardian_name'=>$request->guardian_name,
            'guardian_relation'=>$request->guardian_relation,
            'guardian_contact'=>$request->guardian_contact,
            'guardian_address'=>$request->guardian_address,

        ]);

        return redirect()->route('admissions.index')->with(Toastr::success('Admission information has been recorded Successfully','success'));

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