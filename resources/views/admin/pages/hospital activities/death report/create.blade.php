@extends('admin.master')
@section('content')
    <h1>Create Death Report </h1>
    <form action="{{ route('death_report.store') }}" method="POST">
        @csrf
        <div class="form-group col-6 mt-2">
            <label for="name">Patient ID<span style="color:red">*</span></label>
            <input type="text" class="form-control" name="patient_id" placeholder="Patient ID">
            <div class="alert-danger">
                {{ $errors->first('patient_id') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="date">Date<span style="color:red">*</span></label>
            <input type="date" class="form-control datepicker hasDatePicker" name="date" placeholder="Date"
                value="2022-06-01" required>
            <div class="alert-danger">
                {{ $errors->first('date') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="name">Title<span style="color:red">*</span></label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <div class="alert-danger">
                {{ $errors->first('title') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="cause_of_death">Cause Of Death</label>
            <textarea name="cause_of_death" class="form-control" rows="7"></textarea>
            <div class="alert-danger">
                {{ $errors->first('cause_of_death') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="name">Doctor Name</label>
            <select class="form-select" name="doctor_id" aria-label="Default select example">
                @foreach ($doctor as $item)
                    <option value="{{ $item->id }}">{{ $item->fullname }}</option>
                @endforeach
            </select>
            <div class="alert-danger">
                {{ $errors->first('doctor_id') }}
            </div>
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    @endsection
