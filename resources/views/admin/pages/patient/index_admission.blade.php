@extends('admin.master')
@section('content')

<h1>Admitted Patients List</h1>

<br><br>

<div> 
  <table class="table" id="dataTable" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Case No</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Room Number</th>
      <th scope="col">Admitted by</th>
      <th scope="col">Relation </th>
      {{-- <th scope="col">Added At </th> --}}
      <th scope="col">Action</th> 


      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach($patients as $key=>$patient)
          {{-- @dd($causelist) --}}
        <th scope="row">{{$key+1}}</th>
        <td>{{$patient->case_no}}</td>
        <td>{{$patient->name}}</td>
        <td>{{$patient->ptype}}</td>
        <td>{{$patient->phone}}</td>
        <td>{{$patient->blood}}</td>
        <td>{{$patient->address}}</td>
       <td>{{$patient->created_at}}</td> 
        <td><img src="{{url('/uploads/patients/'.$patient->patient_image)}}" style="border-radius:4px" width="100px" alt="patient image"></td>
      {{-- <td>{{$causes->created_at->diffforhumans()}}</td> --}}
        <td>
          <a class="btn btn-success btn-sm" href="{{route('patient_admisssion.add',$patient->id)}}">Admission</a>
          {{-- <a class="btn btn-warning btn-sm" href="{{route('edit.cause',$causes->id)}}"><i class="fas fa-edit"></i></a>
          <a class="btn btn-danger btn-sm" href="{{route('delete.cause',$causes->id)}}"><i class="fas fa-trash"></i></a> --}}
      </td>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div> 

@endsection

