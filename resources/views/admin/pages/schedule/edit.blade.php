@extends('admin.master')
@section('content')

<h1>{{__('Update Schedule')}}</h1>
<hr>
<br>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div style="text-align:center;">
  <form action="{{route('schedule.update',$schedule->id)}}" method="POST"  enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
          <div class="form-group col-6">
            <label for="doctor_name">Doctor's Name</label>
            <select class="form-select" name="doctor_id" aria-label="Default select example">
                <option>Select Doctor's Name</option>

                @foreach ($doctor as $item)


                <option
                @if($item->id==$schedule->doctor_id)
                      selected
                      @endif
                  value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
              </select>
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
          @foreach($match as $item)
          {{-- @dd($match) --}}
         <div class="schedule row d-flex">
            <div class="col-3">
                <select id="days" name="days[]" class="form-control">
                    <option  @if($item->days==$schedule->days) selected @endif
                         value="{{$item->days}}">{{$item->days}}</option>
                       @foreach ($days as $day )
                         <option value="{{$day}}">{{$day}}</option> @endforeach </select>
            </div>
            <div class="col-3">
              <input id="fromtime" name="fromtime[]" type="time" class="form-control"
                     value="{{$item->fromtime}}">
            </div>

            <div class="col-3">
              <input id="totime" name="totime[]" type="time" class="form-control"
              value="{{$item->totime}}">
            </div>

            <div class="col-2 remove_button btn btn-danger">Remove</div>
            <hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;">

         </div>


         @endforeach
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
          $(document).ready(function(){
              var maxField = 10; //Input fields increment limitation
              var addButton = $('.add_button'); //Add button selector
              var wrapper = $('.field_wrapper'); //Input field wrapper
              var fieldHTML = '<div class="schedule row d-flex"><div class="col-3"><select id="days" name="days[]" class="form-control"> @foreach($match as $item)<option @if($item->days==$schedule->days) selected @endif value="{{$item->days}}">{{$item->days}}</option> @endforeach</select> </div><div class="col-3"><input type="time" name="fromtime[]" class="form-control" placeholder="Enter From time" value=""/></div><div class="col-3"><input type="time" name="totime[]" class="form-control" placeholder"Enter To time" value=""/></div><div class="col-3"><a href="javascript:void(0);" class="remove_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html
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





        <div class="form-group col-6">
            <label for="email">Per Patient Time</label>
            <input type="text" class="timepicker form-control" id="patient_time" name="patient_time" value="{{$schedule->patient_time}}" placeholder="Enter Patient Time">
        </div>
        <div class="form-group col-6">
            <label for="serial">Serial Visibity</label><br>
            {{-- @dd($schedule) --}}
  <select class="form-select" name="serial" id="serial">
    <option>Serial Visibility</option>

    @foreach ($serial as $item)


    <option
    @if($item==$schedule->serial)
    selected
    @endif

      value="{{$item}}">{{$item}}</option>
          @endforeach
  </select>

        </div>

    <div class="form-group col-12 mt-2">
        <label for="status">Status:</label><br>

        <input type="radio"  name="status" value="active" {{$schedule->status=='active' ? 'checked':''}} >

          <label for="status">Active</label><br>
          <input type="radio"  name="status" value="inactive" {{$schedule->status=='inactive' ? 'checked':''}}>

          <label for="status">Inactive</label><br>
        </div>



    </div>
    <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Update</button>
  </form>
</div>
@endsection
