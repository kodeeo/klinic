@extends('admin.master')
@section('content')
    <h1>{{__('Medicines')}}</h1>
        <hr>


        <div class="row" style="justify-content: space-between;">
  <div class="col">
  <a class="d-print-none btn btn-success" href="{{route('medicine.create')}}">Add Medicine</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="d-print-none btn btn-info" href="{{route('medicine.report.csv')}}">
        CSV
      </a>
      <a class="d-print-none btn btn-info" href="{{route('medicine.report.excel')}}">
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


        <table class="table" id="dataTable" style="text-align: center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Medicine Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Price</th>
                <th scope="col">Manufactured By</th>
                <th class="d-print-none" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($medicine as $key=>$item)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->name}}</td>
                      <td>{{$item->category->name}}</td>
                      <td>{{$item->price}}</td>
                      <td>{{$item->manufactured_by}}</td>
                      <td class="d-print-none">
                        <div style="display: flex; justify-content: center">
                        <a  class="btn btn-success btn-sm m-1" href="{{route('medicine.show', $item->id)}}"><i class="fas fa-eye"></i></a>
                        <a  class="btn btn-warning btn-sm m-1" href="{{route('medicine.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                        <form  action="{{route('medicine.destroy',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger m-1" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                      </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
       </div>
@endsection
