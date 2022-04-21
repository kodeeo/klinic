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
<form action="{{route('patient_admisssion.store')}}" method="POST" >
    @csrf
    <input type="hidden" name="patient_id" value="{{$new_patient->id}}">
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
            <select name="room" class="form-control" id="exampleFormControlSelect1">
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

 
    <div class="form-group col-12">
      
           <h1> Patient Medical Information</h1>
          </div>

      <div class="form-group col-6">
            <label for="allergies">Do you have allergies to any medicine or food?</label>
            <input type="text" class="form-control" id=" allergies" name=" allergies" placeholder="Do you have allergies to any medicine or food?">
          </div>
          <br>
        <div class="form-group col-6">
            <label for="tendancy">Do you have  a tendancy to bleed or buise easily</label>
            <input type="text" class="form-control" id="tendancy" name="tendancy" placeholder="Do you have  a tendancy to bleed or buise easily">
          </div>
          <div class="form-group col-6">
            <h3>Please Select Illness as following</h3>
          </div>
          <div class="form-group col-6 mt-2">
          </div>
  
          <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Heart Diseases</label>
            <select name="heart" class="form-control" id="exampleFormControlSelect1">
              <option>Yes</option>
              <option>No</option>
            </select>
          </div>
          <div class="form-group col-6">
          </div>
          <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">HighBlood Pressure</label>
            <select name="pressure" class="form-control" id="exampleFormControlSelect1">
              <option>Yes</option>
              <option>No</option>
            </select>
        </div>

          <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Any Accident</label>
            <select name="accident" class="form-control" id="exampleFormControlSelect1">
              <option>Yes</option>
              <option>No</option>
            </select>
        </div>
        <div class="form-group col-6 mt-2">
          <label for="exampleFormControlSelect1">Diabetic</label>
          <select name="diabetic" class="form-control" id="exampleFormControlSelect1">
            <option>Yes</option>
            <option>No</option>
          </select>
        </div>
        <div class="form-group col-6 mt-2">
          <label for="exampleFormControlSelect1">Others</label>
          <select name="others" class="form-control" id="exampleFormControlSelect1">
            <option>Yes</option>
            <option>No</option>
          </select>
        </div>
    
      <div class="form-group col-6 mt-2">
        <label for="exampleFormControlSelect1">Do you Consider yourself to be in a high risk group for infectious diseases?</label>
        <select name="infection" class="form-control" id="exampleFormControlSelect1">
          <option>Yes</option>
          <option>NO
          </option>
        </select>
      </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea">Please list any relevant family medical history and social history</label>
          <textarea name="details"class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea">Please list your current medical conditions and medicals</label>
          <textarea name="condition"class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
        </div>
    
     <div class="form-group col-6 mt-2">
      <label for="exampleFormControlSelect1"> Are You under Private  Health Insurance  Extras covering Acupuncture or chiese Herbal Medicine?</label>
      <select name="insurance" class="form-control" id="exampleFormControlSelect1">
        <option>Yes</option>
        <option>No</option>
      </select>
    </div>
    <div class="form-group col-6 mt-2">
      <label for="exampleFormControlSelect1">Are you covered by Worksafe or Comcare</label>
      <select name="worksafe" class="form-control" id="exampleFormControlSelect1">
        <option>Yes</option>
        <option>NO</option>
      </select>
    </div>
    <div class="form-group col-6 mt-2">
      <label for="exampleFormControlSelect1">Are you covered by TAC</label>
      <select name="tac" class="form-control" id="exampleFormControlSelect1">
        <option>Yes</option>
        <option>No</option>
      </select>
    </div>
    <div class="form-group col-6 mt-2">
      <label for="exampleFormControlSelect1">Are you a Pensioner,Student,Low-Income Healtcare Card Holder </label>
      <select name="pension" class="form-control" id="exampleFormControlSelect1">
        <option>Pensioner</option>
        <option>Student</option>
        <option>Low-Income Healtcare Card Holder</option>
      </select>
    </div>
    <div class="form-group col-6 mt-2">
      <label for="exampleFormControlSelect1">How do you know our Clinic</label>
      <select name="know" class="form-control" id="exampleFormControlSelect1">
        <option>Friend</option>
        <option>Yellow Page</option>
        <option>Google</option>
      </select>
    </div>
    <div class="form-group col-6 mt-2">
      <label for="exampleFormControlSelect1">Do you require subcription on every visit?</label>
      <select name="visit" class="form-control" id="exampleFormControlSelect1">
        <option>Yes</option>
        <option> No</option>
       
      </select>
    </div>

  </div>
        
    
    
    <br>
    <button type="submit" class="btn btn-success">Submit</button>
   
  </form>




  @endsection