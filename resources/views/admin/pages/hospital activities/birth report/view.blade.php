@extends('admin.master')
@section('content')
    <div class="container">
        <h1>{{__('Birth Report Details')}}</h1>
        <hr>
        <p><b>Patient ID: {{$birthReport->patient_id}}</b></p>
        <p><b>Date: {{$birthReport->date}}</b></p>
        <p><b>Title: {{$birthReport->title}}</b></p>
        <p><b>Description: {{$birthReport->description}}</b></p>
        <p><b>Doctors Name: {{$birthReport->doctors->first_name}} {{$birthReport->doctors->last_name}}</b></p>
    </div>
@endsection