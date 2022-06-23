@extends('admin.master')
@section('content')

    <h1>{{__('Add Medicine Category')}} </h1>
    <form action="{{route('medicine_category.store')}}" method="POST">
        @csrf
<div class="form-group col-6">
    <label for="name">Name <span style="color:red">*</span></label>
    <input type="text" class="form-control"  name="name" placeholder="Category Name" required>
    </div>

    <div class="form-group col-6">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="summernote" rows="7"></textarea>
    </div>

<button type="submit" class="btn btn-primary">Submit</button>

@endsection