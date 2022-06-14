@extends('admin.master')
@section('content')
    
<h1>{{__('Edit Nurse')}}</h1>

<img src={{url('/uploads/staffs',$nurse->image)}} width="300px" alt="Nurse Image">

<form action="{{route('nurses.update',$nurse->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row">

      <div class="form-group col-6 mt-2">
          <label for="first_name">First Name <span style="color: red">*</span></label>
          <input type="text" class="form-control" value="{{$nurse->first_name}}" id="first_name" name="first_name" placeholder="Enter First Name">
      </div>

      <div class="form-group col-6 mt-2">
          <label for="last_name">Last Name <span style="color: red">*</span></label>
          <input type="text" class="form-control" value="{{$nurse->last_name}}" id="last_name" name="last_name" placeholder="Enter Last Name">
      </div>

      <div class="form-group col-6 mt-2">
          <label for="email">Email <span style="color: red">*</span></label>
          <input type="email" class="form-control" value="{{$nurse->email}}" id="email" name="email" placeholder="Enter Email">
      </div>
      
      <div class="form-group col-6 mt-2">
          <label for="mobile">Mobile No <span style="color: red">*</span></label>
          <input type="text" class="form-control" value="{{$nurse->mobile}}" id="mobile" name="mobile" placeholder="Enter Mobile Number">
      </div>

      <div class="form-group col-6 mt-2">
          <label for="gender">Gender <span style="color: red">*</span></label>
          <select class="form-select" name="gender" aria-label="Default select example">
            @foreach($genders as $gender) 
                <option 
                @if($gender==$nurse->gender) selected @endif 
                value="{{$gender}}">{{$gender}}
                </option>
            @endforeach
          </select>
      </div>

      <div class="form-group col-6 mt-2">
          <label for="age">Date of Birth <span style="color: red">*</span></label>
          <input type="text" class="form-control" value="{{$nurse->date_of_birth}}" id="age" name="date_of_birth" placeholder="Enter Age">
      </div>

      <div class="form-group col-6 mt-2">
          <label for="address">Address <span style="color: red">*</span></label>
          <input id="address" name="address" class="form-control" value="{{$nurse->address}}" rows="5">
      </div>

      <div class="form-group col-6 mt-2">
            <label for="image">Image <span style="color: red">*</span></label>
            <input name="image" type="file" class="form-control">
      </div>
  </div>
  
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  @endsection