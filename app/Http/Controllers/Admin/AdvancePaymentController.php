<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use App\Models\Admission;
use Illuminate\Http\Request;
use App\Models\AdvancePayment;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AdvancePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advancePayment=AdvancePayment::orderby('id','desc')->get();
        return view('admin.pages.advancePayment.index',compact('advancePayment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admission_id=Admission::where('admission_id',\request()->admission_id)->first();
        $patient_id=Admission::where('patient_id',\request()->patient_id)->first();
        return view('admin.pages.advancePayment.create',compact('admission_id','patient_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advancePayment=new AdvancePayment();
        $advancePayment->create([
            'reciept_no' => 'ADVP'.date('Ymd'),
            'admission_id' => $request->admission_id,
            'patient_id' => $request->patient_id,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
        ]);

        return redirect()->route('advancepayment.index')->with(Toastr::success('Advance Payment Paid Successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
