@extends('admin.master')
@section('content')

<style>
    .required {
        color: red;
    }

</style>
<h1>Edit Test</h1>
<hr>

<form action="{{ route('tests.update',$test->id) }}" method="POST"
    enctype="multipart/form-data">
    @method('put')
    @csrf



    <div class="form-group col-6">
        <label for="name">Test Name</label>
        <span class="required">*</span>
        <input type="text" class="form-control" value="{{ $test->name }}" name="name" placeholder="Enter Test Name"
            required><br>
    </div>

    <div class="form-group col-6">
        <label for="name">Test Price</label>
        <span class="required">*</span>
        <input type="number" class="form-control" value="{{ $test->price }}" name="price"
            placeholder="Enter Test Price" required><br>
    </div>

    <div class="form-group col-6">
        <label for="name">Test Procedure</label>
        <input type="text" class="form-control" value="{{ $test->procedure }}" name="procedure"
            placeholder="Enter Test Procedure"><br>
    </div>

    <div class="form-group col-6">
        <label for="name">Test Description</label>
        <input type="text" class="form-control" value="{{ $test->description }}" name="description"
            placeholder="Enter Test Description"><br>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Testing image</label>
        <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
