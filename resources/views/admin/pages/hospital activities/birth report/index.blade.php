@extends('admin.master')
@section('content')
    <h1>Birth Report</h1>
        <a class="btn btn-success" href="{{route('birth_report.create')}}">Create Birth Report</a>
       <div>
        <table class="table" style="text-align: center">
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
              @foreach ($birthReport as $key=>$item)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->patient_id}}</td>
                      <td>{{$item->date}}</td>
                      <td>{{$item->title}}</td>
                      <td>{{optional($item->doctor)->name}}</td>
                      <td>
                        <a class="btn btn-success btn-sm" href="{{route('birth_report.show', $item->id)}}"><i class="fas fa-eye"></i></a> 
                        <a class="btn btn-warning btn-sm" href="{{route('birth_report.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                        <form action="{{route('birth_report.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                           
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                          
                        </form>
                      </td>
                      
                  </tr>
              @endforeach
            </tbody>
          </table>
       </div>
@endsection