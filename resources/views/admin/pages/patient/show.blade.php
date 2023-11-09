@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Patient Profile Details')}}</h1>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-2">
                    <p><b>Patient ID</b></p>
                    <p><b>First Name</b></p>
                    <p><b>Last Name </b></p>
                    <p><b>Email</b></p>
                    <p><b>Mobile No</b></p>
                    <p><b>Date of Birth</b></p>
                    <p><b>Gender</b></p>
                    <p><b>Blood Group</b></p>
                    <p><b>Status</b></p>
                    <p><b></b></p>
                </div>
                <div class="col-md-10">

                    <p><span> : </span><b>{{$patient->patient_id}}</b></p>
                    <p><span> : </span><b>{{$patient->first_name}}</b></p>
                    <p><span> : </span><b>{{$patient->last_name}}</b></p>
                    <p><span> : </span><b>{{$patient->email}}</b></p>
                    <p><span> : </span><b>{{$patient->mobile}}</b></p>
                    <p><span> : </span><b>{{$patient->date_of_birth}}</b></p>
                    <p><span> : </span><b>{{$patient->gender}}</b></p>
                    <p><span> : </span><b>{{$patient->blood_group}}</b></p>
                    <p><span> : </span><b>{{$patient->address}}</b></p>
                    <p><span> : </span><b>{{$patient->status}}</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img class="mb-3" src="{{$patient->patient_image}}" style="border-radius:4px" width="200px" alt="patient image">
            <p><b><span>Full Name: </span>{{$patient->full_name}}</b></p>
            

        </div>
    </div>

</div>
@endsection