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
              <label for="email">Details</label>
              <input type="text" class="form-control" id="details" name="details" value="{{ $department->details}}"placeholder="Enter Department Details">
          </div> 
          <div class="mt-2">
            <label for="department_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="department_image" name="department_image">
        </div>

        </div>    
    <br>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
  @endsection