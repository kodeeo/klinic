@extends('admin.master')
@section('content')
    

<h1>{{__('Edit Package')}}</h1>

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
<form action="{{ route('package.status.update',$package->id) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Package</label>
            <input type="text" value="{{ $package->name }}" class="form-control" id="name" name="name" placeholder="Enter Package Name">
          </div>

        
        <div class="form-group col-6">
            <label for="email">Description</label>
            <input type="text" value="{{ $package->description }}" class="form-control" id="details" name="description" placeholder="Enter Service Details">
        </div>
       

        <div class="form-group col-6">
            <label for="discount">Discount</label>
            <input type="integer" value="{{ $package->discount }}" class="form-control" id="rate" name="discount" placeholder="Enter Discount">
        </div>

        <div class="form-group col-12 mt-2">
        <label for="status">Status:</label><br>
       
        <input type="radio"  name="status" value="{{ $package->status }}" {{$package->status=='active' ? 'checked':''}} >
          <label for="status">Active</label><br>
        
        
          <input type="radio"  name="status" value="{{ $package->status }}" {{$package->status=='inactive' ? 'checked':''}}>
          <label for="status">Inactive</label><br>
        </div> 
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection