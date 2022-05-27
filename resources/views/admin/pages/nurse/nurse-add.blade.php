@extends('admin.master')
@section('content')
    

<h1>Add New Nurse</h1>


<!--server side validation start-->
@if ($errors->any())
     <div class="alert alert-danger" role="alert">
       <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
       </ul>
     </div>
@endif
<!--server side validation end-->

<form action="{{route('nurse.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

  

        <div class="form-group col-6">
            <label for="name">Nurse Name</label>
            <input type="text" class="form-control"  name="name" placeholder="Enter Nurse Name" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Contact No.</label>
            <input type="text" class="form-control"  name="contact" placeholder="Enter a valid number" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Email</label>
            <input type="text" class="form-control"  name="email" placeholder="Enter Nurse Email">
          </div>

          <div class="form-group col-6">
            <label for="name">Address</label>
            <input type="text" class="form-control"  name="address" placeholder="Enter Nurse Address" >
          </div>


          <div class="form-group col-6">
            <label for="name">Duty Hours</label>
            <input type="number" class="form-control"  name="hrs" placeholder="Enter Duty Hours" >
          </div>

          <div class="form-group col-6">
            <label for="name">Password</label>
            <input type="string" class="form-control"  name="password" placeholder="Enter Duty Hours" >
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection