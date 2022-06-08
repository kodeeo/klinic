@extends('admin.master')
@section('content')
<h1>{{__('Edit Operation Report Here')}}</h1>
<form action="{{route('death_report.update', $operationReport->id)}}" method="POST">
    @csrf
    @method('PUT')
<div class="form-group col-6">
<label for="name">Patient ID<i class="text-danger">*</i></label>
<input type="text" class="form-control"  name="patient_id" value="{{$operationReport->patient_id}}" placeholder="Patient ID"  required>
</div>

<div class="form-group col-6">
<label for="date">Date<i class="text-danger">*</i></label>
<input type="date" class="form-control datepicker hasDatePicker"  name="date" value="{{$operationReport->date}}" placeholder="Date" value="2022-06-01" required>
</div>

<div class="form-group col-6">
<label for="name">Title<i class="text-danger">*</i></label>
<input type="text" class="form-control"  name="title" value="{{$operationReport->title}}" placeholder="Title" required>
</div>

<div class="form-group col-6">
<label for="description">Description</label>
<textarea name="description" id="summernote" value="{{$operationReport->description}}" class="form-control" id="description" rows="7">{{$operationReport->description}}</textarea>
</div>

<div class="form-group col-6">
<label for="name">Doctor Name</label>
<select class="form-select" name="doctor_name" aria-label="Default select example">
@foreach ($doctor as $item)
   <option value={{$item->id}} {{$item->id == $operationReport->doctor_id ? 'selected' : '' }}>{{$item->name}}</option>
   @endforeach
  </select>
 </div><br>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection