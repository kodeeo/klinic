@extends('admin.master')
@section('content')
<h1>{{ __('Appointment') }}</h1>
<hr>
<a href="{{ route('appointment.create') }}"><button class="btn btn-primary">Add
        Appointment</button></a>
<br><br>
<div>
    <table class="table" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Appointment ID</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Department</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Serial No</th>
                <th scope="col">Problem</th>
                <th scope="col">Appointment Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($appointments as $key=>$appointment)

                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $appointment->unique_appointment_id }}</td>
                    <td>{{ $appointment->unique_patient_id }}</td>
                    <td>{{ $appointment->departments->name }}</td>
                    <td>{{ $appointment->doctors->first_name }} {{ $appointment->doctors->last_name }}</td>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->problem }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->status }}</td>

                    <td style="display:flex">
                        <a class="btn btn-warning btn-sm"
                            href="{{ route('appointment.edit',$appointment->id) }}"><i
                                class="fas fa-edit"></i></a>
                        &nbsp;
                        <form action="{{ route('appointment.destroy', $appointment->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
