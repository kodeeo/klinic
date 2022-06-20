@extends('admin.master')
@section('content')
    

<h1>{{__('Edit Service')}}</h1>

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
<form action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" value="{{ $service->name }}" class="form-control" id="name" name="name" placeholder="Enter Srvice Name">
          </div>
        <div class="form-group col-6">
            <label for="email">Description</label>
            <input type="text" value="{{ $service->description }}" class="form-control" id="details" name="description" placeholder="Enter Service Details">
        </div>
        <div class="form-group col-6">
            <label for="rate">Rate</label>
            <input type="text" value="{{ $service->rate }}" class="form-control" id="rate" name="rate" placeholder="Enter Service Rate">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection