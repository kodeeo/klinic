@extends('admin.master')
@section('content')
<h1>{{__('Test Category List')}}</h1>
<hr>
<a href="{{route('test.category.add')}}"><button class="btn btn-primary">Create Test Category</button></a>
<br><br>
<div> 
  <table class="table" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Test Category Name</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach($test_categories as $key=>$test_category)
        
        <th scope="row">{{$key+1}}</th>
        <td>{{$test_category->name ?? ""}}</td>
        <td>
          
          <a class="btn btn-warning btn-sm" href="{{route('test.category.edit',$test_category->id)}}"><i class="fas fa-edit"></i></a>
          <a class="btn btn-danger btn-sm" href="{{route('test.category.delete',$test_category->id)}}"><i class="fas fa-trash"></i></a>
      </td>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
{{$test_categories->links()}}
</div> 

@endsection