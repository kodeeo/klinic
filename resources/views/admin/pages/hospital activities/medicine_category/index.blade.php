@extends('admin.master')
@section('content')
    <h1>Medicine Categories</h1>
        <a class="btn btn-success" href="{{route('medicine_category.create')}}">Add Medicine Category</a>
       <div><br>
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
                        <div style="display: flex ">
                        <a style="margin-left: 10px" class="btn btn-success btn-sm" href="{{route('medicine_category.show', $item->id)}}"><i class="fas fa-eye"></i></a> 
                        <a style="margin-left: 3px" class="btn btn-warning btn-sm m" href="{{route('medicine_category.edit', $item->id)}}"><i class="fas fa-edit"></i></a>
                        <form style="margin-left: 5px" action="{{route('medicine_category.destroy',$item->id)}}" method="POST">
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