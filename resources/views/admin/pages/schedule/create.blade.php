@extends('admin.master')
@section('content')

<h1>{{__('Add Schedule')}}</h1>
<hr>
<br>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
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
              <label for="email">Availabe Days</label>
              <input type="text" class="form-control" id="days" name="days" placeholder="Enter Availabe Days"><br>
          </div> 
          <div class="form-group col-12">
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
          
        </div> 
        
        <div class="form-group col-6">
            <label for="email">Per Patient Time</label>
            <input type="time" class="form-control" id="patient_time" name="patient_time" placeholder="Enter Patient Time">
        </div> 
        <div class="form-group col-6">
            <label for="serial">Serial Visibity</label><br>
  <select class="form-select" name="serial" id="serial">
    <option value="sequential">Sequential</option>
    <option value="timestamp">Timestamp</option>
  </select>
        </div> 

    <div class="form-group col-12 mt-2">
        <label for="status">Status:</label><br>

        <input type="radio" id="active" name="status" value="active">
          <label for="status">Active</label><br>
          <input type="radio" id="inactive" name="status" value="inactive">
          <label for="status">Inactive</label><br>
        </div> 

       

    </div>   
    <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Save</button>
  </form>
</div>
@endsection