@extends('admin.master')
@section('content')

<h3> Department Details </h3>

<br>
<br>
<br>


            <img src="{{url('/uploads/departments',$department->image)}}" style="border-radius:4px; display:flex; align-items:center;"
                width="200px" height="200px" alt="department image">
        
    
<br>
<br>

<p><b>Name: {{$department->name}}</b></p>
<p><b>Details: {{$department->description}}</b></p>
<p><b>Status: {{$department->status}}</b></p>


@endsection 