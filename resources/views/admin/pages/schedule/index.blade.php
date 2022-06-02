@extends('admin.master')
@section('content')

<h1>{{__('Schedule List')}}</h1>
<hr>

<div>
              <table class="table" style="text-align: center;">
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
                            

                            <td>
                              <a class="btn btn-success btn-sm" href="#"><i class="fas fa-eye"></i></a>  
                              <a class="btn btn-warning btn-sm" href="#"><i class="fas fa-edit"></i></a>
                              <a class="btn btn-danger btn-sm" href="#"><i class="fas fa-trash"></i></a>
                            </td>  
                          </tr>
                    
                  @endforeach
                </tbody>
              </table>
              
</div>
@endsection