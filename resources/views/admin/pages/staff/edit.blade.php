@extends('admin.master')
@section('content')
    

<h1>Staff Update</h1>
<hr>


<form action="{{route('staff.update',$staffs->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" id="designation_id" name="designation_id" value="{{$staffs->designation_id}}" placeholder="Enter Designation" required>
          </div>
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$staffs->name}}" placeholder="Enter Name" required>
          </div>
          <div class="form-group col-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$staffs->email}}" placeholder="Enter Email" required>
          </div>
        
          <div class="form-group col-6 mt-2">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="password" name="phone" placeholder="Enter Phone" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$staffs->address}}" placeholder="Enter Address" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="age">Date of Birth</label>
            <input type="date" class="form-control" id="age" name="date_of_birth" value="{{$staffs->date_of_birth}}" placeholder="Enter Age" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="gender">Gender</label>
            <select class="form-select" name="gender" value="{{$staffs->gender}}" aria-label="Default select example">
                <option selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            
              </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="degree">Degree</label>
            <input type="text" class="form-control" id="degree" name="degree" value="{{$staffs->degree}}" placeholder="Enter Details">
        </div>
       
        <div class="form-group col-6 mt-2">
            <label for="details">Details</label>
            <input type="text" class="form-control" id="details" name="details" value="{{$staffs->details}}" placeholder="Enter Details">
        </div>
      

        <div class="mt-2">
            <label for="staff_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="staff_image" name="staff_image">
        </div>
    </div>
    
    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection