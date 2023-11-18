@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Insurance Details')}}</h1>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">
                    <p><b>Name</b></p>
                    <p><b>Service Tax</b></p>
                    <p><b>Discount </b></p>
                    <p><b>Insurance NO</b></p>
                    <p><b>Insurance Code</b></p>
                    <p><b>Insurance Rate</b></p>
                    <p><b>Disease Name</b></p>
                    <p><b>Disease Charge</b></p>
                    <p><b>Hospital Rate</b></p>
                    <p><b>Total</b></p>
                    <p><b>Status</b></p>
                    <p><b>Remark</b></p>
                    
                </div>
                <div class="col-md-9">

                    <p><span> : </span><b>{{ $insurance->name }}</b></p>
                    <p><span> : </span><b>{{ $insurance->service_tax }}</b></p>
                    <p><span> : </span><b>{{ $insurance->discount }}</b></p>
                    <p><span> : </span><b>{{ $insurance->insurance_no }}</b></p>
                    <p><span> : </span><b>{{ $insurance->insurance_code }}</b></p>
                    <p><span> : </span><b>{{ $insurance->insurance_rate }}</b></p>
                    <p><span> : </span><b>{{ $insurance->disease_name }}</b></p>
                    <p><span> : </span><b>{{ $insurance->disease_charge }}</b></p>
                    <p><span> : </span><b>{{ $insurance->hospital_rate }}</b></p>
                    <p><span> : </span><b>{{ $insurance->total }}</b></p>
                    <p><span> : </span><b>{{ $insurance->status }}</b></p>
                    <p><span> : </span><b>{{ $insurance->remark }}</b></p>
                </div>
            </div>
        </div>
       
    </div>

</div>
@endsection