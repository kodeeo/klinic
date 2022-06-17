@extends('admin.master')
@section('content')


<h1>{{__('Assign Test')}}</h1>

<form action="{{route('assign.test.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="form-group col-6">
        <label for="unique_patient_id">Patient ID</label>
        <input type="text" class="form-control" name="unique_patient_id" placeholder="Enter Test Name" required>
    </div>

    <div class="form-group col-6">
        <label for="test_id">Test Name</label>
        <select class="form-select" name="test_id" aria-label="Default select example">
            <option>Select Test</option>

            @foreach ($tests as $item)

            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select> 
    </div>

    <div class="form-group col-12 mt-2">
        <label for="note">Note</label>
        <textarea type="text" class="form-control" name="note" placeholder="Enter Note" required></textarea>
    </div>
</div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
