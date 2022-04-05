@extends('admin.master')
@section('content')
<h1>Cause List</h1>
<hr>
<a href="{{route('patient.add')}}"><button class="btn btn-primary">Create Patient</button></a>
<br><br>
<div> 
  <table class="table" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Target Amount</th>
      <th scope="col">Image</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    {{-- <tbody>
      <tr>
          @foreach($causelist as $key=>$causes) --}}
          {{-- @dd($causelist) --}}
        {{-- <th scope="row">{{$key+1}}</th>
        <td>{{$causes->name}}</td>
        <td>{{$causes->details}}</td>
        <td>{{$causes->category->name}}</td>
        <td>{{$causes->location}}</td>
        <td>{{$causes->contact}}</td>
        <td>{{$causes->target_amount}}</td>
        <td><img src="{{url('/uploads/causes/'.$causes->image)}}" style="border-radius:4px" width="100px" alt="cause image"></td>
      <td>{{$causes->created_at->diffforhumans()}}</td>
        <td>
          <a class="btn btn-success btn-sm" href="{{route('view.cause',$causes->id)}}"><i class="fa-solid fa-eye"></i></a>
          <a class="btn btn-warning btn-sm" href="{{route('edit.cause',$causes->id)}}"><i class="fas fa-edit"></i></a>
          <a class="btn btn-danger btn-sm" href="{{route('delete.cause',$causes->id)}}"><i class="fas fa-trash"></i></a>
      </td>
        </td>
      </tr>
      @endforeach
     
    </tbody> --}}
  </table>
</div> 

@endsection