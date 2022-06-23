@extends('admin.master')
@section('content')

    <h1>{{__('Create Birth Report')}} </h1>
    <form action="{{route('birth_report.store')}}" method="POST">
        @csrf
<div class="form-group col-6">
    <label for="name">Patient ID<span style="color:red">*</span></label>
    <input type="text" class="form-control"  name="patient_id" placeholder="Patient ID" required>
    </div>

    <div class="form-group col-6">
    <label for="date">Date<span style="color:red">*</span></label>
    <input type="date" class="form-control datepicker hasDatePicker"  name="date" placeholder="Date" value="2022-06-01" required>
    </div>

    <div class="form-group col-6">
    <label for="name">Title<span style="color:red">*</span></label>
    <input type="text" class="form-control"  name="title" placeholder="Title" required>
    </div>

    <div class="form-group col-6">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" rows="7"></textarea>
    </div>

    <div class="form-group col-6">
    <label for="name">Doctor Name</label>
    <select class="form-select" name="doctor_name" aria-label="Default select example" required>
        @foreach ($doctor as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
      </select>
    </div><br>
    
    <div class="form-group row">
        <label class="col-xs-3">Status</label>
        <div class="col-xs-9"> 
            <div class="form-check">
                <label class="radio-inline"><input type="radio" name="status" value="1" checked="">Active</label>
                <label class="radio-inline"><input type="radio" name="status" value="0">Inactive</label>
            </div>
        </div>
    </div><br>
<button type="submit" class="btn btn-primary">Submit</button>

@endsection