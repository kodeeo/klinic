@extends('admin.master')
@section('content')
    

<h1>Add New Test</h1>

<form action="{{route('test.update',$test->id)}}" method="POST" enctype="multipart/form-data">
  @method('put')
    @csrf

    <div class="form-group col-6 mt-2">
            <label for="test_category">Test Category</label>
            <select class="form-select" name="test_category_id" aria-label="Default select example">

                @foreach ($test_categories as $test_category)
                <option 
                @if($test_category->id==$test->test_category_id)
                selected
                @endif
                 value="{{$test_category->id}}">{{$test_category->name}}</option>
                @endforeach
              </select>
        </div>

        <div class="form-group col-6">
            <label for="name">Test Name</label>
            <input type="text" class="form-control" value="{{$test->name}}"  name="name" placeholder="Enter Test Name" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Test Price</label>
            <input type="number" class="form-control" value="{{$test->price}}"  name="price" placeholder="Enter Test Price" required>
          </div>

          <div class="form-group col-6">
            <label for="name">Test Procedure</label>
            <input type="text" class="form-control" value="{{$test->procedure}}"  name="procedure" placeholder="Enter Test Procedure">
          </div>

          <div class="form-group col-6">
            <label for="name">Test Description</label>
            <input type="text" class="form-control" value="{{$test->description}}"  name="description" placeholder="Enter Test Description" >
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Testing image</label>
            <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection