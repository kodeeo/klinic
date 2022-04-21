@extends('admin.master')
@section('content')
    
<h3> Designation </h3>

<p><b>Name: {{$designations->designation}}</b></p>
<p><b>Details: {{$designations->details}}</b></p>

@endsection 