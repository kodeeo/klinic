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
                   
                    
            <!-- <div class="form-group col-6">
                <label for="ward_number">Ward Number</label>
                <input type="text" class="form-control" id="ward_number" name="ward_number"
                    placeholder="Enter Ward Number">
            </div> -->
            <!-- <div class="form-group col-6 mt-2">
                <label for="from">Bed Number Start From</label>
                <input type="number" class="form-control" id="from" name="from" placeholder="Enter Starting Number">
            </div> -->
            <!-- <div class="form-group col-6   mt-2">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity">
            </div> -->
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
                <th scope="col">Ward</th>
                
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wards as $key=>$value)

            <tr>

                <th>{{$key+1}}</th>
                <td>{{$value->name}} </td>
                <!-- <td>Bed - {{$value->bed_number}}</td> -->
                <td>{{$value->status}}</td>

                <td style="display: flex">
                    <!-- <a class="btn btn-success btn-sm" href="{{route('ward.show',$value->id)}}"><i
                            class="fas fa-eye"></i></a> -->
                    <!-- <a style="margin-left: 4px" class="btn btn-warning btn-sm"
                        href="{{route('ward.edit',$value->id)}}"><i class="fas fa-edit"></i></a> -->
                    <form style="margin-left: 4px" action="{{route('ward.destroy',$value->id)}}" method="POST">
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

</div>
@endsection
