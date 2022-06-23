@extends('admin.master')
@section('content')
    

<h1>{{__('Staff Registration')}}</h1>
<hr>

<form action="{{route('staffs.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-12">
            <label for="role">Staff's Role <span style="color: red">*</span></label>
            <select class="form-select" name="role_id" aria-label="Default select example" required>
                @foreach ($roles as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="first_name">First Name <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="last_name">Last Name <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="email">Email <span style="color: red">*</span></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
        </div>
        
        <div class="form-group col-6 mt-2">
            <label for="mobile">Mobile No <span style="color: red">*</span></label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="gender">Gender <span style="color: red">*</span></label>
            <select class="form-select" name="gender" aria-label="Default select example" required>
                @foreach($genders as $gender)
                    <option value="{{$gender}}">{{$gender}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="age">Date of Birth <span style="color: red">*</span></label>
            <input type="date" class="form-control" id="age" name="date_of_birth" placeholder="Enter Age">
        </div>

        <div class="form-group col-6 mt-2">
            <label for="address">Address <span style="color: red">*</span></label>
            <textarea name="address" class="form-control" rows="5" required></textarea>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control">
        </div>
    </div>
    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection