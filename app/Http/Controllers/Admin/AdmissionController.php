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
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdmissionController extends Controller
{
    
    public function index()
    {   
        
        $admissions=Admission::with(['doctor','package'])->orderBy('id','desc')->get();
        // dd($admissions);
        return view('admin.pages.patient.admission.index',compact('admissions'));
    }

    public function create()
    {
        $patients= Patient::all();
        $doctors= Doctor::all();
        $package= Package::all();
        $insurance= Insurance::all();

        return view('admin.pages.patient.admission.create',compact('doctors','package','insurance','patients'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
       
            $validate=Validator::make($request->all(),[
                'patient_id'        => 'required',
                'doctor_id'         => 'required',
                'admission_date'    => 'required |date',
                'height'            => 'required',
                'weight'            => 'required',
                'allergies'         => 'required',
                'tendancy'          => 'required',
                'heart_diseases'    => 'required',
                'high_BP'           => 'required',
                'accident'          => 'required',
                'diabetic'          => 'required',
                'infection'         => 'required',
                'quota'             => 'required',
                'guardian_name'     => 'required |string',
                'guardian_relation' => 'required |string',
                'guardian_contact'  => 'required |numeric',
                'guardian_address'  => 'required |string',
            ]);
            if( $validate->fails() ){
                toastr()->error($validate->getMessageBag()->first());
            }

            $checkPatient=Patient::where('patient_id',$request->patient_id)->exists();
            
            $checkAdmitted= Admission::where('patient_id', $request->patient_id)->exists();
            
            if($checkPatient) {
                if( !$checkAdmitted ) {
                    $admission=new Admission();
                    $admission->create([
                        'admission_id'      => 'A'.date('Ymd').$admission->latest()->first()->id+1,
                        'patient_id'        => $request->patient_id,
                        'doctor_id'         => $request->doctor_id,
                        'admission_date'    => $request->admission_date,
                        'package_id'        => $request->package_id,
                        'insurance_id'      => $request->insurance_id,
                        'height'            => $request->height,
                        'weight'            => $request->weight,
                        'allergies'         => $request->allergies,
                        'tendancy'          => $request->tendancy,
                        'heart_diseases'    => $request->heart_diseases,
                        'high_BP'           => $request->high_BP,
                        'accident'          => $request->accident,
                        'diabetic'          => $request->diabetic,
                        'infection'         => $request->infection,
                        'quota'             => $request->quota,
                        'others'            => $request->others,
                        'guardian_name'     => $request->guardian_name,
                        'guardian_relation' => $request->guardian_relation,
                        'guardian_contact'  => $request->guardian_contact,
                        'guardian_address'  => $request->guardian_address,
                    ]);
    
                    toastr()->success('Admission has been successfully created.');
                    return redirect()->route('admissions.index');

                }
                toastr()->info('Patient Already Admitted.');
                return redirect()->back();
            }
            toastr()->error('Invalid Patient ID');
             return redirect()->back();

        
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
        // dd($request->all());
        try{
            $validate=Validator::make($request->all(),[
                // 'patient_id'        => 'required',
                'doctor_id'         => 'required',
                'admission_date'    => 'required |date',
                'height'            => 'required',
                'weight'            => 'required',
                'allergies'         => 'required',
                'tendancy'          => 'required',
                'heart_diseases'    => 'required',
                'high_BP'           => 'required',
                'accident'          => 'required',
                'diabetic'          => 'required',
                'infection'         => 'required',
                'quota'             => 'required',
                'guardian_name'     => 'required |string',
                'guardian_relation' => 'required |string',
                'guardian_contact'  => 'required |numeric',
                'guardian_address'  => 'required |string',
            ]);
                if( $validate->fails() ){
                toastr()->error($validate->getMessageBag()->first());
            }

                $admission=Admission::find($id);
                    $admission->update([
                        'admission_id'      => 'A'.date('Ymd').$admission->latest()->first()->id+1,
                        'patient_id'        => $admission->patient_id,
                        'doctor_id'         => $request->doctor_id,
                        'admission_date'    => $request->admission_date,
                        'package_id'        => $request->package_id,
                        'insurance_id'      => $request->insurance_id,
                        'height'            => $request->height,
                        'weight'            => $request->weight,
                        'allergies'         => $request->allergies,
                        'tendancy'          => $request->tendancy,
                        'heart_diseases'    => $request->heart_diseases,
                        'high_BP'           => $request->high_BP,
                        'accident'          => $request->accident,
                        'diabetic'          => $request->diabetic,
                        'infection'         => $request->infection,
                        'quota'             => $request->quota,
                        'others'            => $request->others,
                        'guardian_name'     => $request->guardian_name,
                        'guardian_relation' => $request->guardian_relation,
                        'guardian_contact'  => $request->guardian_contact,
                        'guardian_address'  => $request->guardian_address,
                    ]);
    
                    toastr()->success('Admission has been successfully updated.');
                    return redirect()->route('admissions.index');

        }catch(Exception $e)
            {
            Log::channel('custom')->error('Admission'.$e->getMessage());
            Toastr::warning('Something went wrong! Please try again.');
            return redirect()->back();
            } 
    }
    public function destroy($id)
    {
        Admission::find($id)->delete();
        return redirect()->back()->with(Toastr::error('Admission Record Deleted Successfully'));
    }
}
