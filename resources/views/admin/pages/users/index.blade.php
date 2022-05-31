@extends('admin.master')
@section('content')
 <h1> {{__('user.users list')}}</h1>

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

	  
	  <br>
	  <div id="create"> 

		<a href="{{route('user.add')}}" class="btn btn-primary" type="button"> +Create New User</a>

	  </div>
	 
	  <table id="customers">
		<tr>
		  <th>SL No</th>
		  <th>Name</th>
		  <th>Select Role_Id</th>
		  <th>Email </th>
		  
		  <th>Image</th>
		  <th>Action</th>
	  
		</tr>
	
		<tr>

		@foreach($users as $key=>$user)
		<th scope="row">{{$key+1}}</th>
		 <td>{{$user->name}}</td>
		 <td>{{$user->role->name}}</td>
		 <td>{{$user->email}}</td>
		 <td>#</td>

         <td><a href="{{route('user.details', $user->id)}}" class="btn btn-success" type="button">View</a></td>
		 
		  </tr>
		 @endforeach
	
	  </table>


    
@endsection