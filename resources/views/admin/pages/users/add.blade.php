@extends('admin.master')
@section('content')

<div class="container">
    <h2>{{__('Create Users')}} </h2>
  <form action="{{route('user.store')}}" method='POST' enctype="multipart/form-data">
    @csrf
  <div class="row" style="display: flex">
    <div class="form-group col-6">
      <label for="name">Name <span style="color:red">*</span></label>
      <input type="text" id="name" class="form-control" name="name" placeholder="Users Name" required>
    </div>
  <div class="form-group col-6">
    <label for="role">Select Role <span style="color:red">*</span></label>
    <select class="form-control" id="role" name="role_id" required>
        @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select> 
  </div> 
  <div class="form-group col-6 mt-2">
      <label for="email">Email <span style="color:red">*</span></label>
      <input id="email"  name="email" class="form-control" placeholder="Users Email" required>
  </div>
  <div class="form-group col-6 mt-2">
      <label for="password">Password <span style="color:red">*</span></label>
      <input id="text" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group col-6 mt-2">
      <label for="user_image">Image </label>
      <input  type="file" name="user_image" class="form-control" id="user_image">
    </div>
  </div>
  <div class="form-group col-6 mt-2">
      <button class="btn btn-success">Submit</button>
  </div>
  <br>
  </form>
</div>

</body>
</html>
@endsection