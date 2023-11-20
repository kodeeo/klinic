@extends('admin.master')
@section('content')

<h1>{{__('Edit Advance Payment')}}</h1>
<hr>
<br>

<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
    <form action="{{route('advancepayment.update',$advancepayment->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="form-group col-6">
                <label for="admission_id">Admission ID</label>
                <input type="text" class="form-control" id="admission_id" name="admission_id"
                    placeholder="Enter Admission ID"  value="{{$advancepayment->admission_id}}">
            </div>
            <div class="form-group col-6">
                <label for="patient_id">Patient ID</label>
                <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="Enter Patient ID"
                     value="{{$advancepayment->patient_id}}">
            </div>
            <div class="form-group col-6 mt-2">
                <label for="amount">Amount <span style="color: red">*</span></label>
                <input type="number" value="500" min="500" class="form-control" id="amount" name="amount" placeholder="Enter Amount" value="{{ $advancepayment->amount }}" required>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="payment_method">Payment Method</label>
                <select class="form-control" name="payment_method" id="payment_method" required>
                    @foreach ($paymentmethods as $payment)
                        <option value="@if ($advancepayment->payment_method == $payment) selected
                            
                        @endif">{{$payment}}</option>                        
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-success btn-sm mt-4">update</button>

    </form>
</div>
@endsection
