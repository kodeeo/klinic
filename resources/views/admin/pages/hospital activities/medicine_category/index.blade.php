@extends('admin.master')
@section('content')
    <h1>{{__('Medicine Categories')}}</h1>
        <a class="btn btn-success" href="{{route('medicine_category.create')}}">Add Medicine Category</a>
       <div><br>


        <div class="row" style="justify-content: space-between;">
  <div class="col">
  <a class="btn btn-success" href="{{route('medicine_category.create')}}">Add Medicine Category</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('medicine_category.report.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('medicine_category.report.excel')}}">
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
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($medicine_category as $key=>$item)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->name}}</td>
                      <td>{{$item->description}}</td>
                      <td>
                        <div style="display: flex; justify-content: center">
                        <a  class="btn btn-success btn-sm m-1" href="{{route('medicine_category.show', $item->id)}}"><i class="fas fa-eye"></i></a>
                        <a  class="btn btn-warning btn-sm m-1" href="{{route('medicine_category.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                        <form  action="{{route('medicine_category.destroy',$item->id)}}" method="POST">
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
