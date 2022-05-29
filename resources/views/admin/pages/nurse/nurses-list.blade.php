@extends('admin.master')
@section('content')
<h1>{{__('Nurses List')}}</h1>
<hr>

 <a href="{{route('nurse.add')}}"><button type="button" class="btn btn-primary">Create Nurse</button></a><br><br>

<div> 
  <table class="table" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Nurse Name</th>
      <th scope="col">Contact No.</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Duty Hours</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      @foreach($nurses as $key=>$nurse)
        
        <th scope="row">{{$key+1}}</th>
        <td>{{$nurse->name}}</td>
        <td>0{{$nurse->contact_no}}</td>
        <td>{{$nurse->email}}</td>
        <td>{{$nurse->address}}</td>
        <td>{{$nurse->duty_hrs}}</td>
        <td><img src="{{url('/uploads/'.$nurse->image)}}" style="border-radius:4px" width="40px" alt="test image"></td>
        <td>
        <a class="btn btn-success btn-sm" href="{{route('nurse.show',$nurse->id)}}"><i class="fas fa-eye"></i></a> 
          <a class="btn btn-warning btn-sm" href="{{route('nurse.edit',$nurse->id)}}"><i class="fas fa-edit"></i></a>
          <a class="btn btn-danger btn-sm" href="{{route('nurse.delete',$nurse->id)}}"><i class="fas fa-trash"></i></a>
      </td>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div> 

@endsection