@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Admission Details')}}</h1>
    <hr>
    <div class="row">
        <div class="col-md-2">
            <p><b>Patient ID</b></p>
            <p><b>Admission ID</b></p>
            <p><b>Doctor Name</b></p>
            <p><b>Admission Date</b></p>
            <p><b>Package</b></p>
            <p><b>Insurance</b></p>
            <p><b>Height</b></p>
            <p><b>Weight</b></p>
            <p><b>Allergies</b></p>
            <p><b>Tendacny</b></p>
            <p><b>Heart Diseases</b></p>
            <p><b>High Blood Pressure</b></p>
            <p><b>Accident</b></p>
            <p><b>Diabetic</b></p>
            <p><b>Infection</b></p>
            <p><b>Quota</b></p>
            <p><b>Others</b></p>
            <p><b>Status</b></p>
            
        </div>
     
        <div class="col-md-10">
        <p><b><span>: </span>{{$admission->admission_id}}</b></p>
        <p><b><span>: </span>{{$admission->patient_id}}</b></p>
        <p><b><span>: </span>{{$admission->doctor->full_name}}</b></p>
        <p><b><span>: </span>{{$admission->admission_date}}</b></p>
        <p><b><span>: </span>{{$admission->package->name ?? 'N/A'}}</b></p>
        <p><b><span>: </span>{{$admission->insurances->name ?? 'N/A'}}</b></p>
        <p><b><span>: </span>{{$admission->height}}</b></p>
        <p><b><span>: </span>{{$admission->weight}}</b></p>
        <p><b><span>: </span>{{$admission->allergies}}</b></p>
        <p><b><span>: </span>{{$admission->tendancy}}</b></p>
        <p><b><span>: </span>{{$admission->heart_diseases}}</b></p>
        <p><b><span>: </span>{{$admission->high_BP}}</b></p>
        <p><b><span>: </span>{{$admission->accident}}</b></p>
        <p><b><span>: </span>{{$admission->diabetic}}</b></p>
        <p><b><span>: </span>{{$admission->infection}}</b></p>
        <p><b><span>: </span>{{$admission->quota}}</b></p>
        <p><b><span>: </span>{{$admission->others ?? 'N/A'}}</b></p>
        <p><b><span>: </span>{{$admission->status}}</b></p>
     
        </div>
        <h3>Guardian Info</h3>
            <div class="col-md-2">
                <p><b>Guardian's Name</b></p>
                <p><b>Relation</b></p>
                <p><b>Contact</b></p>
                <p><b>Address</b></p>
            </div>
            <div class="col-md-10">
                <p><b><span>: </span>{{$admission->guardian_name}}</b></p>
                <p><b><span>: </span>{{$admission->guardian_relation}}</b></p>
                <p><b><span>: </span>{{$admission->guardian_contact}}</b></p>
                <p><b><span>: </span>{{$admission->guardian_address}}</b></p>
            </div>
            
    </div>
</div>
@endsection

