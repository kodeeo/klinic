<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use App\Models\Admission;
use Illuminate\Http\Request;
use App\Models\AdvancePayment;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdvancePaymentController extends Controller
{
    public function index()
    {   
        
        $advancePayment=AdvancePayment::orderby('id','desc')->get();
        return view('admin.pages.advancePayment.index',compact('advancePayment'));
    }
    public function create()
    {
        $admission=Admission::where('admission_id',\request()->admission_id)
        ->where('patient_id',\request()->patient_id)->first();

        return view('admin.pages.advancePayment.create',compact('admission'));
    }
    public function store(Request $request)
    {   
        try{

            $validate=Validator::make($request->all(),[
                'admission_id'   =>'required',
                'patient_id'     =>'required',
                'amount'         =>'required',
                'payment_method' =>'required',
    
            ]);
            if($validate->fails())
            {
                toastr()->error($validate->getMessageBag()->first());
            }
    
            $patient=Admission::where('admission_id',$request->admission_id)
                                ->where('patient_id',$request->patient_id)   
                                ->first();
            
            if($patient)
            {
                $advancePayment=new AdvancePayment();
    
                $advancePayment->create([
                    'reciept_no'     => 'ADVP'.date('Ymdhis'),
                    'admission_id'   => $request->admission_id,
                    'patient_id'     => $patient->patient_id,
                    'amount'         => $request->amount,
                    'payment_method' => $request->payment_method,
                ]);
        
                Toastr::success('Advance Payment Paid Successfully');
                return redirect()->route('advancepayment.index');
            }else{
                Toastr::error('No patient found.');
                return redirect()->back();
            }
        }catch(Exception $e)
        {
            Log::channel('custom')->error('AdvancePayment'.$e->getMessage());
            toastr()->warning('somthing went wrong! please try again');
            return redirect()->back();
        }
       
    }
    public function show($id)
    {
        $advancepayment=AdvancePayment::find($id);
        return view('admin.pages.advancePayment.show',compact('advancepayment'));
    }
    public function edit($id)
    {
        
        $advancepayment=AdvancePayment::find($id);
        $paymentmethods=['cash','card','cheque','other'];
        return view('admin.pages.advancePayment.edit',compact('advancepayment','paymentmethods'));
    }

    public function update(Request $request, $id)
    {
        try{

            $validate=Validator::make($request->all(),[
                'admission_id'   =>'required',
                'patient_id'     =>'required',
                'amount'         =>'required',
                'payment_method' =>'required',
    
            ]);
            if($validate->fails())
            {
                toastr()->error($validate->getMessageBag()->first());
            }
    
            $patient=Admission::where('admission_id',$request->admission_id)
                                ->where('patient_id',$request->patient_id)   
                                ->first();
            
            if($patient)
            {
                $advancePayment=new AdvancePayment();
    
                $advancePayment->update([
                    'reciept_no'     => $advancePayment->reciept_no,
                    'admission_id'   => $request->admission_id,
                    'patient_id'     => $patient->patient_id,
                    'amount'         => $request->amount,
                    'payment_method' => $request->payment_method,
                ]);
        
                Toastr::success('Advance Payment update Successfully');
                return redirect()->route('advancepayment.index');
            }else{
                Toastr::error('No patient found.');
                return redirect()->back();
            }
        }catch(Exception $e)
        {
            Log::channel('custom')->error('AdvancePayment'.$e->getMessage());
            toastr()->warning('somthing went wrong! please try again');
            return redirect()->back();
        }
    }
    public function destroy($id)
    {
        $advancepayment=AdvancePayment::find($id);
        $advancepayment->delete();
        toastr()->error('advancepayment successfully deleted.');
        return redirect()->back();
    }
}
