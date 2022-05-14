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
    <input type="hidden" name="patient_id" value="{{$new_patient->id}}">
    <div class="row">

        <div class="form-group col-6">
            <label for="name">Case Number</label>
            <input type="text" class="form-control" id="case_no" name="case_no" placeholder="Enter Patient Case Number">
          </div>
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
            <label for="father">Father Name</label>
            <input type="text" class="form-control" id="father" name="father" placeholder="Enter Father Name">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="mother"> Mother Name</label>
            <input type="text" class="form-control" id="mother" name="mother" placeholder="Enter Mother Name">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="nid">NID</label>
            <input type="text" class="form-control" id="nid" name="nid" placeholder="Enter NID Number">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="passport">Passport(if any))</label>
            <input type="text" class="form-control" id="passport" name="passport" placeholder="Enter Passport Number">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="language">Language</label>
            <input type="text" class="form-control" id="language" name="language" placeholder="Enter Language">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="spouse">Spouse Name</label>
            <input type="text" class="form-control" id="spouse" name="spouse" placeholder="Enter Spouse Name">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="b_place">Birth Place</label>
            <input type="text" class="form-control" id="b_place" name="b_place" placeholder="Enter Birth Place Name">
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
        <br>

        
        <h3>For Emergency  Contact</h3>
        <div class="form-group col-6 mt-2">
            <label for="e_name">Name</label>
            <input type="text" class="form-control" id="e_name" name="e_name" placeholder="Enter Nmae">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="relation">Relation</label>
            <input type="text" class="form-control" id="relation" name="relation" placeholder="Enter Realtionship Type">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="contact_number">Emergency Contact</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Emergency Contact">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="contact_number">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
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