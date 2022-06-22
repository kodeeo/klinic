@extends('admin.master')
@section('content')
<h1>{{ __('Test List') }}</h1>
<hr>

<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a class="btn btn-primary d-print-none" href="{{ route('tests.create') }}"
            class="btn btn-primary">Create Test</a>
    </div>

    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info d-print-none" href="{{ route('test.data.csv') }}">
            CSV
        </a>
        <a class="btn btn-info d-print-none" href="{{ route('test.data.excel') }}">
            Excel
        </a>
        <a class="btn btn-info d-print-none" href="#">
            PDF
        </a>
        <button class="btn btn-info d-print-none" onclick="{window.print()}">Print</button>
    </div>
</div>


<br><br>
<div>
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Test</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th class="d-print-none" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($tests as $key=>$test)

                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $test->name }}</td>
                    <td>{{ $test->price }}</td>
                    <td><img src="{{ url('/uploads/'.$test->image) }}"
                            style="border-radius:4px" width="40px" alt="test image"></td>
                    <td>
                        <div style="display: flex; justify-content:center;">
                            <a class="btn btn-warning btn-sm "
                                href="{{ route('tests.edit',$test->id) }}"><i
                                    class="fas fa-edit"></i></a>
                            <form style="margin-left: 3px"
                                action="{{ route('tests.destroy',$test->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                </div>
                            </form>
                        </div>
                    </td>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
