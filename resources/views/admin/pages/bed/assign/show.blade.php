@extends('admin.master')
@section('content')

<h1>Assign Bed Details </h1>
<hr>

<p><b>Patient ID: {{ $assignbed->patient_id }}</b></p>
<p><b>Ward: {{ $assignbed->ward->name }}</b></p>
<p><b>Bed Type: {{ $assignbed->bed->type}}</b></p>
<p><b>Assign Date: {{ $assignbed->assign_date }}</b></p>
<p><b>Description: {{ $assignbed->description }}</b></p>



@endsection