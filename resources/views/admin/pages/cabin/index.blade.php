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
          <div class="form-group col-6   mt-2">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" required>
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
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cabin as $key=>$value) 

                          <tr>
                          
                            <th>{{$key+1}}</th>
                            <td>Cabin-{{$value->cabin_number}}</td>
                            
                            <td>
                              @if($value->status=='active')
                              <button class="btn btn-lg" style="background:#1bcc1b; border-radius:50%; border: 2px inset;"></button>
                              @else
                              <button class="btn btn-lg" style="background:red; border-radius:50%; border: 2px inset;"></button>
                              @endif
                            </td>

                            <td style="display: flex">
                              <a style="margin-left: 4px" class="btn btn-success btn-sm" href="{{route('cabin.show',$value->id)}}"><i class="fas fa-eye"></i></a>  
                              <a style="margin-left: 4px" class="btn btn-warning btn-sm" href="{{route('cabin.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                              <form style="margin-left: 4px" action="{{route('cabin.destroy',$value->id)}}" method="POST">
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