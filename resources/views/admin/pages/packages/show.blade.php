@extends('admin.master')
@section('content')


        <h2>{{__('Package Details')}}</h2>
        <p>Name: {{ $service->name }}</p>
        <p>Description: {{ $service->description }}</p>
        <p>Service rate: {{ $service->service_rate }}</p>
        <p>Status: {{ $service->status }}</p>
        <p>Quantity: {{ $service->service_quantity }}</p>
        <p>Discount: {{ $service->discount }}</p>







        @endsection
