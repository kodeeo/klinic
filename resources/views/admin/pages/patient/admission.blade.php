@extends('admin.master')
@section('content')
    

<h1> Patient Admission</h1>


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
<form action="" method="" >
    @csrf
    <div class="row">

        <div class="form-group col-6">
            <label for="name">Admitted by</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
          </div>
        <div class="form-group col-6">
            <label for="name">For Minor Name of Parents</label>
            <input type="text" class="form-control" id="father" name="father" placeholder="Enter Father Name">
          </div>
          <div class="form-group col-6">
            <label for="name"></label>
            <input type="text" class="form-control" id="mother" name="mother" placeholder="Enter Mother Name">
          </div>

          <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Room</label>
            <select name="ptype" class="form-control" id="exampleFormControlSelect1">
              <option>OPD</option>
              <option>IPD</option>
            </select>
          </div>
          <div class="form-group col-6">
              <label for="doctor">Attending Physician</label>
              <input type="text" class="form-control" id="doctor" name="doctor" placeholder="Enter Email">
          </div>
          <div class="form-group col-6 mt-2">
            <label for="relation">Relation To Patient</label>
            <input type="text" class="form-control" id="relation" name="relation" placeholder="Enter Relation Type">
        </div>

          <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address Number">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="mobile">Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="nid">NID</label>
            <input type="text" class="form-control" id="nid" name="nid" placeholder="Enter NID Number">
        </div>
    
      <div class="form-group col-6 mt-2">
         <label for="occupation">Occupation</label>
         <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Occupation">
     </div>
     <div class="form-group col-6 mt-2">
        <label for="payment">Total Payment for Admission</label>
        <input type="text" class="form-control" id="payment" name="payment" placeholder="Enter Total Payment Amount">
    </div>
        
    
    
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection