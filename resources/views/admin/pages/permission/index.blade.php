@extends('admin.master')
@section('content')
<h1>Permission List</h1>
<hr>
<div class="row" style="justify-content: space-between;">
	<div class="col">
		<a href="{{route('permission.create')}}" class="btn btn-primary" type="button">Add New Permission</a>
	</div>
</div>
<br><br>
<div> 
	<table class="table" id="dataTable" style="text-align: center;">
	  <thead class="thead-dark">
		<tr>
		  <th>SL No</th>
		  <th>Name</th>
		  <th>Slug</th>
		  <th>Status</th>
		  <th>Action</th>
	  
		</tr>
	  </thead>
	
        <tbody> 
			<tr>
            @foreach($permissions as $key=>$permission)
				<td>{{$key+1}}</td>
				<td>{{$permission->name}}</td>
				<td>{{$permission->slug}}</td>
				<td>{{$permission->status}}</td>              
				<td style="display: flex; justify-content: center;">
					<a class="btn btn-sm btn-success"  href="{{route('permission.show',$permission->id)}}"><i class="fas fa-eye"></i>View</a>
					<a style="margin-left: 3px" class="btn btn-sm btn-warning"  href="{{route('permission.edit',$permission->id)}}"><i class="fas fa-edit"></i>Edit</a>
					<a style="margin-left: 3px" class="btn btn-sm btn-danger"  href="{{route('permission.destroy',$permission->id)}}"><i class="fas fa-trash"></i>Delete</a>
				</td> 
            </tr>
            @endforeach
          </tbody>
		 
	
	  </table>
</div>
    
@endsection