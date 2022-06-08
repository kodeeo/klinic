@extends('admin.master')
@section('content')
<h1>{{__('Opeation Report')}}</h1>
<a class="btn btn-success" href="{{route('operational_activities.create')}}">Create Operation Report</a>
<div><br>

<div class="row" style="justify-content: space-between;">
  <div class="col">
  <a class="btn btn-success" href="{{route('operational_activities.create')}}">Create Operation Report</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('operational.report.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('operational.report.excel')}}">
        Excel
      </a>
      <a class="btn btn-info" href="">
        PDF
      </a>
      <a class="btn btn-info" href="">
        Print    
      </a>
  </div>
</div>
<br><br>
<div>


<table class="table" id="dataTable" style="text-align: center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Patient ID</th>
        <th scope="col">Date</th>
        <th scope="col">Title</th>
        <th scope="col">Doctors Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($operationReport as $key=>$item)
          <tr>
              <th scope="row">{{$key+1}}</th>
              <td>{{$item->patient_id}}</td>
              <td>{{$item->date}}</td>
              <td>{{$item->title}}</td>
              <td>{{optional($item->doctor)->name}}</td>
              <td>
                <div style="display: flex ">
                <a style="margin-left: 10px" class="btn btn-success btn-sm" href="{{route('operational_activities.show', $item->id)}}"><i class="fas fa-eye"></i></a> 
                <a style="margin-left: 3px" class="btn btn-warning btn-sm m" href="{{route('operational_activities.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                <form style="margin-left: 5px" action="{{route('operational_activities.destroy',$item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                </form>
                </div>
              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection







