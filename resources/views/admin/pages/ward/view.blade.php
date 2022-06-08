@extends('admin.master')
@section('content')
    
<h3> Cabin </h3>

<p><b>Cabin Number: {{$cabin->cabin_number}}</b></p>
<p><b>Admission ID: {{$cabin->admission_id}}</b></p>
<p><b>Staff ID: {{$cabin->staff_id}}</b></p>
<p><b>Nurse ID: {{$cabin->nurse_id}}</b></p>
<button class="btn btn-success"><p><b>Status: {{$cabin->status}}</b></p></button>

@endsection 