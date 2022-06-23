@extends('admin.master')
@section('content')
    

<h1>{{__('Setup Clinic Informations')}}</h1>

@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif

<form action="{{route('clinic.update',$clinic->id)}}" method="POST" enctype="multipart/form-data">
  @method('put')
    @csrf


        <div class="form-group col-6">
            <label for="name">Company Name</label>
            <input type="text" class="form-control" value="{{$clinic->name}}" name="name" placeholder="Enter Clinic Name" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Slogan</label>
            <input type="text" class="form-control" value="{{$clinic->slogan}}"  name="slogan" placeholder="Enter Clinic Slogan" >
          </div>

          <div class="form-group col-6">
            <label for="name">Address</label>
            <input type="text" class="form-control" value="{{$clinic->address}}" name="address" placeholder="Enter address" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Phone</label>
            <input type="number" class="form-control" value="{{$clinic->phone}}" name="phone" placeholder="Enter a phone number" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Email</label>
            <input type="email" class="form-control" value="{{$clinic->email}}"  name="email" placeholder="Enter email address" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Website</label>
            <input type="text" class="form-control" value="{{$clinic->web}}"  name="web" placeholder="Enter Website Link" required>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Logo</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
      
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @endsection