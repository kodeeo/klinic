@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Wardboy Profile Details')}}</h1>
    <hr>
    <img src={{url('/uploads/staffs',$wardboy->image)}} width="300px" alt="Warboy Image">

    <p><b>Name: {{$wardboy->first_name}} {{$wardboy->first_name}}</b></p>
    <p><b>Contact No: {{$wardboy->mobile}}</b></p>
    <p><b>Email: {{$wardboy->email}}</b></p>
    <p><b>Address: {{$wardboy->address}}</b></p>
    </div>
@endsection