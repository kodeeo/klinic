@extends('admin.master')
@section('content')

<h1>Edit Role</h1>

    

<form action="{{route('role.update', $role->id)}}" method='POST' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"> Role Name:</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$role->name}}">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 




@endsection