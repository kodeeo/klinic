@extends('admin.master')
@section('content')
<h1>Service List</h1>
<hr>
<a href="{{route('admin.service.form')}}"><button class="btn btn-primary">Add Service</button></a>
<br><br>
<div> 
  <table class="table" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($services as $key=>$service) 
                <tr>
                  <th>{{$key+1}}</th>
                  <td>{{$service->name}}</td>
                  <td>{{$service->description}}</td>
                  <td>
                      <div class="btn-group">
                        <form action="{{ route('admin.service.status.update',$service->id) }}" method="POST">
                          @method('put')
                          @csrf
                          <div style="display: flex; align-items: center;">
                          <div style="padding-right: 10px;">
                        <select name="status" class="form-select" aria-label="Default select example">
                          <option @if($service->status == 'Active') selected @endif value="Active">Active</option>
                          <option @if($service->status == 'Inactive') selected @endif value="Inactive">Inactive</option>
                        </select>
                          </div>
                          <div>
                        <button type="submit"><i class="fa-solid fa-circle-check"></i></button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </td>
                  <td>
                    <a class="btn btn-success btn-sm" href="{{ route('admin.service.details',$service->id) }}"><i class="fas fa-eye"></i></a>  
                    <a class="btn btn-warning btn-sm" href="{{ route('admin.service.edit',$service->id) }}"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="{{ route('admin.service.delete',$service->id) }}"><i class="fas fa-trash"></i></a>
                  </td>  
                </tr> 
        @endforeach
      </tbody>
  </table>
</div> 

@endsection