@extends('admin.master')
@section('content')
<div class="container">
    <h1>Doctor Profile Details</h1>
    <hr>
    <p><b>Name: {{$doctor->name}}</b></p>
    <p><b>Email: {{$doctor->email}}</b></p>
    <p><b>Phone: {{$doctor->phone}}</b></p>
    <p><b>Address: {{$doctor->address}}</b></p>
    <p><b>Age: {{$doctor->age}}</b></p>
    <p><b>Gender: {{$doctor->gender}}</b></p>
    <p><b>Department: {{$doctor->department_id}}</b></p>
    <p><b>Designation: {{$doctor->designation}}</b></p>
    <p><b>Details: {{$doctor->details}}</b></p>
    <p><b>Availability: {{$doctor->available}}</b></p>
    <p><b>Room No: {{$doctor->room_no}}</b></p>
    <p><b>Fees: {{$doctor->fee}}</b></p>
        {{-- <p>
        <td><img src="{{url('/uploads/volunteers/'.$volunteer->image)}}" style="border-radius:4px" width="200px" alt="cause image"></td>
        </p> --}}
    </div>
@endsection