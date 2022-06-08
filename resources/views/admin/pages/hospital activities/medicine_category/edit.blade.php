@extends('admin.master')
@section('content')
<h1>{{__('Update Medicine Category')}}</h1>
<form action="{{route('medicine_category.update', $medicine_category->id)}}" method="POST">
    @csrf
    @method('PUT')
<div class="form-group col-6">
<label for="name">Name<i class="text-danger">*</i></label>
<input type="text" class="form-control"  name="name" value="{{$medicine_category->name}}" placeholder="Cateogry Name"  >
</div>

<div class="form-group col-6">
<label for="description">Description</label>
<textarea name="description" id="summernote" value="{{$medicine_category->description}}" class="form-control" id="description" rows="7">{{$medicine_category->description}}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection