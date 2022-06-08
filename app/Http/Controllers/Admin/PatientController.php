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
              'case_no'=>'required',  
              'name'=>'required',
              'ptype'=>'required',
              'email'=>'required',
              'birthdate'=>'required',
              'gender'=>'required',
              'father'=>'required',
              'mother'=>'required',
              'nid'=>'required',
              'passport'=>'required',
              'language'=>'required',
              'spouse'=>'required',
              'b_place'=>'required',
              'address'=>'required',
              'phone'=>'required',
              'occupation'=>'required',
              'blood'=>'required',
              'status'=>'required',
              'religion'=>'required',
              'height'=>'required',
              'weight'=>'required',
              'e_name'=>'required',
              'relation'=>'required',
              'contact_number'=>'required',
              'patient_image'=>'required'
              
             ]);
            
            //creating new patients
     
        Patient::create([
            'case_no'=>$request->case_no,
            'name'=>$request->name,
            'ptype'=>$request->ptype,
            'email'=>$request->email,
            'birthdate'=>$request->birthdate,
            'gender'=>$request->gender,
            'father'=>$request->father,
            'mother'=>$request->mother,
            'nid'=>$request->nid,
            'passport'=>$request->passport,
            'language'=>$request->language,
            'spouse'=>$request->spouse,
            'b_place'=>$request->b_place,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'occupation'=>$request->occupation,
            'blood'=>$request->blood,
            'status'=>$request->status,
            'religion'=>$request->religion,
            'height'=>$request->height,
            'weight'=>$request->weight,
            'e_name'=>$request->e_name,
            'relation'=>$request->relation,
            'contact_number'=>$request->contact_number,
            'password'=>$request->password,
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
            'father'=>'required',
            'mother'=>'required',
            'room'=>'required',
            'doctor'=>'required',
            'relation'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'nid'=>'required',
            'occupation'=>'required',
            'payment'=>'required',
            'allergies'=>'required',
            'tendancy'=>'required',
            'heart'=>'required',
            'pressure'=>'required',
            'accident'=>'required',
            'diabetic'=>'required',
            'others'=>'required',
            'infection'=>'required',
            'details'=>'required',
            'condition'=>'required',
            'insurance'=>'required',
            'worksafe'=>'required',
            'tac'=>'required',
            'pension'=>'required',
            'know'=>'required',
            'visit'=>'required'
        ]);

        $admission=Admission::create([
            'patient_id'=>$request->patient_id,
            'name'=>$request->name,
            'father'=>$request->father,
            'mother'=>$request->mother,
            'room'=>$request->room,
            'doctor'=>$request->doctor,
            'relation'=>$request->relation,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'nid'=>$request->nid,
            'occupation'=>$request->occupation,
            'payment'=>$request->payment,
            //medical info
            'allergies'=>$request->allergies,
            'tendancy'=>$request->tendancy,
            'heart'=>$request->heart,
            'pressure'=>$request->pressure,
            'accident'=>$request->accident,
            'diabetic'=>$request->diabetic,
            'others'=>$request->others,
            'infection'=>$request->infection,
            'details'=>$request->details,
            'condition'=>$request->condition,
            'insurance'=>$request->insurance,
            'worksafe'=>$request->worksafe,
            'tac'=>$request->tac,
            'pension'=>$request->pension,
            'know'=>$request->know,
            'visit'=>$request->visit,
           
        ]);
            Visit::create([
            'admission_id'=> $admission->id,
            'allergies'=>$request->allergies,
            'tendancy'=>$request->tendancy,
            'heart'=>$request->heart,
            'pressure'=>$request->pressure,
            'accident'=>$request->accident,
            'diabetic'=>$request->diabetic,
            'others'=>$request->others,
            'infection'=>$request->infection,
            'details'=>$request->details,
            'condition'=>$request->condition,
            'insurance'=>$request->insurance,
            'worksafe'=>$request->worksafe,
            'tac'=>$request->tac,
            'pension'=>$request->pension,
            'know'=>$request->know,
            'visit'=>$request->visit,
           
        ]);

        Toastr::success('Admission information has been  recorded Successfully', 'success');
       
    }

    public function patientAdmissionList()
    {
        return view('admin.pages.patient.admission_list');
    }

}
