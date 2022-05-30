@extends('admin.master')
@section('content')
<div class="container">
    <h1>Nurse Profile Details</h1>
    <hr>
    <p><b>Name: {{$nurse->name}}</b></p>
    <p><b>Contact No: {{$nurse->contact_no}}</b></p>
    <p><b>Email: {{$nurse->email}}</b></p>
    <p><b>Address: {{$nurse->address}}</b></p>
    <p><b>Duty Hours: {{$nurse->duty_hrs}}</b></p>

    <p>
        <td><img src="{{url('/uploads/nurse/'.$nurse->image)}}" style="border-radius:4px" width="200px" alt="nurse image"></td>
    </p> 
    </div>
@endsection