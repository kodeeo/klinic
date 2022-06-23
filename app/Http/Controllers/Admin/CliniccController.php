<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClinicSetup;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function info(){
        $clinic_infos=ClinicSetup::all();
        return view('admin.pages.clinicSetup.clinic-informations',compact('clinic_infos'));
    }

    public function setup(){
        return view('admin.pages.clinicSetup.clinic-setup');
    }

    public function store(Request $request){

        $filename='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/klinicLogo',$filename);
        }

        $request->validate([
            'email'=>'unique:clinic_setups'
        ]);

        ClinicSetup::create([

            'name'=>$request->name,
            'slogan'=>$request->slogan,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'web'=>$request->web,
            'image'=>$filename
        ]);

        Toastr::success('Clinic Informations Setup Successfully');
        return redirect()->route('clinic.informations');
    }

    public function edit($id){
        $clinic_info=ClinicSetup::find($id);
        return view('admin.pages.clinicSetup.clinic-info-edit',compact('clinic_info'));
    }

    public function update(Request $request, $id){
        $clinic_info=ClinicSetup::find($id);

        $request->validate([
            'email' => "unique:clinic_setups,email,$id"
        ]);

        $filename=$clinic_info->image;
        //Check image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/klinicLogo',$filename);
        }

        $clinic_info->update([
            'name'=>$request->name,
            'slogan'=>$request->slogan,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'web'=>$request->web,
            'image'=>$filename
            ]);

            Toastr::success('Clinic Informations updated Successfully');
            return redirect()->route('clinic.informations');
    }

    public function delete($id){
        ClinicSetup::find($id)->delete();

        Toastr::success('Clinic Informations deleted Successfully');
        return redirect()->back();
    }
}
