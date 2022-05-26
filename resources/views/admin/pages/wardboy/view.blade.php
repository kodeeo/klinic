@extends('admin.master')
@section('content')
<div class="container">
    <h1>Wardboy Profile Details</h1>
    <hr>
    <p><b>Name: {{$wardboys->name}}</b></p>
    <p><b>Email: {{$wardboys->email}}</b></p>
    <p><b>Contact: {{$wardboys->contact}}</b></p>
    <p><b>Address: {{$wardboys->address}}</b></p>
    <p><b>Assign for Ward: {{$wardboys->wardNo}}</b></p>
    <p><b>Joining Date: {{$wardboys->joinDate}}</b></p>
    <p><b>Duty Hours: {{$wardboys->hrs}}</b></p>
    
    <p>
        <td><img src="{{url('/uploads/wardboys/'.$wardboys->image)}}" style="border-radius:4px" width="200px" alt="wardboy image"></td>
    </p> 
    </div>
@endsection