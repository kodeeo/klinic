@extends('admin.master')
@section('content')
    

<h1>{{__('Ward Update')}}</h1>


<form action="{{route('cabin.update',$cabin->id)}}" method="POST" enctype="multipart/form-data">
    
        @method('PUT')
        @csrf
    <div class="row">
        
        <div class="form-group col-6 ">
            <label for="cabin_number">Cabin Number</label>
            <input type="text" class="form-control" id="cabin_number" name="cabin_number" value="{{ $cabin->name}}" placeholder="Enter Cabin Name">
          </div>
          <div class="form-group col-6">
              <label for="admission_id">Admission ID</label>
              <input type="text" class="form-control" id="admission_id" name="admission_id" value="{{ $cabin->details}}"placeholder="Enter Cabin Details">
          </div> 
          <div class="form-group col-6">
            <label for="staff_id">Staff ID</label>
            <input type="text" class="form-control" id="staff_id" name="staff_id" value="{{ $cabin->details}}"placeholder="Enter Cabin Details">
        </div> 
        <div class="form-group col-6">
            <label for="nurse_id">Nurse ID</label>
            <input type="text" class="form-control" id="nurse_id" name="nurse_id" value="{{ $cabin->details}}"placeholder="Enter Cabin Details">
        </div> 
          

        </div>    
    <br>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
  @endsection