<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visit;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Admission;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Insurance;
use App\Models\Package;

class AdmissionController extends Controller
{
    
    public function index()
    {   
        
        $admissions=Admission::orderBy('id','desc')->get();
        return view('admin.pages.patient.admission.index',compact('admissions'));
    }

 
    public function create()
    {
        $patients=Patient::all();
        $doctors=Doctor::all();
        $package=Package::all();
        $insurance=Insurance::all();
        
        
        
        return view('admin.pages.patient.admission.create',compact('doctors','package','insurance','patients'));
    }

 
    public function store(Request $request)
    {

     $checkPatient=Patient::where('patient_id',$request->patient_id)->exists();
     if($checkPatient) {
         $admission=new Admission();
         $admission->create([
             'admission_id' => 'A'.date('Ymd').$admission->latest()->first()->id+1,
             'patient_id' => $request->patient_id,
             'doctor_id' => $request->doctor_id,
             'admission_date' => $request->admission_date,
             
             'package_id' => $request->package_id,
             'insurance_id' => $request->insurance_id,

             //medical info
             'height' => $request->height,
             'weight' => $request->weight,
             'allergies' => $request->allergies,
             'tendancy' => $request->tendancy,
             'heart_diseases' => $request->heart_diseases,
             'high_BP' => $request->high_BP,
             'accident' => $request->accident,
             'diabetic' => $request->diabetic,
             'infection' => $request->infection,
             'quota' => $request->quota,
             'others' => $request->others,

             //guardian info
             'guardian_name' => $request->guardian_name,
             'guardian_relation' => $request->guardian_relation,
             'guardian_contact' => $request->guardian_contact,
             'guardian_address' => $request->guardian_address,
         ]);
         Toastr::success('Admission information has been recorded Successfully', 'success');
         return redirect()->back();
     }
       \toastr()->error('Invalid Patient ID');
        return redirect()->back()->withInput();
    }

    
    public function show($id)
    {
       
        $admission=Admission::with(['doctor','package'])->find($id);
        return view('admin.pages.patient.admission.show',compact('admission'));
    }


    public function edit($id)
    {
        $admission=Admission::find($id);
        $doctors=Doctor::all();
        $answers=['No','Yes'];
        return view('admin.pages.patient.admission.edit',compact('admission','doctors','answers'));
    }


    public function update(Request $request, $id)
    {
        $admission=Admission::find($id);
        $admission->update([
            'doctor_id' => $request->doctor_id,
            'admission_date' => $request->admission_date,
            'discharge_date' => $request->discharge_date,
            'package' => $request->package,
            'insurance' => $request->insurance,

            //medical info
            'height' => $request->height,
            'weight' => $request->weight,
            'allergies' => $request->allergies,
            'tendancy' => $request->tendancy,
            'heart_diseases' => $request->heart_diseases,
            'high_BP' => $request->high_BP,
            'accident' => $request->accident,
            'diabetic' => $request->diabetic,
            'infection' => $request->infection,
            'quota' => $request->quota,
            'others' => $request->others,

            //guardian info
            'guardian_name' => $request->guardian_name,
            'guardian_relation' => $request->guardian_relation,
            'guardian_contact' => $request->guardian_contact,
            'guardian_address' => $request->guardian_address,
        ]);
        Toastr::success('Admission information has been updated Successfully');
        return redirect()->route('admissions.index');
    }


    public function destroy($id)
    {
        Admission::find($id)->delete();
        return redirect()->back()->with(Toastr::error('Admission Record Deleted Successfully'));
    }
}
