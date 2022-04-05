<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PatientController extends Controller
{
    public function patientlist()
    {
        return view('admin.pages.patient.list');
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
             $request->File('patient_image')->storeAs('/patients',$image_name);
        }
        {
            // dd($request->all());
            $request->validate([
              'name'=>'required',
              'ptype'=>'required',
              'email'=>'required',
              'birthdate'=>'required',
              'gender'=>'required',
              'address'=>'required',
              'phone'=>'required',
              'occupation'=>'required',
              'blood'=>'required',
              'status'=>'required',
              'religion'=>'required',
              'height'=>'required',
              'weight'=>'required',
              'patient_image'=>'required'
              
             ]);
            
            //creating new patients
     
        Patient::create([
            'name'=>$request->name,
            'ptype'=>$request->ptype,
            'email'=>$request->email,
            'birthdate'=>$request->birthdate,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'occupation'=>$request->occupation,
            'blood'=>$request->blood,
            'status'=>$request->status,
            'religion'=>$request->religion,
            'height'=>$request->height,
            'weight'=>$request->weight,
            'patient_image'=>$image_name
        ]);

        Toastr::success('Patitent Created Successfully', 'success');
        return redirect()->route('patient.list');

 
     }
    }
}
