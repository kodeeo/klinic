@extends('admin.master')
@section('content')

<h1>{{__('Departments')}}</h1>
<hr>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
  <form action="{{route('store.department')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
          <div class="form-group col-6">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Department Name">
          </div>
          <div class="form-group col-6">
              <label for="email">Details</label>
              <input type="text" class="form-control" id="details" name="details" placeholder="Enter Department Details">
          </div> 
          <div class="mt-2">
            <label for="department_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="department_image" name="department_image">
        </div>
    </div>   
    <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Save</button>
  </form>
</div>

<div class="row" style="justify-content: right;;">

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('department.data.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('department.data.excel')}}">
        Excel
      </a>
      <a class="btn btn-info" href="{{route('department.data.pdf')}}">
        PDF
      </a>
      <a class="btn btn-info" href="{{route('department.data.print')}}">
        Print    
      </a>
  </div>
</div>

<hr>

<div>
              <table class="table" style="text-align: center;">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($department as $key=>$value) 

                          <tr>
                          
                            <th>{{$key+1}}</th>
                            <td>{{$value->name}}</td>
                            <td>{{$value->details}}</td>
                            <td><img src="{{url('/uploads/departments/'.$value->image)}}" style="border-radius:4px" width="100px" alt="department image"></td>

                            <td>
                              <a class="btn btn-success btn-sm" href="{{route('view.department',$value->id)}}"><i class="fas fa-eye"></i></a>  
                              <a class="btn btn-warning btn-sm" href="{{route('edit.department',$value->id)}}"><i class="fas fa-edit"></i></a>
                              <a class="btn btn-danger btn-sm" href="{{route('delete.department',$value->id)}}"><i class="fas fa-trash"></i></a>
                            </td>  
                          </tr>
                    
                  @endforeach
                </tbody>
              </table>
              {{$department->links()}}
</div>
@endsection