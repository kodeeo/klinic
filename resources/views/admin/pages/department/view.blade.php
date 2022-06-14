@extends('admin.master')
@section('content')
    
<h3> Department Details </h3>

<p><b>Name: {{$department->name}}</b></p>
<p><b>Details: {{$department->description}}</b></p>
<p><b>Status: {{$department->status}}</b></p>


@endsection 