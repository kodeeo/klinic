@extends('admin.master')
@section('content')
    <h1>Medicines</h1>
        <a class="btn btn-success" href="{{route('medicine.create')}}">Add Medicine</a>
       <div><br>
        <table class="table" id="dataTable" style="text-align: center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Medicine Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Manufactured By</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($medicine as $key=>$item)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$item->name}}</td>
                      <td>{{$item->category->name}}</td>
                      <td>{{$item->description}}</td>
                      <td>{{$item->price}}</td>
                      <td>{{$item->manufactured_by}}</td>
                      <td>
                        <div style="display: flex ">
                        <a style="margin-left: 10px" class="btn btn-success btn-sm" href="{{route('medicine.show', $item->id)}}"><i class="fas fa-eye"></i></a> 
                        <a style="margin-left: 3px" class="btn btn-warning btn-sm m" href="{{route('medicine.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                        <form style="margin-left: 5px" action="{{route('medicine.destroy',$item->id)}}" method="POST">
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