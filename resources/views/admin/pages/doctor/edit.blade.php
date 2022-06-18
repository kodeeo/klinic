@extends('admin.master')
@section('content')
    

<h1>Doctor Update</h1>


{{-- validation --}}


<form action="{{route('doctor.update',$doctor->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group col-6">
            <label for="first_name" cl>First Name </label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="{{$doctor->first_name}}" required><br>
          </div>
          <div class="form-group col-6">
              <label for="last_name">Last Name  </label>
              <input type="last_name" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="{{$doctor->last_name}}" required>
          </div>
          <div class="form-group col-6">
            <label for="username">User Name  </label>
            <input type="username" class="form-control" id="last_name" name="last_name" placeholder="Enter User Name" value="{{$doctor->username}}" required>
        </div>
          <div class="form-group col-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="{{$doctor->email}}" placeholder="Enter Email" required>
          </div>
          <div class="form-group col-6 mt-2">
            <label for="phone">Phone No</label>
            <input type="text" class="form-control" id="password" name="phone" value="{{$doctor->phone}}" placeholder="Enter Phone" required>
        </div>
        <div class="form-group col-6">
            <label for="mobile">Mobile No <span class="required">*</span> </label>
            <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile No" required>
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
            <label for="blood">Blood Group</label>
            <select id="days" name="days[]" class="form-control"> 
                <option  @if($blood==$doctor->blood_group) selected @endif
                     value="{{$doctor->blood_group}}">{{$doctor->blood_group}}</option>
                   @foreach ($blood as $item ) 
                     <option value="{{$item}}">{{$item}}</option> @endforeach </select>
        </div>
        <div class="form-group col-6 mt-2">
            <label for="specialist">Specialist </label>
            <input type="text" class="form-control" id="specialist" name="specialist" placeholder="Specialist For" value="{{$doctor->specialist}}" required>
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
                  value="{{$item->id}}">{{$item->name}}</option>            
                      @endforeach
              </select>
        </div>
       
        <div class="form-group row">
            <label for="degree" class="col-xs-3 col-form-label">Education/Degree <span class="required">*</span></label>
            <div class="col-xs-9">
                <textarea name="degree" value="{{$doctor->degree}}" class="form-control" placeholder="Enter Education/Degree" maxlength="140" rows="7"></textarea>
            </div>
        </div> 
        <div class="form-group row">
            <label for="bio" class="col-xs-3 col-form-label">Short Biography</label>
            <div class="col-xs-9">
                <textarea name="bio" value="{{$doctor->bio}}" class="form-control" placeholder="Enter Short Biography" maxlength="140" rows="7"></textarea>
            </div>
        </div>
       
        <div class="mt-2">
            <label for="doctor_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="doctor_image" name="doctor_image">
        </div>
    </div>
    <div class="form-group col-12 mt-2">
        <label for="status">Status:</label><br>
       
        <input type="radio"  name="status" value="active" {{$doctor->status=='active' ? 'checked':''}} >
        
          <label for="status">Active</label><br>
          <input type="radio"  name="status" value="inactive" {{$doctor->status=='inactive' ? 'checked':''}}>
        
          <label for="status">Inactive</label><br>
        </div> 
    
    
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @endsection