@extends('admin.master')
@section('content')

    <h2>
        {{ __('Package Details') }}</h2>
    <p>Name: @foreach ($service->service_name as $name)
            <p>{{ $name }}</p>
        @endforeach
    </p>
    <p>Description: {{ $service->description }}</p>
    <p>Service rate: @foreach ($service->service_rate as $rate)
            <p>{{ $rate }}</p>
        @endforeach
    </p>
    <p>Quantity: @foreach ($service->service_quantity as $quantity)
            <p>{{ $quantity }}</p>
        @endforeach
    </p>
    <p>Discount: {{ $service->discount }}</p>
    <p>Status: {{ $service->status }}</p>
@endsection

