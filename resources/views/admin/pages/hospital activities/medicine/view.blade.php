@extends('admin.master')
@section('content')
    <div class="container">
        <h1>{{__('Medicine Details')}}</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p><b>Medicine Name:</b> {{$medicine->name}}</p>
                <p><b>Price:</b> {{$medicine->price}}</p>
                <p><b>Manufactured By:</b> {{$medicine->manufactured_by}}</p>
                <p><b>Description:</b> {{$medicine->description}}</p>
            </div>
        </div>
    </div>
@endsection