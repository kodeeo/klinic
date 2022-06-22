@extends('admin.master')
@section('content')
<h1>{{__('Nurses List')}}</h1>
<hr>

 <div class="row" style="justify-content: space-between;">
  <div class="d-print-none col">
    <a href="{{route('staffs.create')}}"  class="btn btn-primary">Add Staffs</a>
  </div>

  <div class="d-print-none col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('nurse.data.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('nurse.data.excel')}}">
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
      <th scope="col-2">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($nurses as $key=>$nurse)
        
        <th scope="row">{{$key+1}}</th>
        <td><img src={{url('/uploads/staffs',$nurse->image)}} class="rounded-circle" width="50px" alt="image"></td>
        <td>{{$nurse->first_name. ''.$nurse->last_name}}</td>
        <td>{{$nurse->email}}</td>
        <td>{{$nurse->mobile}}</td>
        <td>{{$nurse->status}}</td>
        <td>
          <div style="display: flex">
          <a class="btn btn-sm btn-success m-1" href="{{route('nurses.show',$nurse->id)}}"><i class="fas fa-eye"></i></a> 
          <a class="btn btn-sm btn-warning m-1" href="{{route('nurses.edit',$nurse->id)}}"><i class="fas fa-edit"></i></a>
            <form style="margin-left: 3px" action="{{route('nurses.destroy',$nurse->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <div>
                  <button class="btn btn-sm btn-danger m-1" type="submit"><i class="fas fa-trash"></i></button>
              </div> 
            </form> 
          </div>      
          </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div> 

@endsection