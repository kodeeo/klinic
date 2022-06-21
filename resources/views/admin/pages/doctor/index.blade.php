@extends('admin.master')
@section('content')

<h1>{{__('Doctors')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a href="{{route('doctor.create')}}" class="btn btn-primary"> + Add Doctor</a>
    </div>

    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info" href="{{route('doctor.data.csv')}}">
            CSV
        </a>
        <a class="btn btn-info" href="{{route('doctor.data.excel')}}">
            Excel
        </a>
        <a class="btn btn-info" href="#">
            PDF
        </a>
        <button class="btn btn-info" onclick="{window.print()}">Print</button>

    </div>
</div>
<br><br>
<div style="overflow-x:auto">
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $key=>$value)
            <tr>
                <th>{{$key+1}}</th>
                <td><img src="{{url($value->doctor_image)}}" style="border-radius:4px" width="50px" alt="doctor image"></td>
                <td>{{$value->first_name. ''.$value->last_name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->mobile}}</td>
                <td>
                    @if($value->status=='active')
                    <button class="btn btn-info" style="border-radius: 15px;">Active</button>
                    @else
                    <button class="btn btn-danger" style="border-radius: 15px;">Inactive</button>
                    @endif
                </td>
                <td>
                    <div style="display: flex">
                        <a class="btn btn-success btn-sm m-1" href="{{route('doctor.show',$value->id)}}"><i
                                class="fas fa-eye"></i></a>
                        <a class="btn btn-warning btn-sm m-1"
                            href="{{route('doctor.edit',$value->id)}}"><i class="fas fa-edit"></i></a>
                        <form style="margin-left: 3px" action="{{route('doctor.destroy',$value->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div>
                                <button class="btn btn-danger m-1" type="submit"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
