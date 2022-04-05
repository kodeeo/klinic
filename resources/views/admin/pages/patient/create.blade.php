@extends('admin.master')
@section('content')
    

<h1>Add New Patient</h1>


{{-- validation --}}
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('patient.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
          </div>

          <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Patient Type</label>
            <select name="ptype" class="form-control" id="exampleFormControlSelect1">
              <option>OPD</option>
              <option>IPD</option>
            </select>
          </div>
          <div class="form-group col-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
          </div>
          <div class="form-group col-6 mt-2">
            <label for="birthdate">Birthdate</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Enter birthdate">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Gender</label>
            <select name="gender" class="form-control" id="exampleFormControlSelect1">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
        <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="phone">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phonenumber">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Occupation">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="blood">Blood Group</label>
            <input type="text" class="form-control" id="blood" name="blood" placeholder="Blood Group">
        </div>

        <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Civil Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
              <option>Married</option>
              <option>Unmarried</option>
              <option>Other</option>
            </select>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="religion">Religion</label>
            <input type="text" class="form-control" id="religion" name="religion" placeholder="Enter Religion">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="height">Patient Height</label>
            <input type="text" class="form-control" id="height" name="height" placeholder="Enter Patient Height">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="weight">Patient Weight</label>
            <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Patient Weight">
        </div>
        <div class="mt-2">
            <label for="patient_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="patient_image" name="patient_image">
        </div>
    </div>
    
    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection