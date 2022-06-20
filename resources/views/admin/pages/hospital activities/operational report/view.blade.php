@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Operation Report Details')}}</h1>
    <hr>
    <p><b>Patient ID: {{$operationReport->patient_id}}</b></p>
    <p><b>Date: {{$operationReport->date}}</b></p>
    <p><b>Title: {{$operationReport->title}}</b></p>
    <p><b>Description: {{$operationReport->description}}</b></p>
    <p><b>Doctors Name: {{$operationReport->doctors->first_name}} {{$operationReport->doctors->last_name}}</b></p>
</div>
@endsection