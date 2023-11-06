<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Cache;

class PatientController extends Controller
{
    
    public function index()
    {
        if(Cache::has("patients"))
        {
            $patients = Patient::orderBy("id","desc")->paginate(10);
            Cache::get("patients", $patients);
        }else{
            $patients=Patient::orderBy('id','desc')->get();
            Cache::put('patients',$patients);
        }
        return view('admin.pages.patient.index',compact('patients'));
    }

   
    public function create()
    {
        return view('admin.pages.patient.create');
    }

   
    public function store(Request $request)
    {
        try{

            $image_name=null;
            if ($request->hasFile('patient_image'))
            {
                $image_name=date('Ymdhis').'.'.$request->file('patient_image')->getClientOriginalExtension();
                 $request->File('patient_image')->storeAs('/uploads/patients',$image_name);
            }
                $request->validate([
                    'first_name'=>'required |string',
                    'last_name'=>'required',
                    'email'=>'required|email',
                    'password'=>'required |string |min:6 |max:16',
                    'gender'=>'required |string',
                    'date_of_birth'=>'required |date',
                    'address'=>'required',
                    'mobile'=>'required|numeric|min:10 |regex:/^([0-9\s\-\+\(\)]*)$/',
                    'blood_group'=>'required',
                   'patient_image'=>'required'
                   ]);
    
                //creating new patients
            $patient=new Patient();
                $patient->create([
                'patient_id'=>'P'.date('Ymd').$patient->latest()->first()->id+1,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'date_of_birth'=>$request->date_of_birth,
                'gender'=>$request->gender,
                'address'=>$request->address,
                'mobile'=>$request->mobile,
                'blood_group'=>$request->blood_group,
                'patient_image'=>$image_name
            ]);
        }catch(\Exception $e){
            Log::channel('custom')->error('Patient'.$e->getMessage());
            Toastr::error('Something went wrong ! Please try again.');
            return redirect()->back();
        }
        Log::Channel('custom')->info("Patient has been craeted successfully");
        Toastr::success('Patient has been craeted successfully');
        return redirect()->route('patients.index');
        
    }

  
    public function show($id)
    {
        $patient=Patient::find($id);
        return view('admin.pages.patient.show',compact('patient'));
    }

   
    public function edit($id)
    {
        $patient=Patient::find($id);
        $genders=['Male','Female'];
        return view('admin.pages.patient.edit',compact('patient','genders'));
    }

    public function update(Request $request, $id)
        {
            //dd($request->all());
           try{

               $image_name=null;
               if ($request->hasFile('patient_image'))
               {
                   $image_name=date('Ymdhis').'.'.$request->file('patient_image')->getClientOriginalExtension();
                    $request->File('patient_image')->storeAs('/uploads/patients',$image_name);
               }
    
        $patient=Patient::find($id);
            $patient->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'blood_group'=>$request->blood_group,
            'patient_image'=>$image_name
        ]);
           }catch(\Exception $e)
           {
            Log::channel('custom')->error('Patient'.$e->getMessage());
            Toastr::error('Something went wrong ! Please try again.');
            return redirect()->back();
           }
        Log::Channel('custom')->info("Patient has been updated successfully");
        Toastr::success('Patient has been updated successfully');
        return redirect()->route('patients.index');
        }
    
    public function destroy($id)
    {
        Patient::find($id)->delete();
        Toastr::error('Patient Deleted Successully');
        return redirect()->back();
    }
}


