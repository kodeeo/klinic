@extends('admin.master')
@section('content')
    

<h1>{{__('Edit Nurse')}}</h1>


<!--server side validation start-->
@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif
<!--server side validation end-->

<form action="{{route('nurse.update',$nurse->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf

  

        <div class="form-group col-6">
            <label for="name">Nurse Name</label>
            <input type="text" class="form-control" value="{{$nurse->name}}"  name="name" placeholder="Enter Nurse Name" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Contact No.</label>
            <input type="number" class="form-control" value="{{$nurse->contact_no}}"  name="contact" placeholder="Enter a valid number" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Email</label>
            <input type="text" class="form-control" value="{{$nurse->email}}" name="email" placeholder="Enter Nurse Email">
          </div>

          <div class="form-group col-6">
            <label for="name">Address</label>
            <input type="text" class="form-control"  value="{{$nurse->address}}" name="address" placeholder="Enter Nurse Address" >
          </div>


          <div class="form-group col-6">
            <label for="name">Duty Hours</label>
            <input type="number" class="form-control" value="{{$nurse->duty_hrs}}" name="hrs" placeholder="Enter Duty Hours" >
          </div>


          <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @endsection