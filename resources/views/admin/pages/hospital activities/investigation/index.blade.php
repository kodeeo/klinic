@extends('admin.master')
@section('content')
    <h1>{{__('Investigation Report')}}</h1>
    <hr>
        <a class="btn btn-success" href="{{route('investigations.create')}}">Create Investigation Report</a>
       <div><br>
        <table class="table" id="dataTable" style="text-align: center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Picture</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Doctors Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($investigations as $key=>$item)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td><img src="{{url('/uploads/investigations/'.$item->investigation_img)}}" style="border-radius:4px" width="100px" alt="Investigation image"></td>
                      <td>{{$item->unique_patient_id}}</td>
                      <td>{{$item->date}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{$item->doctors->first_name}} {{$item->doctors->last_name}}</td>
                      <td>
                        <div style="display: flex ">
                        <a style="margin-left: 10px" class="btn btn-success btn-sm" href="{{route('investigations.show', $item->id)}}"><i class="fas fa-eye"></i></a> 
                        <a style="margin-left: 3px" class="btn btn-warning btn-sm m" href="{{route('investigations.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                        <form style="margin-left: 5px" action="{{route('investigations.destroy',$item->id)}}" method="POST">
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