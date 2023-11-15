@extends('admin.master')
@section('content')
    <h1>
        {{ __('Schedule List') }}</h1>
    <hr>

    <div class="row" style="justify-content: space-between;">
        <div class="col">
            <a href="{{ route('schedule.create') }}" class="btn btn-primary">Add Schedule</a>
        </div>
        <div class="col-4 dt-buttons btn-group">
            <a class="btn btn-info" href="{{ route('schedule.csv.export') }}">
                CSV
            </a>
            <a class="btn btn-info" href="{{ route('schedule.excel.export') }}">
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
                    <th scope="col">Doctor's Name</th>
                    <th scope="col">Available Days</th>
                    <th scope="col">From Time</th>
                    <th scope="col">To Time</th>
                    <th scope="col">Patient Time</th>
                    <th scope="col">Serial Visibility</th>
                    <th scope="col">Status</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedule as $key => $value)
                    <tr>

                        <th>{{ $key + 1 }}</th>
                        <td>{{ $value->doctor->fullname }}</td>
                        <td>
                            @foreach ($value->days as $data)
                                <p>{{ $data }}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($value->fromtime as $data)
                                <p>{{ $data }}</p>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($value->totime as $data)
                                <p>{{ $data }}</p>
                            @endforeach
                        </td>
                        <td>{{ $value->patient_time }}</td>
                        <td>{{ $value->serial }}</td>
                        <td>{{ $value->status }}</td>
                        <td class="col-2">
                            <div class="btn-group">
                                <form action="{{ route('schedule.status.update',$value->id) }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div style="display: flex; align-items: center;">
                                        <div style="padding-right: 10px;">
                                            <select name="status" class="form-select" aria-label="Default select example">
                                                <option @if ($value->status == 'active') selected @endif value="active">
                                                    Active
                                                </option>
                                                <option @if ($value->status == 'inactive') selected @endif value="inactive">
                                                    Inactive</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button type="submit"><i class="fa-solid fa-circle-check"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </td>


                        <td style="display: flex;">
                            <a style="margin-right:2px" class="btn btn-success btn-sm"
                                href="{{ route('schedule.show', $value->id) }}"><i class="fas fa-eye"></i></a>
                            <a style="margin-right:2px" class="btn btn-warning btn-sm"
                                href="{{ route('schedule.edit', $value->id) }}"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('schedule.destroy', $value->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>

                                </div>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
