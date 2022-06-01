@extends('admin.master')
@section('content')
<h1>{{__('Patient List')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
  <div class="col">
    <a href="{{route('patient.add')}}"  class="btn btn-primary">Add Patient</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('patient.data.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('patient.data.excel')}}">
        Excel
      </a>
      <a class="btn btn-info" href="{{route('patient.data.pdf')}}">
        PDF
      </a>
      <a class="btn btn-info" href="{{route('patient.data.print')}}">
        Print    
      </a>
  </div>
</div>
<br><br>
<div> 
  <table class="table" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Case Number</th>
      <th scope="col">Name</th>
      <th scope="col">Patient_Type</th>
      <th scope="col">Phone</th>
      <th scope="col">BloodGroup</th>
      <th scope="col">Address </th>
      <th scope="col">Added At </th>
      <th scope="col">Image</th>
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
  {{$patients->links()}}
</div> 

@endsection

