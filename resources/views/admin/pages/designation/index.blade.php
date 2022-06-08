@extends('admin.master')
@section('content')

<h1>{{__('Designation')}}</h1>
<hr>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
  <form action="{{route('designation.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
          <div class="form-group col-6">
            <label for="designation">Name</label>
            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation Name">
          </div>
          <div class="form-group col-6">
              <label for="email">Details</label>
              <input type="text" class="form-control" id="details" name="details" placeholder="Enter Designation Details">
          </div> 
         

    </div>   
    <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Save</button>
  </form>
</div>
<hr>

<div>
              <table class="table" id="dataTable" style="text-align: center;">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($designations as $key=>$value) 

                          <tr>
                          
                            <th>{{$key+1}}</th>
                            <td>{{$value->designation}}</td>
                            <td>{{$value->details}}</td>

                            <td>
                              <a class="btn btn-success btn-sm" href="{{route('designation.show',$value->id)}}"><i class="fas fa-eye"></i></a>  
                              <a class="btn btn-warning btn-sm" href="{{route('designation.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                              <form action="{{route('designation.destroy',$value->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
        
                                </div>
        
                                </form>                            </td>  
                          </tr>
                    
                  @endforeach
                </tbody>
              </table>
              {{$designations->links()}}
</div>
@endsection