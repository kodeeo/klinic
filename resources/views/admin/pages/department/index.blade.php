@extends('admin.master')
@section('content')
<style>
  .required{
    color: red;
  }
</style>
<h1 class="d-print-none">{{__('Departments')}}</h1>
<hr>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div class="d-print-none" style="padding-left: 250px; padding-right: 250px; text-align:center;">
  <form action="{{route('store.department')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
          <div class="form-group col-6">
            <label for="name">Name <span class="required">*</span></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Department Name" required>
          </div>
          <div class="form-group col-6">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description" name="description" placeholder="Enter Department Description"><br>
          </div> 
          <div class="form-group col-12 mt-2">
            <label for="status">Status:</label><br>
    
            <input type="radio" id="active" name="status" value="active">
              <label for="status">Active</label><br>
              <input type="radio" id="inactive" name="status" value="inactive" >
              <label for="status">Inactive</label><br>
            </div> 
    </div>   
    <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Save</button>
  </form>
</div>

<div class="d-print-none row" style="justify-content: right;">

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('department.data.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('department.data.excel')}}">
        Excel
      </a>
      <a class="btn btn-info" href="#">
        PDF
      </a>
      <button class="btn btn-info" onclick="{window.print()}">Print</button>
  </div>
</div>

<hr>

<div>
              <table class="table" id="dataTable"  style="text-align: center;">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($department as $key=>$value) 

                          <tr>
                          
                            <th>{{$key+1}}</th>
                            <td>{{$value->name}}</td>
                            <td>{{$value->description}}</td>
                            <td> 
                              @if($value->status=='active')
                              <button class="btn btn-info" style="border-radius: 15px;">Active</button>
                              @else
                              <button class="btn btn-danger" style="border-radius: 15px;">Inactive</button>
                              @endif
                            </td>

                            <td style="display: flex">
                              <a style="margin-left: 4px" class="btn btn-success btn-sm" href="{{route('view.department',$value->id)}}"><i class="fas fa-eye"></i></a>  
                              <a style="margin-left: 4px" class="btn btn-warning btn-sm" href="{{route('edit.department',$value->id)}}"><i class="fas fa-edit"></i></a>
                              <a style="margin-left: 4px" class="btn btn-danger btn-sm" href="{{route('delete.department',$value->id)}}"><i class="fas fa-trash"></i></a>

                            </td>  
                          </tr>
                    
                  @endforeach
                </tbody>
              </table>
              {{$department->links()}}
</div>
@endsection