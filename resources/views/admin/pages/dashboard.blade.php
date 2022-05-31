@extends('admin.master')
@section('content')

<div class="container" style="display: flex; margin-left: -30px;">
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('patient.list')}}"><i style="font-size: 30px;" class="fa fa-wheelchair"></i> Patient Admission</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('patient.add')}}"><i style="font-size: 30px;" class="fa fa-truck-medical"></i> Add Patient</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('doctor.create')}}"><i style="font-size: 30px;" class="fa fa-user-doctor"></i> Add Doctor</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('show.department')}}"><i style="font-size: 35px;" class="fa fa-apartment"></i> Add Department</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('nurse.add')}}"><i style="font-size: 30px;" class="fa fa-user-nurse"></i> Add Nurse</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('wardboy.add')}}"><i style="font-size: 30px;" class="fa fa-person-digging"></i> Add Wardboy</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('cabin.index')}}"><i style="font-size: 30px;" class=""></i> Add Cabin</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="#"><i style="font-size: 30px;" class="fa fa-bed-bunk"></i> Add Ward</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="#"><i style="font-size: 30px;" class="fa-solid fa-bed"></i> Add Bed</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('test.add')}}"><i style="font-size: 30px;" class=""></i> Add Test Category</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('test.category.add')}}"><i style="font-size: 30px;" class="fa-solid fa-syringe"></i> Add Test</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-success" href="{{route('cart.index')}}"><i style="font-size: 30px;" class="fa-solid fa-syringe"></i> Assign Test</a></div>
</div>

@endsection