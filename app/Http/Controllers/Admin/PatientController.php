<?php

namespace App\Http\Controllers\Admin;

use App\Models\Visit;
use App\Models\Patient;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PatientController extends Controller
{
    public function patientlist()
    {
        $patients=Patient::paginate(10);
        return view('admin.pages.patient.list',compact('patients'));
    }

    public function patientAdd()
    {
        return view('admin.pages.patient.create');
    }
    public function patientStore(Request $request)
    {


        $image_name=null;
        // step1
        if ($request->hasFile('patient_image'))

        // step 2 genertae file name
        {

            $image_name=date('Ymdhis').'.'.$request->file('patient_image')->getClientOriginalExtension();
            // step 3: store project directory
             $request->File('patient_image')->storeAs('/uploads/patients',$image_name);
        }
        {
            // dd($request->all());
            $request->validate([
                'first_name'=>'required',
                'last_name'=>'required',
                'case_id'=>'required',
                'p_type'=>'required',
                'email'=>'required',
                'password'=>'required',
                'gender'=>'required',
                'date_of_birth'=>'required',
                'address'=>'required',
                'phoneNumber'=>'required',
                'blood_group'=>'required',
                'patient_image'=>'required'
               ]);




            //creating new patients

        Patient::create([
            'case_no'=>$request->case_no,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'p_type'=>$request->p_type,
            'email'=>$request->email,
            'password'=>$request->password,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'phoneNumber'=>$request->phoneNumber,
            'blood_group'=>$request->blood_group,
            'patient_image'=>$image_name
        ]);
        Log::Channel('custom')->info("Patient has been craeted successfully");

        Toastr::success('Patitent Created Successfully', 'success');
        return redirect()->route('patient.list');


     }
    }




    public function patientAdmissionAdd($patient_id)
    {
        $new_patient=Patient::find($patient_id);
        return view('admin.pages.patient.admission',compact('new_patient'));
    }

    public function patientAdmissionStore(Request $request)
    {
        //validation
        $request->validate([
            'name'=>'required',
            'father_name'=>'required',
            'mother_name'=>'required',

            'relation'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'nid'=>'required',
            'occupation'=>'required',
            'payment'=>'required',
            'weight'=>'required',
            'allergies'=>'required',
            'tendancy'=>'required',
            'heart_diseases'=>'required',
            'high_BP'=>'required',
            'accident'=>'required',
            'diabetic'=>'required',
            'others'=>'required',
            'infection'=>'required',
            'details'=>'required',
            'condition'=>'required',
            'insurance'=>'required',
            'worksafe'=>'required',
            'tac'=>'required',
            'quota'=>'required',
            'referred_by'=>'required',
            'visit'=>'required'
        ]);

        $admission=Admission::create([
            'patient_id'=>$request->patient_id,
            'bed_id'=>$request->bed_id,
            'doctor_id'=>$request->doctor_id,
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,

            'relation'=>$request->relation,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'nid'=>$request->nid,
            'occupation'=>$request->occupation,
            'payment'=>$request->payment,
            //medical info
            'weight'=>$request->weight,
            'allergies'=>$request->allergies,
            'tendancy'=>$request->tendancy,
            'heart_diseases'=>$request->heart_diseases,
            'high_BP'=>$request->high_BP,
            'accident'=>$request->accident,
            'diabetic'=>$request->diabetic,
            'others'=>$request->others,
            'infection'=>$request->infection,
            'details'=>$request->details,
            'condition'=>$request->condition,
            'insurance'=>$request->insurance,
            'worksafe'=>$request->worksafe,
            'tac'=>$request->tac,
            'quota'=>$request->quota,
            'referred_by'=>$request->referred_by,
            'visit'=>$request->visit,

        ]);
            Visit::create([
            'admission_id'=> $admission->id,
            'weight'=>$request->weight,
            'allergies'=>$request->allergies,
            'tendancy'=>$request->tendancy,
            'heart_diseases'=>$request->heart_diseases,
            'high_BP'=>$request->high_BP,
            'accident'=>$request->accident,
            'diabetic'=>$request->diabetic,
            'others'=>$request->others,
            'infection'=>$request->infection,
            'details'=>$request->details,
            'condition'=>$request->condition,
            'insurance'=>$request->insurance,
            'worksafe'=>$request->worksafe,
            'tac'=>$request->tac,
            'quota'=>$request->quota,
            'referred_by'=>$request->referred_by,
            'visit'=>$request->visit,

        ]);

        Toastr::success('Admission information has been  recorded Successfully', 'success');

    }

    public function patientAdmissionList()
    {
        return view('admin.pages.patient.admission_list');
    }

}
