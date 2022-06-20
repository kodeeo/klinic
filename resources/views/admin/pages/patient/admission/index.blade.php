@extends('admin.master')
@section('content')

<h1>{{__('Admitted Patients List')}}</h1>

<a class="btn btn-success mt-2" href="{{route('admissions.create')}}">Admit Patient</a>

<br><br>

<div style="overflow-x: auto">
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">SL.No</th>
                <th scope="col">AID</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Admission Date</th>
                <th scope="col">Discharge Date</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Package Name</th>
                <th scope="col">Insurance Name</th>
                <th scope="col">Guardian Name</th>
                <th scope="col">Guardian Relation </th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($admissions as $key=>$item)
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->unique_admission_id}}</td>
                <td>{{$item->unique_patient_id}}</td>
                <td>{{$item->admission_date}}</td>
                <td>{{$item->discharge_date}}</td>
                <td>{{$item->doctors->first_name}} {{$item->doctors->last_name}}</td>
                <td>{{$item->package}}</td>
                <td>{{$item->insurance}}</td>
                <td>{{$item->guardian_name}}</td>
                <td>{{$item->guardian_relation}}</td>
                <td>{{$item->status}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
