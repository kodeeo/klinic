@extends('admin.master')
@section('content')

<h1>{{__('Admitted Patients List')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a class="btn btn-success mt-2" href="{{route('admissions.create')}}">Admit Patient</a>
        
    </div>
    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info" href="{{ route('admission.data.csv') }}">
            CSV
        </a>
        <a class="btn btn-info" href="{{ route('admission.data.excel') }}">
            Excel
        </a>
        <a class="btn btn-info" href="{{ route('admission.data.pdf') }}">
            PDF
        </a>
        <button class="btn btn-info" onclick="{window.print()}">Print</button>

    </div>
</div>
<br><br>
<div>

<div style="overflow-x: auto">
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">SL.No</th>
                <th scope="col">AID</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Admission Date</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Package</th>
                <th scope="col">Insurance</th>
                <th scope="col">Status</th>
                <th scope="col">Case study</th>
                <th scope="col">Payment</th>
                <th scope="col">Action</th>
               
                
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($admissions as $key=>$item)
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->admission_id}}</td>
                <td>{{$item->patient_id}}</td>
                <td>{{$item->admission_date}}</td>
                
                <td>{{$item->doctor->full_name}}</td>
                
                <td>{{$item->package->name ?? 'N/A'}}</td>
               
                <td>{{$item->insurance_id ?? 'N/A'}}</td>
                
                
                <td>{{$item->status}}</td>
                <td>
                <a class="btn btn-success btn-sm m-1" href="{{route('admissions.show',$item->id)}}"><i class="fa fa-eye"></i></a>
                </td>
               
                <td>
                    <div style="display: flex">
                        <a class="btn btn-info m-1" href="{{route('advancepayment.create',['admission_id'=>$item->admission_id ,'patient_id'=>$item->patient_id])}}"><b>Advance</b></a>
                        <a class="btn btn-success m-1" href="{{route('bill.create',['admission_id'=>$item->admission_id])}}"><b>Discharge</b></a>
                    </div>
                </td>

                <td>
                    <div style="display:flex">
                        
                        <a class="btn btn-warning btn-sm m-1" href="{{route('admissions.edit',$item->id)}}"><i class="fa fa-pen"></i></a>
                        <form style="margin-left: 3px" action="{{route('admissions.destroy',$item->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <div>
                              <button class="btn btn-danger m-1" type="submit"><i class="fas fa-trash"></i></button>
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
