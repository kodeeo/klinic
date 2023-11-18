<?php

namespace App\Http\Controllers\Admin\Activities;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Investigation;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class InvestigationController extends Controller
{
    public function index()
    {
        $investigations=Investigation::all();
        return view('admin.pages.hospital activities.investigation.index',compact('investigations'));
    }
    public function create()
    {
        $doctor=Doctor::all();
        return view('admin.pages.hospital activities.investigation.create',compact('doctor'));
    }
    public function store(Request $request)
    {
        try{

            $validate=Validator::make($request->all(),[
                'patient_id'        =>'required |min:6',
                'date'              =>'required |date',
                'title'             =>'required |string',
                'description'       =>'required',
                'doctor_name'       =>'required',
                'investigation_img' =>'required',
    
            ]);
            
            if( $validate->fails()){
                toastr()->error($validate->getMessageBag()->first());
            }
            $image_name=null;
            if($request->hasFile('investigation_img'))
            {
                $image_name=date('Ymdhis').'.'.$request->file('investigation_img')->getClientOriginalExtension();
                $request->file('investigation_img')->storeAs('/uploads/investigations',$image_name);
            }
    
            Investigation::create([
                'patient_id'        =>$request->patient_id,
                'date'              => $request->date,
                'title'             => $request->title,
                'description'       => $request->description,
                'doctor_id'         =>$request->doctor_name,
                'investigation_img' =>$image_name,
            ]);
            Toastr::success('investigation created successfully');
            return redirect()->route('investigations.index');

        }catch(Exception $e){
            Log::channel('custom')->error('Investigation'.$e->getMessage());
            Toastr::error('Something went wrong! Please try again.');
            return redirect()->back();
        }
    }
    public function show($id)
    {
        $investigations=Investigation::find($id);
        return view('admin.pages.hospital activities.investigation.view', compact('investigations'));
    }
    public function edit($id)
    {
        $investigations=Investigation::find($id);
        $doctor = Doctor::all();
        return view('admin.pages.hospital activities.investigation.edit', compact('investigations','doctor'));
    }
    public function update(Request $request, $id)
    {
        try{
            $validate=Validator::make($request->all(),[
                'patient_id'        =>'required |min:6',
                'date'              =>'required |date',
                'title'             =>'required |string',
                'description'       =>'required',
                'doctor_name'       =>'required',
                'investigation_img' =>'required',
    
            ]);
            
            if( $validate->fails()){
                toastr()->error($validate->getMessageBag()->first());
            }
            $investigations=Investigation::find($id);
    
            $image_name=$investigations->investigation_img;
            if($request->hasFile('investigation_img'))
            {
                $image_name=date('Ymdhis').'.'.$request->file('investigation_img')->getClientOriginalExtension();
                $request->file('investigation_img')->storeAs('/uploads/investigations',$image_name);
            }
    
            $investigations->update([
                'patient_id'        =>$request->patient_id,
                'date'              => $request->date,
                'title'             => $request->title,
                'description'       => $request->description,
                'doctor_id'         =>$request->doctor_name,
                'investigation_img' =>$image_name,
            ]);
            Toastr::success('investigation updated successfully');
            return redirect()->route('investigations.index');

        }catch(Exception $e){
            Log::channel('custom')->error('Invastigation'.$e->getMessage());
            toastr()->error('something went wrong! Please try again.');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        Investigation::find($id)->delete();
        Toastr::error('investigation has been deleted');
        return redirect()->route('investigations.index');
    }
}
