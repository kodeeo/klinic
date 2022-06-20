@extends('admin.master')
@section('content')
    

<h1>{{__('Add Service')}}</h1>

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
<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Service Name" required>
          </div>
        <div class="form-group col-6">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Service Description">
        </div>
        <div class="form-group col-6">
            <label for="rate">Rate</label>
            <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter Service Rate">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection