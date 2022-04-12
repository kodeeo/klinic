@extends('admin.master')
@section('content')
    

<h1>Add Service</h1>

{{-- validation --}}
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('admin.service.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Srvice Name" required>
          </div>
    </div>
    <div>
        <div class="form-group col-6">
            <label for="email">Description</label>
            <input type="text" class="form-control" id="details" name="description" placeholder="Enter Service Details">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection