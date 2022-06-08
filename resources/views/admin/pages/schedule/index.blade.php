@extends('admin.master')
@section('content')

<h1>{{__('Schedule List')}}</h1>
<hr>

<div class="row" style="justify-content: space-between;">
  <div class="col">
    <a href="#"  class="btn btn-primary">Add Schedule</a>
  </div>
  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="#">
        CSV
      </a>
      <a class="btn btn-info" href="#">
        Excel
      </a>
      <a class="btn btn-info" href="#">
        PDF
      </a>
      <button class="btn btn-info" onclick="{window.print()}">Print</button>
  </div>
</div>

<br><br>

<div>
              <table class="table" id="dataTable" style="text-align: center;">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Doctor's Name</th>
                    <th scope="col">Available Days</th>
                    <th scope="col">From Time</th>
                    <th scope="col">To Time</th>
                    <th scope="col">Patient Time</th>
                    <th scope="col">Serial Visibility</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($schedule as $key=>$value) 

                          <tr>
                          
                            <th>{{$key+1}}</th>
                            <td>{{$value->doctor->name}}</td>
                            <td>{{$value->days}}</td>
                            <td>{{$value->fromtime}}</td>
                            <td>{{$value->totime}}</td>
                            <td>{{$value->patient_time}}</td>
                            <td>{{$value->serial}}</td>
                            <td>{{$value->status}}</td>
                            

                            <td style="display: flex;">
                              <a style="margin-right:2px" class="btn btn-success btn-sm" href="{{route('schedule.show',$value->id)}}"><i class="fas fa-eye"></i></a>  
                              <a style="margin-right:2px" class="btn btn-warning btn-sm" href="{{route('schedule.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                              <form action="{{route('schedule.destroy',$value->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
        
                                </div>
        
                                </form>
                            </td>  
                          </tr>
                    
                  @endforeach
                </tbody>
              </table>
             
</div>
@endsection