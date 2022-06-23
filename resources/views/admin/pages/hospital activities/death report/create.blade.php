@extends('admin.master')
@section('content')
<h1>Create Death Report </h1>
<form action="{{route('death_report.store')}}" method="POST">
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

<button type="submit" class="btn btn-primary">Submit</button>
@endsection