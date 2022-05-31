@extends('admin.master')
@section('content')
    
<h1>WardBoys</h1>
<hr>

 <a href="{{route('wardboy.add')}}"><button type="button" class="btn btn-primary">Create WardBoy</button></a><br><br>

<div>
            <table class="table" style="text-align: center;">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Addess</th>
                    <th scope="col">Ward No.</th>
                    <th scope="col">Date_Of_Joining</th>
                    <th scope="col">Duty Hours</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($wardboys as $key=>$wardboy)
               <th scope="row">{{$key+1}}</th>
                <td>{{$wardboy->name}}</td>
                <td>{{$wardboy->email}}</td>
                <td>{{$wardboy->contact}}</td>
                <td>{{$wardboy->address}}</td>
                <td>{{$wardboy->wardNo}}</td>
                <td>{{$wardboy->joinDate}}</td>
                <td>{{$wardboy->hrs}}</td>
                <td><img src="{{url('/uploads/'.$wardboy->image)}}" style="border-radius:4px" width="40px" alt="WardBoy image"></td>
                <td>
                <a class="btn btn-success btn-sm" href="{{route('wardboy.show',$wardboy->id)}}"><i class="fas fa-eye"></i></a> 
          <a class="btn btn-warning btn-sm" href="{{route('wardboy.edit',$wardboy->id)}}"><i class="fas fa-edit"></i></a>
          <a class="btn btn-danger btn-sm" href="{{route('wardboy.delete',$wardboy->id)}}"><i class="fas fa-trash"></i></a>
         </td>
                @endforeach
              </tbody>
            </table>
            {{ $wardboys->links() }}
</div>
@endsection