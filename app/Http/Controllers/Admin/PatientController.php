<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients=Patient::orderBy('id','desc')->get();
        return view('admin.pages.patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_name=null;
        if ($request->hasFile('patient_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('patient_image')->getClientOriginalExtension();
             $request->File('patient_image')->storeAs('/uploads/patients',$image_name);
        }
            $request->validate([
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'gender'=>'required',
                'date_of_birth'=>'required',
                'address'=>'required',
                'mobile'=>'required',
                'blood_group'=>'required',
//                'patient_image'=>'required'
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
        Log::Channel('custom')->info("Patient has been craeted successfully");

        return redirect()->route('patients.index')->with(Toastr::success('Patient has been craeted successfully'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient=Patient::find($id);
        return view('admin.pages.patient.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient=Patient::find($id);
        $genders=['Male','Female'];
        return view('admin.pages.patient.edit',compact('patient','genders'));
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
            //dd($request->all());
           

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

      
        //Log::Channel('custom')->info("Patient has been updated successfully");

        return redirect()->route('patients.index')->with(Toastr::success('Patient has been updated successfully'));
        }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::find($id)->delete();
        return redirect()->back()->with(Toastr::error('Patient Deleted Successully'));
    }
}


