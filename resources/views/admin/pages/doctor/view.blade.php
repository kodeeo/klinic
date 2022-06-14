@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Doctor Profile Details')}}</h1>
    <hr>
    <p><b>First Name: {{$doctor->first_name}}</b></p>
    <p><b>Last Name: {{$doctor->last_name}}</b></p>
    <p><b>User Name: {{$doctor->username}}</b></p>
    <p><b>Email: {{$doctor->email}}</b></p>
    <p><b>Phone No: {{$doctor->phone}}</b></p>
    <p><b>Mobile No: {{$doctor->mobile}}</b></p>
    <p><b>Address: {{$doctor->address}}</b></p>
    <p><b>Date of Birth: {{$doctor->date_of_birth}}</b></p>
    <p><b>Gender: {{$doctor->gender}}</b></p>
    <p><b>Blood Group: {{$doctor->blood_group}}</b></p>
    <p><b>Department: {{$doctor->department->name}}</b></p>
    <p><b>Education/Degree: {{$doctor->degree}}</b></p>
    <p><b>Specialist: {{$doctor->specialist}}</b></p>
    <p><b>Short Biography: {{$doctor->bio}}</b></p>
    <p><b>Status: {{$doctor->status}}</b></p>
    <p>
        <td><img src="{{url('/uploads/doctors/'.$doctor->image)}}" style="border-radius:4px" width="200px" alt="doctor image"></td>
    </p> 
    </div>
@endsection