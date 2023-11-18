<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class InsuranceController extends Controller
{
   
    public function index()
    {
        $insurance=Insurance::all();
        return view('admin.pages.Insurance.index',compact('insurance'));
    }


    public function create()
    {

        return view('admin.pages.Insurance.create');
    }


    public function store(Request $request)
    {   
        try{

            $validate = Validator::make($request->all(), [
                'name'=> 'required',
                'service_tax'=> 'required',
                'discount'=> 'required',
                'remark'=> 'required',
                'insurance_no'=> 'required',
                'insurance_code'=> 'required',
                'disease_name'=> 'required',
                'disease_charge'=> 'required',
                'hospital_rate'=> 'required',
                'insurance_rate'=> 'required',
                'total'=> 'required',
                'status'=> 'required',
            ]);
            if( $validate->fails() ){
                toastr::error($validate->getMessageBag()->first());
                return redirect()->back();
            }

                Insurance::create([
                    'name'=>$request->name,
                    'service_tax'=>$request->service_tax,
                    'discount'=>$request->discount,
                    'remark'=>$request->remark,
                    'insurance_no'=>$request->insurance_no,
                    'insurance_code'=>$request->insurance_code,
                    'disease_name'=>$request->disease_name,
                    'disease_charge'=>$request->disease_charge,
                    'hospital_rate'=>$request->hospital_rate,
                    'insurance_rate'=>$request->insurance_rate,
                    'total'=>$request->total,
                    'status'=>$request->status,
                ]);
        }catch(\Exception $e){
            Log::channel('custom')->error('Insurence'.$e->getMessage());
            toastr()->error('something went wrong! Please try agian.');
            return redirect()->back();
        }
        toastr()->success('Insurance Added Successfully');
        return redirect()->route('insurance.index');
    }


    public function show($id)
    {
        $insurance=Insurance::find($id);
        return view('admin.pages.insurance.view',compact('insurance'));
    }

 
    public function edit($id)
    {   $insurence= Insurance::find($id);
       
        return view('admin.pages.Insurance.edit',compact('insurence'));
    }


    public function update(Request $request, $id)
    {
        try{

            $validate = Validator::make($request->all(), [
                'name'=> 'required',
                'service_tax'=> 'required',
                'discount'=> 'required',
                'remark'=> 'required',
                'insurance_no'=> 'required',
                'insurance_code'=> 'required',
                'disease_name'=> 'required',
                'disease_charge'=> 'required',
                'hospital_rate'=> 'required',
                'insurance_rate'=> 'required',
                'total'=> 'required',
                'status'=> 'required',
            ]);
            if( $validate->fails() ){
                toastr::error($validate->getMessageBag()->first());
                return redirect()->back();
            }

            $insurence=Insurance::find($id);
            $insurence->update([
                    'name'=>$request->name,
                    'service_tax'=>$request->service_tax,
                    'discount'=>$request->discount,
                    'remark'=>$request->remark,
                    'insurance_no'=>$request->insurance_no,
                    'insurance_code'=>$request->insurance_code,
                    'disease_name'=>$request->disease_name,
                    'disease_charge'=>$request->disease_charge,
                    'hospital_rate'=>$request->hospital_rate,
                    'insurance_rate'=>$request->insurance_rate,
                    'total'=>$request->total,
                    'status'=>$request->status,
                ]);
        }catch(\Exception $e){
            Log::channel('custom')->error('Insurence'.$e->getMessage());
            toastr()->error('something went wrong! Please try agian.');
            return redirect()->back();
        }
        toastr()->success('Insurance update Successfully');
        return redirect()->route('insurance.index');
    }


    public function destroy($id)
    {
        $destroy=Insurance::find($id);
        $destroy->delete();
        toastr()->error('insurance successfully deleted.');
        return redirect()->route('insurance.index');
    }
}
