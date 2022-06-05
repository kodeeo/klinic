@extends('admin.master')
@section('content')
    
<h3> Schedule Details </h3>

<p><b>Doctor's Name : {{$schedule->doctor->name}}</b></p>
<p><b>Available Days: {{$schedule->days}}</b></p>
<p><b>From Time: {{$schedule->fromtime}}</b></p>
<p><b>To Time: {{$schedule->totime}}</b></p>
<p><b>Per Patient Time: {{$schedule->patient_time}}</b></p>
<p><b>Serial Visibility: {{$schedule->serial}}</b></p>
<button class="btn btn-success"><p><b>Status: {{$schedule->status}}</b></p></button>

@endsection 