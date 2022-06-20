@extends('admin.master')
@section('content')
    <div class="container">
        <h1>{{__('Investigations Report Details')}}</h1>
        <hr>
        <td><img src="{{url('/uploads/investigations/'.$investigations->investigation_img)}}" style="border-radius:4px" width="500px" alt="Investigation image"></td>
        <p><b>Patient ID: {{$investigations->patient_id}}</b></p>
        <p><b>Date: {{$investigations->date}}</b></p>
        <p><b>Title: {{$investigations->title}}</b></p>
        <p><b>Description: {{$investigations->description}}</b></p>
        <p><b>Doctors Name: {{$investigations->doctors->first_name}} {{$investigations->doctors->last_name}}</b></p>
    </div>
@endsection