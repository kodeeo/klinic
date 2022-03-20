@extends('admin.master')
@section('content')
 <h1>Users List</h1>

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
	 </style>

	  
	  <br>
	  <a href="" class="btn btn-primary" type="button">Create New User</a>
	  <table id="customers">
		<tr>
		  <th>SL No</th>
		  <th>Name</th>
		  <th>Details</th>
		  <th>Parent Name </th>
		  <th>Image</th>
		  <th>Status</th>
		  <th>Action</th>
	  
		</tr>
	
		<tr>
		 
		  </tr>
		 
	
	  </table>


    
@endsection