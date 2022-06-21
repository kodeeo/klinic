@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Admission Details')}}</h1>
    <hr>
    <p><b>Patient ID: {{$admission->admission_id}}</b></p>
    <p><b>Admission ID: {{$admission->patient_id}}</b></p>
    <p><b>Patient's Name: {{$admission->patients->first_name.' '.$admission->patients->last_name}}</b></p>
    <p><b>Doctor Name: {{$admission->doctors->first_name.' '.$admission->doctors->last_name}}</b></p>
    <p><b>Admission Date: {{$admission->admission_date}}</b></p>
    <p><b>Discharge Date: {{$admission->discharge_date}}</b></p>
    <p><b>Package: {{$admission->package}}</b></p>
    <p><b>Insurance: {{$admission->insurance}}</b></p>
    <p><b>Height: {{$admission->height}}</b></p>
    <p><b>Weight: {{$admission->weight}}</b></p>
    <p><b>Allergies: {{$admission->allergies}}</b></p>
    <p><b>Tendacny: {{$admission->tendancy}}</b></p>
    <p><b>Heart Diseases: {{$admission->heart_diseases}}</b></p>
    <p><b>High Blood Pressure: {{$admission->high_BP}}</b></p>
    <p><b>Accident: {{$admission->accident}}</b></p>
    <p><b>Diabetic: {{$admission->diabetic}}</b></p>
    <p><b>Infection: {{$admission->infection}}</b></p>
    <p><b>Quota: {{$admission->quota}}</b></p>
    <p><b>Others: {{$admission->others}}</b></p>
    <p><b>Status: {{$admission->status}}</b></p>

    <h3>Guardian Info</h3>
    <p><b>Guardian's Name: {{$admission->guardian_name}}</b></p>
    <p><b>Relation: {{$admission->guardian_relation}}</b></p>
    <p><b>Contact: {{$admission->guardian_contact}}</b></p>
    <p><b>Address: {{$admission->guardian_address}}</b></p>
</div>
@endsection