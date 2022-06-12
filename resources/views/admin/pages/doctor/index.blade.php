@extends('admin.master')
@section('content')
    
<h1>{{__('Doctors')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
  <div class="col">
    <a href="{{route('doctor.create')}}"  class="btn btn-primary">Add Doctor</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('doctor.data.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('doctor.data.excel')}}">
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Addess</th>
                    <th scope="col">Department</th>
                    <th scope="col">Degree</th>    
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($doctors as $key=>$value) 
               

                  <tr>
                    
                    
                    <th>{{$key+1}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->department->name ?? ""}}</td>
                    <td>{{$value->degree}}</td>
                    <td><img src="{{url('/uploads/doctors/'.$value->image)}}" style="border-radius:4px" width="100px" alt="doctor image"></td>

                   
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('doctor.show',$value->id)}}"><i class="fas fa-eye"></i></a> 
                        <a class="btn btn-warning btn-sm" href="{{route('doctor.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                        <form action="{{route('doctor.destroy',$value->id)}}" method="POST">
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