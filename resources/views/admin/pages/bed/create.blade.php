@extends('admin.master')
@section('content')

<h1>{{ __('Create Bed') }}</h1>
<hr>

{{-- <a href="{{route('create.category') }}" button type="submit" class="btn
btn-primary">Create Category</button> </a> --}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
    <form action="{{ route('beds.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="type">Bed Type</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="type" name="type" placeholder="Enter Bed Type">
            </div>
            <div class="form-group col-6">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    placeholder="Enter Description">
            </div>
            <div class="form-group col-6 mt-2">
                <label for="capacity">Bed capacity</label>
                <span class="text-danger">*</span>
                <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Enter Capacity">
            </div>
            <div class="form-group col-6 mt-2">
                <label for="charge">Charge</label>
                <span class="text-danger">*</span>
                <input type="number" class="form-control" id="charge" name="charge" placeholder="Enter Charge">
            </div>
            <div class="form-group col-12 mt-2">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" placeholder="Enter Status">
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Submit</button>
    </form>
</div>
@endsection
