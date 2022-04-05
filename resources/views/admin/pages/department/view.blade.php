@extends('admin.master')
@section('content')
    
<h3> Departments </h3>

<p><b>Name: {{$department->name}}</b></p>
<p><b>Details: {{$department->details}}</b></p>

@endsection 