@extends('admin.master')
@section('content')
    
<h1>Staffs</h1>

<hr>

 <a href="{{route('staff.create')}}"><button type="button" class="btn btn-primary">Create Staff</button></a><br><br>

<div>
            <table class="table" style="text-align: center;">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Addess</th>   
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($staffs as $key=>$value) 
               

                  <tr>
                    
                    
                    <th>{{$key+1}}</th>
                    <th>{{$value->designation->designation}}</th>
                    <th>{{$value->email}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->address}}</td>
                    <td><img src="{{url('/uploads/staffs/'.$value->image)}}" style="border-radius:4px" width="100px" alt="staff image"></td>

                   
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('staff.show',$value->id)}}"><i class="fas fa-eye"></i></a> 
                        <a class="btn btn-warning btn-sm" href="{{route('staff.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                        <form action="{{route('staff.destroy',$value->id)}}" method="POST">
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