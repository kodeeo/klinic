@extends('admin.master')
@section('content')
<h1>{{__('Wardboys List')}}</h1>
<hr>

 <div class="row" style="justify-content: space-between;">
  <div class="d-print-none col">
    <a href="{{route('staffs.create')}}"  class="btn btn-primary">Add Staffs</a>
  </div>

  <div class="d-print-none col-4 dt-buttons btn-group">
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
      @foreach($wardboys as $key=>$wardboy)
        
        <th scope="row">{{$key+1}}</th>
        <td><img src={{url('/uploads/staffs',$wardboy->image)}} class="rounded-circle" width="50px"></td>
        <td>{{$wardboy->first_name. ''.$wardboy->last_name}}</td>
        {{-- <td> {{$wardboy->last_name}}</td> --}}
        <td>{{$wardboy->email}}</td>
        <td>{{$wardboy->mobile}}</td>
        <td>{{$wardboy->status}}</td>
        <td>
          <div style="display:flex"> 
          <a class="btn btn-success btn-sm m-1" href="{{route('wardboys.show',$wardboy->id)}}"><i class="fas fa-eye"></i></a> 
          <a class="btn btn-warning btn-sm m-1" href="{{route('wardboys.edit',$wardboy->id)}}"><i class="fas fa-edit"></i></a>
            <form action="{{route('wardboys.destroy',$wardboy->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <div>
                  <button class="btn btn-danger btn-sm m-1" type="submit"><i class="fas fa-trash"></i></button>
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