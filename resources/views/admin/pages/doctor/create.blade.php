@extends('admin.master')
@section('content')
    

<h1>{{__('Doctor Registration')}}</h1>


{{-- validation --}}


<form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
          </div>
          <div class="form-group col-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
          </div>
          <div class="form-group col-6 mt-2">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="password" name="phone" placeholder="Enter Phone" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="age">Date of Birth</label>
            <input type="date" class="form-control" id="age" name="date_of_birth" placeholder="Enter Age" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="gender">Gender</label>
            <select class="form-select" name="gender" aria-label="Default select example">
                <option selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            
              </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="department">Department</label>
            <select class="form-select" name="department_id" aria-label="Default select example">
                <option>Select Department</option>

                @foreach ($department as $item)
          
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="designation">Degree</label>
            <input type="text" class="form-control" id="designation" name="degree" placeholder="Enter Designation" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="details">Details</label>
            <input type="text" class="form-control" id="details" name="details" placeholder="Enter Details">
        </div>
      
        <div class="form-group col-6 mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
        </div>
        <div class="mt-2">
            <label for="image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="image" name="doctor_image">
        </div>
    </div>
    
    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection