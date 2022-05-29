@extends('admin.master')
@section('content')
    

<h1>Setup Clinic Informations</h1>

<form action="{{route('clinic.setup.store')}}" method="POST" enctype="multipart/form-data">
    @csrf


        <div class="form-group col-6">
            <label for="name">Company Name</label>
            <input type="text" class="form-control"  name="name" placeholder="Enter Clinic Name" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Slogan</label>
            <input type="text" class="form-control"  name="slogan" placeholder="Enter Clinic Slogan" >
          </div>

          <div class="form-group col-6">
            <label for="name">Address</label>
            <input type="text" class="form-control"  name="address" placeholder="Enter address" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Phone</label>
            <input type="number" class="form-control"  name="phone" placeholder="Enter a phone number" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Email</label>
            <input type="email" class="form-control"  name="email" placeholder="Enter email address" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Website</label>
            <input type="text" class="form-control"  name="web" placeholder="Enter Website Link" required>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Logo</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
      
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection