@extends('admin.master')
@section('content')


<div class="container">
    <h2>{{__('Create Users')}} </h2>
  <form action="{{route('user.store')}}" method='POST' enctype="multipart/form-data">
    @csrf
  <div class="row" style="display: flex">
    <div class="col-6">
      <label for="name">Name<span style="color:red">*</span>:</label>
      <input type="text" id="name" class="form-control" name="user_name" placeholder="Users Name">
    </div>
  </div>
  <div class="col-5">
    <label for="role">Select Role</label>
    <select class="form-control" id="role" name="role_id">
      <option value="">--User Role--</option>
        @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select> 
  </div> 
  <div class="col-6"> 
      <label for="email">Email <span style="color:red">*</span>:</label>
      <input id="email"  name="email" placeholder="Users Email" style="height:50px"></textarea>
  </div>
  <div class="row">
    <div class="col-6"> 
      <label for="password">Password <span style="color:red">*</span>:</label>
      <textarea id="text" name="password" placeholder="Password" style="height:50px"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-6"> 
        <div class="form-group">
            <div class="form-group">
                <label for="user_image">Image:</label>
                <input  type="file" name="user_image" class="form-control" id="user_image">
            </div>
        </div>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>
@endsection