@extends('admin.master')
@section('content')
    <h1>{{__('Birth Report')}}</h1>
    <hr>



       <div class="row" style="justify-content: space-between;">
  <div class="col">
  <a class="d-print-none btn btn-success" href="{{route('birth_report.create')}}">Create Birth Report</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="d-print-none btn btn-info" href="{{route('birth.report.csv')}}">
        CSV
      </a>
      <a class="d-print-none btn btn-info" href="{{route('birth.report.excel')}}">
        Excel
      </a>
      <a class="d-print-none btn btn-info" href="">
        PDF
      </a>
      <a onclick="{window.print()}" class="d-print-none btn btn-info" href="">
        Print
      </a>
  </div>
</div>
<br><br>
<div>

       <br>
        <table class="table" id="dataTable" style="text-align: center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Date</th>
                <th scope="col">Doctor's Name</th>
                <th class="d-print-none" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($birthReport as $key=>$item)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->patient_id}}</td>
                      <td>{{$item->date}}</td>
                      <td>{{$item->doctors->first_name. '' .$item->doctors->last_name}}</td>
                      <td class="d-print-none">
                        <div style="display: flex; justify-content: center">
                        <a class="btn btn-success btn-sm m-1" href="{{route('birth_report.show', $item->id)}}"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-warning btn-sm m-1" href="{{route('birth_report.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                        <form  action="{{route('birth_report.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger btn-sm m-1" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                      </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
       </div>
@endsection
