@extends('admin.master')
@section('content')

<h1>{{ __('Bed Manager') }}</h1>
<hr>

<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a class="btn btn-primary d-print-none" href="{{ route('beds.create') }}"
            class="btn btn-primary">Add Bed</a>
    </div>

    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info d-print-none" href="#">
            CSV
        </a>
        <a class="btn btn-info d-print-none" href="#">
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
                <th scope="col">Bed Type</th>
                <th scope="col">Capacity</th>
                <th scope="col">Charge</th>
                <th scope="col">Status</th>
                <th class="d-print-none" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beds as $key=>$bed)

                <tr>

                    <th>{{ $key+1 }}</th>
                    <td>{{ $bed->type }}</td>
                    <td>{{ $bed->capacity }}</td>
                    <td>{{ $bed->charge }}</td>
                    <td>{{ $bed->status }}</td>

                    <td>
                        <div style="display: flex; justify-content: center">
                            <a class="btn btn-success btn-sm m-1"
                                href="{{ route('beds.show',$bed->id) }}"><i class="fas fa-eye"></i></a>
                            <a style="margin-left: 2px" class="btn btn-warning btn-sm m-1"
                                href="{{ route('beds.edit',$bed->id) }}"><i class="fas fa-edit"></i></a>
                            <form
                                action="{{ route('beds.destroy',$bed->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button class="btn btn-danger btn-sm m-1" type="submit"><i class="fas fa-trash"></i></button>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

</div>
@endsection
