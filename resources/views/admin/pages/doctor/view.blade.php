@extends('admin.master')
@section('content')
<div class="container">
    <h1>Doctor Profile Details</h1>
    <hr>
    <p><b>Name: {{$doctor->name}}</b></p>
    <p><b>Email: {{$doctor->email}}</b></p>
    <p><b>Phone: {{$doctor->phone}}</b></p>
    <p><b>Address: {{$doctor->address}}</b></p>
    <p><b>Date of Birth: {{$doctor->date_of_birth}}</b></p>
    <p><b>Gender: {{$doctor->gender}}</b></p>
    <p><b>Department: {{$doctor->department->name}}</b></p>
    <p><b>Designation: {{$doctor->designation}}</b></p>
    <p><b>Degree: {{$doctor->degree}}</b></p>
    <p><b>Details: {{$doctor->details}}</b></p>
    <p>
        <td><img src="{{url('/uploads/doctors/'.$doctor->image)}}" style="border-radius:4px" width="200px" alt="doctor image"></td>
    </p> 
    </div>
@endsection