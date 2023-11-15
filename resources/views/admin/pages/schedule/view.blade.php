@extends('admin.master')
@section('content')
    <h3> Schedule Details </h3>
    {{-- @dd($schedule) --}}
    <p><b>Doctor's Name : {{ $schedule->doctor->fullname }}</b></p>
    <p><b>Available Days: @foreach ($schedule->days as $data)
                {{-- @dd($data) --}}
                <p>{{ $data }}</p>
            @endforeach </b></p>
    <p><b>From Time:@foreach ($schedule->fromtime as $data)
                {{-- @dd($data) --}}
                <p>{{ $data }}</p>
            @endforeach </b></p>
    <p><b>To Time:@foreach ($schedule->totime as $data)
                {{-- @dd($data) --}}
                <p>{{ $data }}</p>
            @endforeach </b></p>
    <p><b>Per Patient Time: {{ $schedule->patient_time }}</b></p>
    <p><b>Serial Visibility: {{ $schedule->serial }}</b></p>
    <button class="btn btn-success">
        <p><b>Status: {{ $schedule->status }}</b></p>
    </button>
@endsection
