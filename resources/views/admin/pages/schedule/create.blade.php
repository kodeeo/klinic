@extends('admin.master')
@section('content')

<h1>{{__('Add Schedule')}}</h1>
<hr>
<br>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div style="text-align:center;">
  <form action="{{route('schedule.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
          <div class="form-group col-6">
            <label for="doctor_name">Doctor's Name</label>
            <select class="form-select" name="doctor_id" aria-label="Default select example">
                <option>Select Doctor</option>
                  @foreach ($doctor as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group col-6">
            <label for="email">Per Patient Time (in minutes)</label>
            <input type="text" class="timepicker form-control" id="patient_time" name="patient_time" placeholder="Enter Patient Time">
        </div>

        <div class="form-group col-6 mt-2">
          <label for="serial">Serial Visibity</label><br>
            <select class="form-select" name="serial" id="serial">
              <option value="sequential">Sequential</option>
              <option value="timestamp">Timestamp</option>
            </select>
      </div> 

        <div class="form-group col-6 mt-2">
          <label for="status">Status</label><br>
          <div style="display: flex; justify-content:center; margin-top:3px;">
            <input type="radio" id="active" name="status" value="active">
            <label for="status" style="margin-right: 10px">Active</label><br>
            <input type="radio" id="inactive" name="status" value="inactive">
            <label for="status">Inactive</label><br>
          </div>
          
        </div> 
          {{-- <div class="form-group col-6">
              <label for="email">Availabe Days</label>
              <input type="text" class="form-control" id="days" name="days" placeholder="Enter Availabe Days"><br>
          </div>  --}}

          {{-- working with js,ajax --}}
          {{-- add button added --}}
          <div style="margin-top: 20px;">
            <table class="table">
                <thead>
                  <tr>
                    <th class="col-3"><h5>Available Days</h5></th>
                    <th class="col-3"><h5>From time</h5></th>
                    <th class="col-3"><h5>To time</h5></th>
                    
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
              var fieldHTML = '<div class="schedule row d-flex"><div class="col-3"><select id="days" name="days[]" class="form-control"> @foreach($days as $day)<option value="{{$day}}">{{$day}}</option> @endforeach</select></div><div class="col-3"><input type="time" name="fromtime[]" class="form-control" placeholder="Enter From time" value=""/></div><div class="col-3"><input type="time" name="totime[]" class="form-control" placeholder"Enter To time" value=""/></div><div class="col-3"><a href="javascript:void(0);" class="remove_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html 
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