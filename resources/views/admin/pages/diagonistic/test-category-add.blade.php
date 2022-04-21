@extends('admin.master')
@section('content')
    

<h1>Add New Test Category</h1>

<form action="{{route('test.category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col-6">
            <label for="name">Test Category</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name" required>
          </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection