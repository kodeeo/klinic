@extends('admin.master')
@section('content')
    <div class="container">
        <h1>{{__('Medicine Details')}}</h1>
        <hr>
        <p><b>Medicine Name: {{$medicine->name}}</b></p>
        <p><b>Category Name: {{$medicine->category->name}}</b></p>
        <p><b>Description: {{$medicine->description}}</b></p>
        <p><b>Price: {{$medicine->price}}</b></p>
        <p><b>Manufactured By: {{$medicine->manufactured_by}}</b></p>
    </div>
@endsection