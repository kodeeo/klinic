<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClinicSetup;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Maatwebsite\Excel\Excel;

class ClinicController extends Controller 
// Controller name is Resource Controller
{
    public function index()
    {
        $clinic=ClinicSetup::all();
        return view('admin.pages.clinicSetup.show',compact('clinic'));
    }
    public function edit($id)
    {
        $clinic=ClinicSetup::find($id);
        return view('admin.pages.clinicSetup.edit',compact('clinic'));
    }

    public function update(Request $request, $id)
    {
        try{
        $clinic=ClinicSetup::find($id);

        $request->validate([
            'name'=>'required|min:3|max:100',
            'slogan'=>'required|max:200',
            'address'=>'required|max:100',
            'phone'=>'required|max:15',
            'email' => "unique:clinic_setups,email,$id",
            'web'=>'required|max:200',
            'image'=>'required|image|mimes:jpeg,png,svg|max:2048'
        ]);

        $filename=$clinic->image;
        //Check image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/klinicLogo',$filename);
        }

        $clinic->update([
            'name'=>$request->name,
            'slogan'=>$request->slogan,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'web'=>$request->web,
            'image'=>$filename
            ]);
        }catch(Exception $e){
            return($e->getMessage());
        }
            Toastr::success('successfully updated', 'Clinic');
            return redirect()->route('clinic.index');
    }
}
