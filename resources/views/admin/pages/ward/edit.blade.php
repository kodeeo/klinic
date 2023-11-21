@extends('admin.master')
@section('content')
    

<h1>{{__('Ward Update')}}</h1>


<form action="{{route('ward.update',$ward->id)}}" method="POST" enctype="multipart/form-data">
    
        @method('PUT')
        @csrf
    <div class="row">
        
        <div class="form-group col-6 ">
            <label for="ward_name">Ward Name</label>
            <input type="text" class="form-control" id="ward_name" name="ward_name" value="{{ $ward->name}}" placeholder="Enter Ward Name">
          </div>
        
          <div class="form-group col-12 mt-2">
                <label for="status">Status:</label><br>
                <input type="radio"  name="status" value="active" {{$ward->status=='active' ? 'checked':''}}>
                <label for="status">Active</label><br>
                <input type="radio"  name="status" value="inactive" {{$ward->status=='inactive' ? 'checked':''}}>
                <label for="status">Inactive</label><br>
            </div> 
       
          

        </div>    
    <br>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
  @endsection