@extends('admin.master')
@section('content')

<h1>{{__('Add Prescription')}}</h1>
<hr>
<br>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div style="text-align:center;">
  <form action="{{route('prescription.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="form-group col-6">
        <label for="patient_id">Patient ID</label>
        <input type="text" class="timepicker form-control" id="patient_id" name="patient_id" placeholder="Enter Patient ID">
    </div>
    <div class="form-group col-6">
      <label for="patient_name">Patient Name</label>
      <input type="text" class="form-control" id="patient_time" name="patient_time" placeholder="Enter Patient Name">
  </div>
          <div class="form-group col-6">
            <label for="doctor_name">Doctor Name</label>
            <select class="form-select" name="doctor_id" aria-label="Default select example">
                <option>Select Doctor</option>
                  @foreach ($doctor as $item)
                <option value="{{$item->id}}">{{$item->first_name}} {{$item->last_name}}</option>
                @endforeach
            </select>
          </div>

          

          
        <div class="form-group col-6">
          <label for="weight">Weight</label>
          <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Patient Weight">
      </div>
      <div class="form-group col-6">
        <label for="blood_pressure">Blood Pressure</label>
        <input type="text" class="form-control" id="blood_pressure" name="blood_pressure" placeholder="Enter Blood Pressure">
    </div>
      <div class="form-group col-6">
        <label for="reference">Reference</label>
        <input type="text" class="form-control" id="reference" name="reference" placeholder="Enter Reference">
    </div>
      
    <div class="form-group col-6 mt-2">
          <label for="type">Type</label><br>
          <div style="display: flex; justify-content:center; margin-top:3px;">
            <input type="radio" id="new" name="type" value="new">
            <label for="type" style="margin-right: 10px">New </label><br>
            <input type="radio" id="old" name="type" value="old">
            <label for="type">Old </label><br>
          </div>  
        </div> 
         
          <div style="margin-top: 20px;">
            <table class="table">
                <thead>
                  <tr>
                    <th class="col-3"><h5>Medicine Name</h5></th>
                    <th class="col-2"><h5>Type</h5></th>
                    <th class="col-3"><h5>Instructions</h5></th>
                    <th class="col-2"><h5>Days</h5></th>
                    <th class="col-3"><h5>Add/Remove</h5></th>
                    
                    <th class="col">
                      <a href="javascript:void(0);" class="add_medicine_button btn btn-info"  title="Add field">Add</a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                  </tr>
                </tbody>
              </table>
        </div>
        {{-- after clicking add button --}}
        <div class="row field_wrapper" style="display: flex;">
          <div class="col-3">
              @if ($errors->has('subject_id'))
                <span class="text-danger">{{ $errors->first('subject_id') }}</span>
              @endif
          </div>
          <div class="col-3">
              @if ($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
              @endif
          </div>
          <div class="col-3">
            @if ($errors->has('number'))
              <span class="text-danger">{{ $errors->first('number') }}</span>
            @endif
        </div>
         
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
              var maxField = 10; //Input fields increment limitation
              var addMedicineButton = $('.add_medicine_button'); //Add button selector
              var wrapper = $('.field_wrapper'); //Input field wrapper
              var fieldMedicineHTML = '<div class="medicine row d-flex"><div class="col-3"><select id="medicine_id" name="medicine_id[]" class="form-control"> @foreach($medicines as $medicine)<option value="{{$medicine->name}}">{{$medicine->name}}</option> @endforeach</select></div><div class="col-2"><input type="text" name="medicine_type[]" class="form-control" placeholder="Medicine Type" value=""/></div><div class="col-3"><textarea type="text" name="medicine_instruction[]" class="form-control" placeholder"Enter Instruction" value=""/></textarea></div><div class="col-1"><input type="number" name="days" class="form-control" placeholder="Days" value=""/></div><div class="col-3"><a href="javascript:void(0);" class="remove_medicine_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html 
              var x = 1; //Initial field counter is 1
              
              //Once add button is clicked
              $(addMedicineButton).click(function(){
                  //Check maximum number of input fields
                  if(x < maxField){ 
                      x++; //Increment field counter
                      $(wrapper).append(fieldMedicineHTML); //Add field html
                  }
              });
              
              //Once remove button is clicked
              $(wrapper).on('click', '.remove_medicine_button', function(e){
                  e.preventDefault();
                  $(this).closest('.medicine').remove(); //Remove field html
                  x--; //Decrement field counter
              });
          });
          </script>


<div style="margin-top: 20px;">
  <table class="table">
      <thead>
        <tr>
          <th class="col-3"><h5>Diagnosis </h5></th>
          <th class="col-3"><h5>Instructions</h5></th>
          <th class="col-3"><h5>Add/Remove</h5></th>
          
          <th class="col">
            <a href="javascript:void(0);" class="add_button btn btn-info"  title="Add field">Add</a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>

        </tr>
      </tbody>
    </table>
</div>
{{-- after clicking add button --}}
<div class="row field_wrapper" style="display: flex;">
<div class="col-3">
    @if ($errors->has('subject_id'))
      <span class="text-danger">{{ $errors->first('subject_id') }}</span>
    @endif
</div>
<div class="col-3">
    @if ($errors->has('number'))
      <span class="text-danger">{{ $errors->first('number') }}</span>
    @endif
</div>
<div class="col-3">
  @if ($errors->has('number'))
    <span class="text-danger">{{ $errors->first('number') }}</span>
  @endif
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="schedule row d-flex"><div class="col-3"><select id="test_id" name="test_id[]" class="form-control"> @foreach($tests as $test)<option value="{{$test->name}}">{{$test->name}}</option> @endforeach</select></div><div class="col-3"><textarea type="text" name="medicine_instruction[]" class="form-control" placeholder"Enter Instruction" value=""/></textarea></div><div class="col-3"><a href="javascript:void(0);" class="remove_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).closest('.schedule').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>



          {{-- <div class="form-group col-12">
            <label for="time">Availabe Time:</label><br>
            <div class="row" style="display: flex;">
                <div class="col">
                    <label for="fromtime">From</label>
                    <input type="time" class="form-control" id="fromtime" name="fromtime" placeholder="From">
                </div>
                <div class="col">

                <label for="totime">To</label>
                <input type="time" class="form-control" id="totime" name="totime" placeholder="To"><br>
                    
                </div>
               
            </div>
          
        </div>  --}}

    </div>   
    <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Save</button>
  </form>
</div>
@endsection