@extends('admin.master')
@section('content')
    
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" style="margin-top: 5px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Import File
</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="#" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="modal-body">
  
                     <label for="file">Upload Excel</label>
                     <input type="file" class="form-control" name="excel">
  
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Import File</button>
                 </div>
             </form>
         </div>
     </div>
  </div>

<h1>{{__('Staffs')}}</h1>

<hr>

 <a href="{{route('staff.create')}}"><button type="button" class="btn btn-primary">Create Staff</button></a><br><br>

<div>
            <table class="table" style="text-align: center;">
              <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Addess</th>   
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($staffs as $key=>$value) 
                  <tr>
                    <th>{{$key+1}}</th>
                    <th>{{$value->designation->designation}}</th>
                    <th>{{$value->email}}</th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->address}}</td>
                    <td><img src="{{url('/uploads/staffs/'.$value->image)}}" class="rounded-circle" width="50px" alt="image"></td>

                   
                    <td>
                        <a class="btn btn-success btn-sm" href="{{route('staff.show',$value->id)}}"><i class="fas fa-eye"></i></a> 
                        <a class="btn btn-warning btn-sm" href="{{route('staff.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                        <form action="{{route('staff.destroy',$value->id)}}" method="POST">
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
            {{$staffs->links()}}
</div>
@endsection