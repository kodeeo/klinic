@extends('admin.master')
@section('content')
    
<h1>{{__('Prescription List')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
 

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="#">
        CSV
      </a>
      <a class="btn btn-info" href="#">
        Excel
      </a>
      <a class="btn btn-info" href="#">
        PDF
      </a>
      <button class="btn btn-info" onclick="{window.print()}">Print</button>

  </div>
</div>
<br><br>
<div style="overflow-x:auto">
            <table class="table" id="dataTable" style="text-align: center;">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Patient Id</th>
                    <th scope="col">Appointment Id</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Blood Pressure</th>
                    <th scope="col">Reference</th>
                    <th scope="col">Insurance</th>
                    <th scope="col">Medicine Name</th>
                    <th scope="col">Medicine Instruction</th>
                    <th scope="col">Days</th>
                    <th scope="col">Fees</th>    
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($prescriptions as $key=>$value) 
               

                  <tr>
                    
                    
                    <th>{{$key+1}}</th>
                    <td>{{$value->patient_id}}</td>
                    <td>{{$value->appointment_id}}</td>
                    <td>{{$value->doctor_id}}</td>
                    <td>{{$value->weight}}</td>
                    <td>{{$value->blood_pressure}}</td>
                    <td>{{$value->reference}}</td>
                    <td>{{$value->insurance}}</td>
                    <td>{{$value->medicine_id}}</td>
                    <td>{{$value->medicine_type}}</td>
                    <td>{{$value->medicine_instruction}}</td>
                    <td>{{$value->days}}</td>
                    <td>{{$value->fees}}</td>
                    
                    
                    <td>
                      <div style="display: flex">
                        <a class="btn btn-success btn-sm" href="#"><i class="fas fa-eye"></i></a> 
                        <a style="margin-left: 3px" class="btn btn-warning btn-sm" href="#"><i class="fas fa-edit"></i></a>
                        <form style="margin-left: 3px" action="#" method="POST">
                        @csrf
                        @method('DELETE')
                        <div>
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
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