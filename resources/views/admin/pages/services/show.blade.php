@extends('admin.master')
@section('content')
        <h2>{{__('Service Details')}}</h2>
        <p>{{ $service->name }}</p>
        <p>{{ $service->description }}</p>
        <p>{{ $service->rate }}</p>
@endsection
