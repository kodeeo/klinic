@extends('admin.master')
@section('content')

<h1>{{__('Ward')}}</h1>
<hr>



{{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a>
--}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
    <form action="{{route('ward.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div>
               <label for="">Ward</label>
               <input name="name" placeholder="Enter ward name" type="text" class="form-control">
               </div>

            <div class="form-group col-6">
                <label for="">Status</label>
                <select class="form-select" name="status" >
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
                   
                    
         
        </div>
        <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Submit</button>
    </form>
</div>
<br>
<br>
<br>
<br>

<div class="row" style="justify-content: space-between;">
  <div class="d-print-none col">
<p class="btn btn-primary"> Ward List</p>
  </div>

  <div class="d-print-none col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('ward.data.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('ward.data.excel')}}">
        Excel
      </a>
      <a class="btn btn-info" href="#">
        PDF
      </a>
      <button class="btn btn-info" onclick="{window.print()}">Print</button>

  </div>
</div>
<hr>


    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ward</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
           

            <tr>
            @foreach($wards as $key=>$value)
                <th>{{$key+1}}</th>
                <td>{{$value->name}} </td>
              
                <td class="col-2">
                    <div class="btn-group">
                        <form action="{{route('ward.status.update',$value->id)}}" method="POST">
                            @method('put')
                            @csrf
                            <div style="display: flex; align-items: center;">
                                <div style="padding-right: 10px;">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option @if($value->status == 'active') selected @endif value="active">Active
                                        </option>
                                        <option @if($value->status == 'inactive') selected @endif
                                            value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit"><i class="fa-solid fa-circle-check"></i></button>
                                </div>
                            </div>
                            </form>
                    </div>
                               
                </td>

                <td >
                <div style="display:flex">
              
                        <a class="btn btn-success btn-sm m-1" href="{{route('ward.show',$value->id)}}"><i class="fas fa-eye"></i></a> 
                        <a class="btn btn-warning btn-sm m-1"href="{{route('ward.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                        <form  action="{{route('ward.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div>
                                <button class="btn btn-danger btn-sm m-1" type="submit"><i class="fas fa-trash"></i></button>
                            </div>

                        </form>

                
                </div>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
{{$wards->links()}}

@endsection
