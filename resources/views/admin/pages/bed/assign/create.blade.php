@extends('admin.master')
@section('content')

<h1>{{ __('Assign Bed') }}</h1>
<hr>

{{-- <a href="{{route('create.category') }}" button type="submit" class="btn
btn-primary">Create Category</button> </a> --}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
    <form action="{{ route('assign.bed.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="patient_id">Patient ID <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="patient_id" name="patient_id"
                    placeholder="Enter Patient ID">
            </div>
            <div class="form-group col-6">
                <label for="bed_type">Bed Type <span class="text-danger">*</span></label>
                <select class="form-select" name="bed_type_id" aria-label="Select Bed Type">
                    @foreach($bed_types as $item)
                        <option value="{{ $item->id }}">{{ $item->type }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-6 mt-2">
                <label for="assign_date">Assign Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="assign_date" name="assign_date"
                    placeholder="Enter Assign Date">
            </div>
            <div class="form-group col-6 mt-2">
                <label for="discharge_date">Discharge Date <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="discharge_date" name="discharge_date"
                    placeholder="Enter Discharge Date">
            </div>
            <div class="form-group col-12 mt-2">
                <label for="description">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="5"
                    placeholder="Enter Description"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Submit</button>
    </form>
</div>
@endsection
