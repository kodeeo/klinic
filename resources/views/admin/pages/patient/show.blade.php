@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Patient Profile Details')}}</h1>
    <hr>
    <img src="{{$patient->patient_image}}" style="border-radius:4px" width="200px" alt="patient image">

    <p><b>Patient ID: {{$patient->patient_id}}</b></p>
    <p><b>First Name: {{$patient->first_name}}</b></p>
    <p><b>Last Name: {{$patient->last_name}}</b></p>
    <p><b>Email: {{$patient->email}}</b></p>
    <p><b>Mobile No: {{$patient->mobile}}</b></p>
    <p><b>Date of Birth: {{$patient->date_of_birth}}</b></p>
    <p><b>Gender: {{$patient->gender}}</b></p>
    <p><b>Blood Group: {{$patient->blood_group}}</b></p>
    <p><b>Address: {{$patient->address}}</b></p>
    <p><b>Statud: {{$patient->status}}</b></p>
    </div>
@endsection