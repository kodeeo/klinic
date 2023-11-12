@extends('admin.master')
@section('content')

<div class="container">
    <h1>Nurse Profile Details</h1>
    <hr>
    <img src={{url('/uploads/staffs',$nurse->image)}} width="300px" alt="Nurse Image">

    <p><b>Name: {{$nurse->first_name ." ". $nurse->last_name}}</b></p>
    <p><b>Gender: {{$nurse->gender}} </b></p>
    <p><b>Date of birth: {{$nurse->date_of_birth}} </b></p>
    <p><b>Contact No: {{$nurse->mobile}}</b></p>
    <p><b>Email: {{$nurse->email}}</b></p>
    <p><b>Address: {{$nurse->address}}</b></p>
    <p><b>Status: {{$nurse->status}}</b></p>
    </div>

    @endsection