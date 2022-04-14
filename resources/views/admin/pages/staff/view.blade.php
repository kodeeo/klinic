@extends('admin.master')
@section('content')
<div class="container">
    <h1>Doctor Profile Details</h1>
    <hr>
    <p><b>Designation: {{$staffs->designation->designation}}</b></p>
    <p><b>Name: {{$staffs->name}}</b></p>
    <p><b>Email: {{$staffs->email}}</b></p>
    <p><b>Phone: {{$staffs->phone}}</b></p>
    <p><b>Address: {{$staffs->address}}</b></p>
    <p><b>Date of Birth: {{$staffs->date_of_birth}}</b></p>
    <p><b>Gender: {{$staffs->gender}}</b></p>
    <p><b>Details: {{$staffs->details}}</b></p>
    <p>
        <td><img src="{{url('/uploads/staffs/'.$staffs->image)}}" style="border-radius:4px" width="200px" alt="doctor image"></td>
    </p> 
    </div>
@endsection