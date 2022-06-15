@extends('admin.master')
@section('content')


<h1>{{__('Add New Patient')}}</h1>


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
            <label for="name">Case Number</label>
            <input type="text" class="form-control" id="case_no" name="case_id" placeholder="Enter Patient Case Number">
          </div>
        <div class="form-group col-6">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Your First_Name">
          </div>
          <div class="form-group col-6">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Your Last_Name">
          </div>

          <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Patient Type</label>
            <select name="p_type" class="form-control" id="exampleFormControlSelect1">
              <option>OPD</option>
              <option>IPD</option>
            </select>
          </div>
          <div class="form-group col-6 mt-2">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
          </div>
          <div class="form-group col-6 mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="email" name="password" placeholder="Enter Password">
        </div>
          <div class="form-group col-6 mt-2">
            <label for="date_of_birth">Birthdate</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Enter birthdate">
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
            <label for="phoneNumber">Phone Number</label>
            <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter Phonenumber">
        </div>

        <div class="form-group col-6 mt-2">
            <label for="blood">Blood Group</label>
            <input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="Blood Group">
        </div>

        {{-- <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Civil Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1">
              <option>Married</option>
              <option>Unmarried</option>
              <option>Other</option>
            </select>
        </div> --}}

        <div class="mt-2">
            <label for="patient_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="patient_image" name="patient_image">
        </div>
    </div>


    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
