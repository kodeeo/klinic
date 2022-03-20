@extends('admin.master')
@section('content')


<h1>Add Role</h1>

    
@endif
<form action="{{route('role.store')}}" method='POST' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 


@endsection
