@extends('admin.master')
@section('content')
 <h1>Permission List</h1>

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

		<a href="{{route('permission.create')}}" class="btn btn-primary" type="button">Create New Permission</a>

	  </div>
	 
	  <table id="customers">
		<tr>
		  <th>SL No</th>
		  <th>Name</th>
		  <th>Slug</th>
		  <th>Status</th>
		  <th>Action</th>
	  
		</tr>
	
        <tbody> 
            @foreach($permissions as $key=>$permission)
            <tr style="    text-align: center;">
          
              <td>{{$key+1}}</td>
              <td>{{$permission->name}}</td>
              <td>{{$permission->slug}}</td>
              <td>{{$permission->status}}</td>              
             <td>
              <div style="display: flex;">
               <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(228, 11, 11)" href="{{route('permission.destroy',$permission->id)}}">Delete</a></div>
              <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="{{route('permission.show',$permission->id)}}">view</a></div>
              <div style="padding-right: 10px;"><a class="btn btn-light" style="color: rgb(32, 77, 51)" href="{{route('permission.edit',$permission->id)}}">Edit</a></div>
             </div>
            </td> 
            </tr>
            @endforeach
          </tbody>
		 
	
	  </table>
{{$permissions->links()}}

    
@endsection