@extends('admin.master')
@section('content')
    

<h1>{{__('Designation Update')}}</h1>


<form action="{{route('designation.update',$designations->id)}}" method="POST" enctype="multipart/form-data">
    
        @method('PUT')
        @csrf
    <div class="row">
        
        <div class="form-group col-6 ">
            <label for="designation">Name</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{$designations->designation}}" placeholder="Enter Designation Name">
          </div>
          <div class="form-group col-6">
              <label for="email">Details</label>
              <input type="text" class="form-control" id="details" name="details" value="{{$designations->details}}"placeholder="Enter Designation Details">
          </div> 
         

        </div>    
    <br>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
  @endsection