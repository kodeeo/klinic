@extends('admin.master')
@section('content')

    <style>
        .size {
            width: 100%;
            height: 100%;
        }
    </style>
    <div class="container" style="display: grid; margin-left: -15px;">
        <div class="row" style="height: 90px;">
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                                                                    href="{{route('patients.index')}}"><i
                        style="font-size: 30px;" class="fa fa-wheelchair"></i> Patient Admission</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                                                                    href="{{route('patients.create')}}"><i
                        style="font-size: 30px;" class="fa fa-truck-medical"></i> Add Patient</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                                                                    href="{{route('doctor.create')}}"><i
                        style="font-size: 30px;" class="fa fa-user-doctor"></i> Add Doctor</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                                                                    href="{{route('show.department')}}"><i
                        style="font-size: 35px;" class="fa fa-apartment"></i> Add Department</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                                                                    href="{{route('staffs.create')}}"><i
                        style="font-size: 30px;" class="fa fa-user-nurse"></i> Add Staffs</a></div>
        </div>
        <div class="row" style="height: 90px;">
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="{{route('cabin.index')}}"><i
                        style="font-size: 30px;" class=""></i> Add Cabin</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="#"><i style="font-size: 30px;"
                                                                                               class="fa fa-bed-bunk"></i>
                    Add Ward</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="#"><i style="font-size: 30px;"
                                                                                               class="fa-solid fa-bed"></i>
                    Add Bed</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="{{route('test.add')}}"><i
                        style="font-size: 30px;" class=""></i> Add Test Category</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                                                           href="{{route('test.category.add')}}"><i
                        style="font-size: 30px;" class="fa-solid fa-syringe"></i> Add Test</a></div>
            <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="{{route('cart.index')}}"><i
                        style="font-size: 30px;" class="fa-solid fa-syringe"></i> Assign Test</a></div>
        </div>
    </div>

@endsection
