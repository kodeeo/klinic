@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Nurse Profile Details')}}</h1>
    <hr>
    <img src={{url('/uploads/staffs',$nurse->image)}} width="300px" alt="Nurse Image">

    <p><b>Name: {{$nurse->first_name}} {{$nurse->first_name}}</b></p>
    <p><b>Contact No: {{$nurse->mobile}}</b></p>
    <p><b>Email: {{$nurse->email}}</b></p>
    <p><b>Address: {{$nurse->address}}</b></p>
    </div>
@endsection