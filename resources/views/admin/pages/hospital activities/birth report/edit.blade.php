@extends('admin.master')
@section('content')
    <h1>{{ __('Edit Birth Report Here') }}</h1>
    <form action="{{ route('birth_report.update', $birthReport->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group col-6 mt-2">
            <label for="name">Patient ID<i class="text-danger">*</i></label>
            <input type="text" class="form-control" name="patient_id" value="{{ $birthReport->patient_id }}"
                placeholder="Patient ID">
            <div class="alert-danger">
                {{ $errors->first('patient_id') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="date">Date<i class="text-danger">*</i></label>
            <input type="date" class="form-control datepicker hasDatePicker" name="date"
                value="{{ $birthReport->date }}" placeholder="Date" value="2022-06-01" required>
            <div class="alert-danger">
                {{ $errors->first('date') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="name">Title<i class="text-danger">*</i></label>
            <input type="text" class="form-control" name="title" value="{{ $birthReport->title }}" placeholder="Title"
                required>
            <div class="alert-danger">
                {{ $errors->first('title') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="description">Description</label>
            {{-- @dd($birthReport->description) --}}
            {{-- <textarea name="description" id="summernote" value="{{$birthReport->description}}" class="form-control" id="description" rows="7">{{$birthReport->description}}</textarea> --}}
            <textarea name="description" value="{{ $birthReport->description }}" class="form-control" id="description"
                rows="7">{{ $birthReport->description }}</textarea>
            <div class="alert-danger">
                {{ $errors->first('description') }}
            </div>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="name">Doctor Name</label>
            <select class="form-select" name="doctor_id" aria-label="Default select example">
                @foreach ($doctor as $item)
                    <option value={{ $item->id }} {{ $item->id == $birthReport->doctor_id ? 'selected' : '' }}>
                        {{ $item->fullname }}</option>
                @endforeach
            </select>
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
