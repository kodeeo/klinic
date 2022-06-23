@extends('admin.master')
@section('content')
<style>
    .required {
        color: red;
    }

</style>

<h1>{{ __('Add New Test') }}</h1>
<hr>

<form action="{{ route('tests.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="form-group col-6">
        <label for="name">Test Name</label>
        <span class="required">*</span>
        <input type="text" class="form-control" name="name" placeholder="Enter Test Name" required>
    </div>

    <div class="form-group col-6">
        <label for="name">Test Price</label>
        <span class="required">*</span>
        <input type="number" class="form-control" name="price" placeholder="Enter Test Price" required>
    </div>

    <div class="form-group col-6">
        <label for="name">Test Procedure</label>
        <input type="text" class="form-control" name="procedure" placeholder="Enter Test Procedure" required>
    </div>

    <div class="form-group col-6">
        <label for="name">Test Description</label>
        <input type="text" class="form-control" name="description" placeholder="Enter Test Description">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Testing image</label>
        <input name="image" placeholder="Enter picture" type="file" class="form-control" id="">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
