@extends('admin.master')
@section('content')
<h1>{{__('Roles List')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
	<div class="col">
	  <a href="{{route('role.create')}}"  class="btn btn-primary">Add Role</a>
	</div>
</div>
<br><br>
<div> 
	<table class="table" id="dataTable" style="text-align: center;">
		<thead class="thead-dark">
		<tr>
			<th>SL No</th>
			<th>Name</th>
			<th>Status</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		</thead>

		<tbody>
			<tr>
			@foreach ($roles as $key=>$role) 
				<th scope="row">{{$key+1}}</th>
				<td>{{$role->name}}</td>
				<td>{{$role->status}}</td>
				<td>{{$role->description}}</td>
				<td style="display: flex">  
					<a  href="{{route('role.view', $role->id)}}" class="btn btn-sm btn-success"><i class="fas fa-eye"></i>View</a>	 
					<a style="margin-left: 3px" href="{{route('role.edit', $role->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
					<a style="margin-left: 3px" href="{{route('role.delete', $role->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>
					<a style="margin-left: 3px" href="{{route('permission.list', $role->id)}}" class="btn btn-sm btn-danger">Assign</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	  </table>
</div>

@endsection