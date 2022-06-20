@extends('admin.master')
@section('content')
<div class="container">
    <h1>{{__('Death Report Details')}}</h1>
    <hr>
    <p><b>Patient ID: {{$deathReport->patient_id}}</b></p>
    <p><b>Date: {{$deathReport->date}}</b></p>
    <p><b>Title: {{$deathReport->title}}</b></p>
    <p><b>Description: {{$deathReport->description}}</b></p>
    <p><b>Doctors Name: {{$deathReport->doctors->first_name}} {{$deathReport->doctors->last_name}}</b></p>
</div>
@endsection