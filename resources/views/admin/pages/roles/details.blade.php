@extends ('admin.master')
@section ('content')

<h1>View Role</h1>

    

<form action="{{route('role.view', $role->id)}}" method='POST' enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label"> Role Name:</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$role->name}}">
    </div>
    
    
  </form>
 





@endsection