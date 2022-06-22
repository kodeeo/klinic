@extends('admin.master')
@section('content')
<h1>{{ __('Assigned Test List') }}</h1>
<hr>

<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a href="{{ route('assign.test.create') }}" class="btn btn-primary">Assign Test</a>
    </div>

    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info" href="{{ route('test.data.csv') }}">
            CSV
        </a>
        <a class="btn btn-info" href="{{ route('test.data.excel') }}">
            Excel
        </a>
        <a class="btn btn-info" href="#">
            PDF
        </a>
        <button class="btn btn-info" onclick="{window.print()}">Print</button>
    </div>
</div>


<br><br>
<div>
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Test</th>
                <th scope="col">Price</th>
                <th scope="col">Assigned By</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($assigntests as $key=>$test)

                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $test->patient_id }}</td>
                    <td>{{ $test->tests->name }}</td>
                    <td>{{ $test->tests->price }}</td>
                    <td>{{ $test->assigned_by }}</td>
                    <td><img src="{{ url('/uploads/'.$test->image) }}"
                            style="border-radius:4px" width="40px" alt="test image"></td>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
