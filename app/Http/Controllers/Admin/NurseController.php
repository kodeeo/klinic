<?php

namespace App\Http\Controllers\Admin;

use App\Models\Nurse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class NurseController extends Controller
{
    public function nurseList()
    {
        $nurses=Nurse::all();
        return view('admin.pages.nurse.nurses-list',compact('nurses'));
    }

    public function nurseAdd()
    {
      
        return view('admin.pages.nurse.nurse-add');
    }

    public function nurseStore(Request $request)
    {

        $filename='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }

         //server side validation start
         $request->validate([
            'contact_no'=>'min:11|max:11',
            'email'=>'unique:nurses'
        ]);
        //server side validation end

        Nurse::create([
            'name'=>$request->name,
            'contact_no'=>$request->contact,
            'email'=>$request->email,
            'address'=>$request->address,
            'duty_hrs'=>$request->hrs,
            'password'=>bcrypt($request->password),
            'image'=>$filename

        ]);
        Toastr::success('Nurse added Successfully', 'success');
        return redirect()->route('nurse.list');
    }

    public function nurseEdit($id){
        $nurse=Nurse::find($id);

        return view('admin.pages.nurse.nurse-edit',compact('nurse'));
    }

    public function nurseUpdate(Request $request, $id){
        $nurse=Nurse::find($id);

        $filename=$nurse->image;
        //Check image or not
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }
            $nurse->update([
                'name'=>$request->name,
                'contact_no'=>$request->contact,
                'email'=>$request->email,
                'address'=>$request->address,
                'duty_hrs'=>$request->hrs,
                'image'=>$filename
    
            ]);
            Toastr::success('Nurse updated Successfully', 'success');
            return redirect()->route('nurse.list');
        
    }

    public function nurseDelete($id){

        Nurse::find($id)->delete();

        Toastr::success('Nurse deleted Successfully', 'success');
            return redirect()->route('nurse.list');
    }
    


}
