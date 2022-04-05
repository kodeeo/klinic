@extends('admin.master')
@section('content')
    

<h1>Department Details</h1>


<form action="{{route('update.department',$department->id)}}" method="POST">
    
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

        </div>    
    <br>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
  @endsection