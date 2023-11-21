@extends('admin.master')
@section('content')
    
<h3> Ward Details </h3>

<p><b>Ward ID: {{$ward->id}}</b></p>
<p><b>Ward Name: {{$ward->name}}</b></p>
<p><b>Status: {{$ward->status}}</b></p>


@endsection 