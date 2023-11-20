@extends('admin.master')
@section('content')
    <div class="container">
        <h1>{{__('Investigations Report Details')}}</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
            <td><img src="{{url('/uploads/investigations/'.$investigations->investigation_img)}}" style="border-radius:4px; margin-bottom:15px;" width="180px" height="180px" alt="Investigation image"></td>
            <p><b>Date:</b> {{$investigations->date}}</p>
            <p><b>Patient ID:</b> {{$investigations->patient_id}}</p>
            <p><b>Doctors Name:</b> {{$investigations->doctors->first_name}} {{$investigations->doctors->last_name}}</p>
            <p><b>Title:</b> {{$investigations->title}}</p>
            <p><b>Description:</b> {{$investigations->description}}</p>
            </div>
        </div>
    </div>
@endsection