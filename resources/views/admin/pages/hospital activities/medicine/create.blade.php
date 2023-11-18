@extends('admin.master')
@section('content')

    <h1>{{__('Add Medicine')}}</h1>
    <form action="{{route('medicine.store')}}" method="POST">
        @csrf
    <div class="form-group col-6">
    <label for="name">Name<span style="color:red">*</span></label>
    <input type="text" class="form-control"  name="name" placeholder="Medicine Name" required>
    </div>


     <div class="form-group col-6">
    <label for="Price">Price<span style="color:red">*</span></label>
    <input type="number" class="form-control"  name="price" placeholder="Price" required>
    </div>

     <div class="form-group col-6">
    <label for="manufactured_by">Manufactured By<span style="color:red">*</span></label>
    <input type="text" class="form-control"  name="manufactured_by" placeholder="Manufacture Name" required>
    </div>

    <div class="form-group col-6 mb-2">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" rows="7"></textarea>
    </div>

<button type="submit" class="btn btn-primary">Submit</button>

@endsection