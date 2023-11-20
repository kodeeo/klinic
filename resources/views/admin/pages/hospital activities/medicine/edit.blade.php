@extends('admin.master')
@section('content')
<h1>{{__('Update Medicine')}}</h1>
<form action="{{route('medicine.update', $medicine->id)}}" method="POST">
    @csrf
    @method('PUT')
<div class="form-group col-6">
<label for="name">Name<i class="text-danger">*</i></label>
<input type="text" class="form-control"  name="name" value="{{$medicine->name}}" placeholder="Medicine Name"  >
</div>

<div class="form-group col-6">
    <label for="price">Price<i class="text-danger">*</i></label>
    <input type="number" class="form-control"  name="price" value="{{$medicine->price}}" placeholder="Medicine Price"  >
</div>

<div class="form-group col-6">
    <label for="manufactured_by">Manufactured By<i class="text-danger">*</i></label>
    <input type="text" class="form-control"  name="manufactured_by" value="{{$medicine->manufactured_by}}" placeholder="Manufactured By"  >
</div>

<div class="form-group col-6 mb-2">
<label for="description">Description</label>
<textarea name="description"  class="form-control" id="description" rows="7">{{$medicine->description}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection