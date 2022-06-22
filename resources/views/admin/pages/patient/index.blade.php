@extends('admin.master')
@section('content')
<h1>{{__('Patient List')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a href="{{route('patients.create')}}" class="btn btn-primary">Add Patient</a>
    </div>
    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info" href="{{route('patient.data.csv')}}">
            CSV
        </a>
        <a class="btn btn-info" href="{{route('patient.data.excel')}}">
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
                <th scope="col">SL.NO</th>
                <th scope="col">Image</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Created At </th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($patients as $key=>$patient)
                <th scope="row">{{$key+1}}</th>
                <td><img src="{{$patient->patient_image}}" style="border-radius:4px" width="50px" alt="patient image">
                </td>
                <td>{{$patient->patient_id}}</td>
                <td>{{$patient->first_name. ' '.$patient->last_name}}</td>
                <td>{{$patient->mobile}}</td>
                <td>{{$patient->created_at}}</td>
                <td>
                    <div style="display:flex">
                        <a class="btn btn-info btn-sm m-1"
                            href="{{route('admissions.create',['patient_id'=>$patient->patient_id])}}"><i
                                class="fa fa-plus"></i></a>
                        <a class="btn btn-success btn-sm m-1" href="{{route('patients.show',$patient->id)}}"><i
                                class="fa fa-eye"></i></a>
                        <a class="btn btn-warning btn-sm m-1" href="{{route('patients.edit',$patient->id)}}"><i
                                class="fa fa-pen"></i></a>
                        <form style="margin-left: 3px" action="{{route('patients.destroy',$patient->id)}}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <div>
                                <button class="btn btn-danger m-1" type="submit"><i class="fas fa-trash"></i></button>
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
