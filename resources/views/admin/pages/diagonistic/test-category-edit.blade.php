@extends('admin.master')
@section('content')
    

<h1>Edit Test Category</h1>

<form action="{{route('test.category.update',$test_category->id)}}" method="post" enctype="multipart/form-data">
@method('put')    
@csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Test Category</label>
            <input type="text" value="{{$test_category->name}}" class="form-control" id="name" name="name" placeholder="Enter Category Name" required>
          </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @endsection