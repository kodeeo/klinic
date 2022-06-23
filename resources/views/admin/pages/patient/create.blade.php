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
<form action="{{route('patients.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="form-group col-6">
            <label for="first_name">First Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
        </div>
        <div class="form-group col-6">
            <label for="last_name">Last Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="email">Email <span style="color:red">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="password">Password <span style="color:red">*</span></label>
            <input type="password" class="form-control" id="email" name="password" placeholder="Enter Password">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="date_of_birth">Birth Date</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Enter birthdate">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Gender</label>
            <select name="gender" class="form-control" id="exampleFormControlSelect1">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="mobile">Mobile No</label>
            <input type="text" class="form-control" id="phoneNumber" name="mobile" placeholder="Enter Phonenumber" required>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="blood">Blood Group</label>
            <input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="Blood Group">
        </div>

        <div class="form-group col-6 mt-2">
            <label for="patient_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="patient_image" name="patient_image">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
