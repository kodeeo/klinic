@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Advancepayment Details')}}</h1>
    <hr>
    <div class="row">
        <div class="col-md-2">
            <p><b>Admission ID</b></p>
            <p><b>Reciept No</b></p>
            <p><b>Patient Id</b></p>
            <p><b>Payment Method</b></p>
            <p><b>Amount</b></p>
            <p><b>Card or Cheque no</b></p>
            <p><b>bank Name</b></p>
            <p><b>Status</b></p>

            
        </div>
     
        <div class="col-md-10">
        <p><b><span>: </span>{{$advancepayment-> admission_id}}</b></p>
        <p><b><span>: </span>{{$advancepayment->reciept_no}}</b></p>
        <p><b><span>: </span>{{$advancepayment->patient_id}}</b></p>
        <p><b><span>: </span>{{$advancepayment->payment_method}}</b></p>
        <p><b><span>: </span>{{$advancepayment->amount}}</b></p>
        <p><b><span>: </span>{{$advancepayment->card_or_cheque_no ?? 'N/A'}}</b></p>
        <p><b><span>: </span>{{$advancepayment->bank_name ?? 'N/A'}}</b></p>
        <p><b><span>: </span>{{$advancepayment->status}}</b></p>

     
        </div>
    </div>
</div>
@endsection

