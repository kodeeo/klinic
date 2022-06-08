@extends('admin.master')
@section('content')
    

<h1>{{__('Edit WardBoy')}}</h1>


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

<form action="{{route('wardboy.update',$wardboy->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

  

        <div class="form-group col-6">
            <label for="name">WardBoy Name</label>
            <input type="text" class="form-control" name="name" value="{{$wardboy->name}}" placeholder="Enter WardBoy Name" required>
          </div>

          <div class="form-group col-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{$wardboy->email}}" placeholder="Enter Email Address" required>
          </div>

          <div class="form-group col-6">
            <label for="contact">Contact No.</label>
            <input type="number" class="form-control" name="contact" value="{{$wardboy->contact}}" placeholder="Enter Contact Number">
          </div>

          <div class="form-group col-6">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" value="{{$wardboy->address}}" placeholder="Enter WardbBoy Address" >
          </div>


          <div class="form-group col-6">
            <label for="joinDate">Join Date</label>
            <input type="text" class="form-control" name="joinDate" value="{{$wardboy->joinDate}}" placeholder="Enter Joining Date" >
          </div>

          <div class="form-group col-6">
            <label for="hrs">Duty Hours</label>
            <input type="string" class="form-control" name="hrs" value="{{$wardboy->hrs}}" placeholder="Enter Duty Hours" >
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input name="image" value="{{$wardboy->image}}" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection