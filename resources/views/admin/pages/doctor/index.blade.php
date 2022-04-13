@extends('admin.master')
@section('content')
    
<h1>Doctors</h1>
<hr>

 <a href="{{route('doctor.create')}}"><button type="button" class="btn btn-primary">Create Doctor</button></a><br><br>

<div>
            <table class="table" style="text-align: center;">
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
                    <td><img src="{{url('/uploads/'.$value->image)}}" style="border-radius:4px" width="100px" alt="doctor image"></td>

                   
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