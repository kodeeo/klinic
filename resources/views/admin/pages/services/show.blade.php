@extends('admin.master')
@section('content')
        <h2>Service Details</h2>
        <p>Name : {{ $service->name }}</p>
        <p>Description : {{ $service->description }}</p>
        <p>Rate : {{ $service->rate }}</p>
@endsection
