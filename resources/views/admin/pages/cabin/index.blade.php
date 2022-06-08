@extends('admin.master')
@section('content')

<h1>{{__('Cabin')}}</h1>
<hr>

 {{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a> --}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
  <form action="{{route('cabin.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
          <div class="form-group col-6">
            <label for="cabin_number">Cabin Number</label>
            <input type="text" class="form-control" id="cabin_number" name="cabin_number" placeholder="Enter Cabin Number">
          </div>
          <div class="form-group col-6">
              <label for="admission_id">Admission Id</label>
              <input type="number" class="form-control" id="admission_id" name="admission_id" placeholder="Enter Admission ID">
          </div> 
          <div class="form-group col-6">
            <label for="staff_id">Staff Id</label>
            <input type="number" class="form-control" id="staff_id" name="staff_id" placeholder="Enter Staff ID">
        </div> 
        <div class="form-group col-6">
            <label for="nurse_id">Nurse Id</label>
            <input type="number" class="form-control" id="nurse_id" name="nurse_id" placeholder="Enter Nurse ID">
        </div> 

    </div>   
    <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Submit</button>
  </form>
</div>
<hr>

<div>
              <table class="table" id="dataTable" style="text-align: center;">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cabin Number</th>
                    <th scope="col">Admission ID</th>
                    <th scope="col">Staff ID</th>
                    <th scope="col">Nurse ID</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cabin as $key=>$value) 

                          <tr>
                          
                            <th>{{$key+1}}</th>
                            <td>{{$value->cabin_number}}</td>
                            <td>{{$value->admission_id}}</td>
                            <td>{{$value->staff_id}}</td>
                            <td>{{$value->nurse_id}}</td>
                            <td>{{$value->status}}</td>

                            <td>
                              <a class="btn btn-success btn-sm" href="{{route('cabin.show',$value->id)}}"><i class="fas fa-eye"></i></a>  
                              <a class="btn btn-warning btn-sm" href="{{route('cabin.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                              <form action="{{route('cabin.destroy',$value->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
        
                                </div>
        
                                </form>
                              </td>  
                          </tr>
                    
                  @endforeach
                </tbody>
              </table>
              {{$cabin->links()}}
              
</div>
@endsection