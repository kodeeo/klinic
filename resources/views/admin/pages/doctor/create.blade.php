@extends('admin.master')
@section('content')
<style>
    .required {
        color: red;
    }

</style>

<h1>{{__('Doctor Registration')}}</h1>


{{-- validation --}}


<form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="first_name" cl>First Name <span class="required">*</span></label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name"
                required><br>
        </div>
        <div class="form-group col-6">
            <label for="last_name">Last Name <span class="required">*</span> </label>
            <input type="last_name" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name"
                required>
        </div>
        <div class="form-group col-6">
            <label for="username">User Name <span class="required">*</span> </label>
            <input type="username" class="form-control" id="username" name="username" placeholder="Enter User Name"
                required>
        </div>
        <div class="form-group col-6">
            <label for="email">Email Address <span class="required">*</span> </label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address"
                required><br>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="phone">Phone No</label>
            <input type="text" class="form-control" id="password" name="phone" placeholder="Enter Phone No">
        </div>
        <div class="form-group col-6">
            <label for="mobile">Mobile No <span class="required">*</span> </label>
            <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile No" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="address">Address <span class="required">*</span></label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="age">Date of Birth <span class="required">*</span></label>
            <input type="date" class="form-control" id="age" name="date_of_birth" placeholder="Enter Age" required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="gender">Gender <span class="required">*</span></label>
            <select class="form-select" name="gender" aria-label="Default select example" required> 
                <option selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>

            </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="blood">Blood Group <span class="required">*</span></label>
            <select id="blood" name="blood_group" class="form-control">
                @foreach($blood as $blood_group)
                <option value="{{$blood_group}}">
                    {{$blood_group}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="degree" class="col-xs-3 col-form-label">Education/Degree <span class="required">*</span></label>
            <div class="col-xs-9">
                <textarea name="degree" class="form-control" placeholder="Enter Education/Degree" maxlength="140"
                    rows="7"></textarea>
            </div>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="specialist">Specialist <span class="required">*</span></label>
            <input type="text" class="form-control" id="specialist" name="specialist" placeholder="Specialist For"
                required>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="department">Department <span class="required">*</span></label>
            <select class="form-select" name="department_id" aria-label="Default select example" required>
                <option>Select Department</option>

                @foreach ($department as $item)

                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group row">
            <label for="bio" class="col-xs-3 col-form-label">Short Biography</label>
            <div class="col-xs-9">
                <textarea name="bio" class="form-control" placeholder="Enter Short Biography" maxlength="140"
                    rows="7"></textarea>
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="password">Password <span class="required">*</span></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password"
                required>
        </div>
        <div class="mt-2">
            <label for="doctor_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="doctor_image" name="doctor_image">
        </div>
    </div>
    <div class="form-group col-12 mt-2">
        <label for="status">Status:</label><br>

        <input type="radio" id="active" name="status" value="active">
          <label for="status">Active</label><br>
          <input type="radio" id="inactive" name="status" value="inactive">
          <label for="status">Inactive</label><br>
    </div>


    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
