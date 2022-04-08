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
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$doctor->date_of_birth}}" placeholder="Enter Date of Birth" required>
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
            <select class="form-select" name="department_id" aria-label="Default select example">
                <option>Select Department</option>

                @foreach ($department as $item)
          
          
                <option
                @if($item->id==$doctor->department_id)
                      selected
                      @endif
                  value="{{$item->id}}">{{$item->name}}</option>                @endforeach
              </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{$doctor->designation}}" placeholder="Enter Designation" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="degree">Degree</label>
            <input type="text" class="form-control" id="degree" name="degree" value="{{$doctor->degree}}" placeholder="Enter Degree" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="details">Details</label>
            <input type="text" class="form-control" id="details" name="details" value="{{$doctor->details}}" placeholder="Enter Details">
        </div>
       
        <div class="mt-2">
            <label for="doctor_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="doctor_image" name="doctor_image">
        </div>
    </div>
    
    
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @endsection