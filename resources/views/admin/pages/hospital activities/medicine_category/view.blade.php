@extends('admin.master')
@section('content')
    <div class="container">
        <h1>{{__('Medicine Category Details')}}</h1>
        <hr>
        <p><b>Name: {{$medicine_category->name}}</b></p>
        <p><b>Description: {{$medicine_category->description}}</b></p>
    </div>
@endsection