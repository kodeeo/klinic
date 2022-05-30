@extends('admin.master')
@section('content')

<div class="col-3" style="display: flex;">
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('patient.list')}}"><i class="fa-solid fa-truck-medical"></i> Patient Admission</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('patient.add')}}"><i class="fa-solid fa-person-circle-plus"></i> Add Patient</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('doctor.create')}}"><i class="fa fa-user-doctor"></i> Add Doctor</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('show.department')}}"><i class=""></i> Add Department</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('nurse.add')}}"><i class="fa fa-user-nurse"></i> Add Nurse</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('wardboy.add')}}"><i class=""></i> Add Wardboy</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('cabin.create')}}"><i class=""></i> Add Cabin</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="#"><i class=""></i> Add Ward</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="#"><i class="fa-solid fa-bed"></i> Add Bed</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('test.add')}}"><i class=""></i> Add Test Category</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('test.category.add')}}"><i class="fa-solid fa-syringe"></i> Add Test</a></div>
    <div class="card-body" style="padding:3px;"><a class="btn btn-primary" href="{{route('cart.index')}}"><i class="fa-solid fa-syringe"></i> Assign Test</a></div>
</div>

@endsection