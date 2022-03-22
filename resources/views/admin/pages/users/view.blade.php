@extends('admin.master')
@section('content')


<h1>View Role</h1>

    

<form action="{{route('user.details', $users->id)}}" method='POST' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"> User Name:</label>
      <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->name}}">
      
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Role Name:</label>
        <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->role->name}}">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"> Email:</label>
        <input type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$users->email}}">
        
      </div>
      
      
    
  </form>
 






@endsection