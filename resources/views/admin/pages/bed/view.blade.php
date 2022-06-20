@extends('admin.master')
@section('content')

<h1> Bed Details </h1>
<hr>

<p><b>Bed Type: {{ $bed->type }}</b></p>
<p><b>Description: {{ $bed->description }}</b></p>
<p><b>Capacity: {{ $bed->capacity }}</b></p>
<p><b>Charge: {{ $bed->charge }}</b></p>
<button class="btn btn-success">
    <p><b>Status: {{ $bed->status }}</b></p>
</button>

@endsection
