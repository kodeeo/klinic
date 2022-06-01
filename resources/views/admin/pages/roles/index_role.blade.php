@extends('admin.master')
@section('content')
 <h1>{{__('Roles List')}}</h1>

<style>
	body{
	 
	   background: linear-gradient(to left, #ccccff 45%, #ccffff 95%);
   
	}
	 #customers {
	   font-family: Arial, Helvetica, sans-serif;
	   border-collapse: collapse;
	   width: 100%;
	 }
	 .heading h2{
	   text-align: center;
	 }
	 #customers td, #customers th {
	   border: 1px solid #ddd;
	   padding: 8px;
	 }
	 
	 #customers tr:nth-child(even){background-color: #ccccff;}
	 
	 #customers tr:hover {background-color: #ddd;}
	 
	
	 #customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #001313;
		color: white;
	  }
	  #create{

		text-align: right;
	  }
	 </style>

	  <div id="create"> 

		<a href="{{route('role.create')}}" class="btn btn-primary" type="button">Create New Role</a>

	  </div>
	 
	  <table id="customers">
		<tr>
		  <th>SL No</th>
		  <th>Name</th>
		  <th>Status</th>
		  <th>Description</th>
		  <th>Slug</th>
		  <th>Action</th>
	  
		</tr>
	
		<tr>
		 @foreach ($roles as $key=>$role)
			 
		 <th scope="row">{{$key+1}}</th>
		 <td>{{$role->name}}</td>
		 <td>{{$role->status}}</td>
		 <td>{{$role->description}}</td>
		 <td>{{$role->slug}}</td>


		 
		 <td>  <a href="{{route('role.view', $role->id)}}" class="btn btn-success" type="button">View</a>
			 
			<a href="{{route('role.edit', $role->id)}}" class="btn btn-warning" type="button">Edit</a>
			<a href="{{route('role.delete', $role->id)}}" class="btn btn-danger" type="button">Delete</a>
		</td>
		  </tr>
		  @endforeach
	
	  </table>
{{$roles->links()}}

    
@endsection