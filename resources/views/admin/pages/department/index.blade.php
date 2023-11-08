@extends('admin.master')
@section('content')

<h2 class="d-print-none">{{__('Add Departments')}}</h2>



<div class="d-print-none" style="padding-left: 250px; padding-right: 0px; text-align:center;">
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

          <div class="form-group col-4">
            <label for="image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="image" name="department_image">
        </div>
          <div class="form-group col-6">
            <label for="status">Status:</label><br>
    
            <input type="radio" id="active" name="status" value="active">
              <label for="status">Active</label><br>
              <input type="radio" id="inactive" name="status" value="inactive" >
              <label for="status">Inactive</label><br>

            <button type="submit" class="btn btn-success btn-sm mt-2" style=" text-align:right;">Save</button> 
            </div>
           
    </div>   

  </form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>

<h2>Department list</h2>

<div class="d-print-none row" style="justify-content: right;">

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
      <button class="btn btn-info" onclick="{window.print()}">Print</button>
  </div>
</div>

<br>
<br>

<div >
              <table class="table" id="dataTable" style="text-align: center;">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    
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
                            <td>
                              <img src="{{url('/uploads/departments',$value->image)}}" style="border-radius:4px" width="50px" alt="department image" />
                           </td>
                            <td>{{$value->description}}</td>
                            <td class="col-2">
                    <div class="btn-group">
                        <form action="{{ route('department.status.update',$value->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div style="display: flex; align-items: center;">
                                <div style="padding-right: 10px;">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option @if($value->status == 'Active') selected @endif value="Active">Active
                                        </option>
                                        <option @if($value->status == 'Inactive') selected @endif
                                            value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit"><i class="fa-solid fa-circle-check"></i></button>
                                </div>
                            </div>
                    </div>
                    </form>
                </td>

                            <td >
                              <div style="display: flex">
                              <a  class="btn btn-success btn-sm m-1" href="{{route('view.department',$value->id)}}"><i class="fas fa-eye"></i></a>  
                              <a  class="btn btn-warning btn-sm m-1" href="{{route('edit.department',$value->id)}}"><i class="fas fa-edit"></i></a>
                              <a  class="btn btn-danger btn-sm m-1" href="{{route('destroy.department',$value->id)}}"><i class="fas fa-trash"></i></a>
                              
                

                            
                          
                             
                                    </div>
                            </td>  
                          </tr>
                    
                  @endforeach
                </tbody>

              </table>

            </div>
              


{{$department->links()}}


@endsection