@extends('admin.master')
@section('content')
<h1>{{__('user.users list')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
	<div class="col">
		<a href="{{route('user.add')}}" class="btn btn-primary" type="button"> Create New User</a>
	</div>
</div>
<br><br>
<div> 
  <table class="table" id="dataTable" style="text-align: center;">
    <thead class="thead-dark">
		<tr>
		  <th>SL No</th>
		  <th>Image</th>
		  <th>Name</th>
		  <th>Email </th>
		  <th>Role</th>
		  <th>Action</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
		@foreach($users as $key=>$user)
		<th scope="row">{{$key+1}}</th>
		<td><img src="{{$user->user_image}}" style="border-radius:4px" width="50px" alt="image"></td>
		 <td>{{$user->username}}</td>
		 <td>{{$user->email}}</td>
		 <td>{{optional($user->role)->name}}</td>		
         <td>
			 <a href="{{route('user.details', $user->id)}}" class="btn btn-success" type="button">View</a>
		</td>
		</tr>
		 @endforeach
		</tbody>
	  </table>
</div>

    
@endsection