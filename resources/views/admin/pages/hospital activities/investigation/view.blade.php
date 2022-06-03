@extends('admin.master')
@section('content')
    <div class="container">
        <h1>Investigations Report Details</h1>
        <hr>
        <img src="" alt="">
        <p><b>Patient ID: {{$investigations->patient_id}}</b></p>
        <p><b>Date: {{$investigations->date}}</b></p>
        <p><b>Title: {{$investigations->title}}</b></p>
        <p><b>Description: {{$investigations->description}}</b></p>
        <p><b>Doctors Name: {{$investigations->doctor->name}}</b></p>
    </div>
@endsection