@extends('admin.master')
@section('content')
    

<h1>{{__('Department Update')}}</h1>


<form action="{{route('update.department',$department->id)}}" method="POST" enctype="multipart/form-data">
    
        @method('PUT')
        @csrf
    <div class="row">
        
        <div class="form-group col-6 ">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $department->name}}" placeholder="Enter Department Name">
          </div>
          <div class="form-group col-6">
              <label for="email">Description</label>
              <input type="text" class="form-control" id="description" name="description" value="{{ $department->description}}"placeholder="Enter Department Description">
          </div> 
          <div class="form-group col-12 mt-2">
            <label for="status">Status:</label><br>
           
            <input type="radio"  name="status" value="active" {{$department->status=='active' ? 'checked':''}} >
            
              <label for="status">Active</label><br>
              <input type="radio"  name="status" value="inactive" {{$department->status=='inactive' ? 'checked':''}}>
            
              <label for="status">Inactive</label><br>
            </div> 

        </div>    
    <br>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
  @endsection