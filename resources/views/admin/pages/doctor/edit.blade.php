@extends('admin.master')
@section('content')
    

<h1>Doctor Update</h1>


{{-- validation --}}


<form action="{{route('doctor.update',$doctor->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$doctor->name}}" placeholder="Enter Name" required>
          </div>
          <div class="form-group col-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{$doctor->email}}" placeholder="Enter Email" required>
          </div>
          <div class="form-group col-6 mt-2">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="password" name="phone" value="{{$doctor->phone}}" placeholder="Enter Phone" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$doctor->address}}" placeholder="Enter Address" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{$doctor->age}}" placeholder="Enter Age" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="gender">Gender</label>
            <select class="form-select" name="gender" value="{{$doctor->gender}}" aria-label="Default select example">
                <option selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            
              </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="department">Department</label>
            <select class="form-select" name="department_id" value="{{$doctor->department_id}}" aria-label="Default select example">
                <option selected>Department</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{$doctor->designation}}" placeholder="Enter Designation" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="details">Details</label>
            <input type="text" class="form-control" id="details" name="details" value="{{$doctor->details}}" placeholder="Enter Details">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="available">Availability</label>
            <select class="form-select" name="available" value="{{$doctor->available}}" aria-label="Default select example">
                <option selected>Availability</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="room_no">Room No</label>
            <input type="number" class="form-control" id="room_no" name="room_no" value="{{$doctor->room_no}}" placeholder="Enter Room No" required> 
        </div>
        <div class="form-group col-6 mt-2">
            <label for="fee">Fees</label>
            <input type="number" class="form-control" id="fee" name="fee" value="{{$doctor->fee}}" placeholder="Enter Fees" required>
        </div>
       
        <div class="mt-2">
            <label for="image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
    </div>
    
    
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @endsection