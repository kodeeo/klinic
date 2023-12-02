@extends('admin.master')
@section('content')
<h1>{{__('Service List')}}</h1>

<br>

<div class="row" style="justify-content: space-between;">
  <div class="d-print-none col">
    <a href="{{route('services.create')}}"  class="btn btn-primary">Add Service</a>
  </div>

  <br>
  <br>

  <div class="d-print-none col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="{{route('service.data.csv')}}">
        CSV
      </a>
      <a class="btn btn-info" href="{{route('service.data.excel')}}">
        Excel
      </a>
      <a class="btn btn-info" href="#">
        PDF
      </a>
      <button class="btn btn-info" onclick="{window.print()}">Print</button>

  </div>
</div>
<br><br>
<div>
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col-1">Sl</th>
                <th scope="col-1">Name</th>
                <th scope="col-2">Rate</th>
                <th scope="col-3">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
            @foreach($services as $key=>$service)
                <th scope="row">{{$key+1}}</th>
                <td>{{$service->name}}</td>
                <td>{{$service->rate}}</td>
                <td class="col-2">
                    <div class="btn-group">
                        <form action="{{ route('service.status.update',$service->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div style="display: flex; align-items: center;">
                                <div style="padding-right: 10px;">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option @if($service->status == 'active') selected @endif value="active">Active
                                        </option>
                                        <option @if($service->status == 'inactive') selected @endif
                                            value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit"><i class="fa-solid fa-circle-check"></i></button>
                                </div>
                            </div>
                    </div>
                    </form>
                </td>
                <td>
                    <div style="display:flex">

                        <a class="btn btn-success btn-sm m-1" href="{{ route('services.show',$service->id) }}"><i class="fas fa-eye"></i></a>
                        
                        <a class="btn btn-sm btn-warning m-1" href="{{ route('services.edit',$service->id) }}"><i class="fas fa-edit"></i></a>
                        
                        <form action="{{route('services.destroy',$service->id)}}" method="POST">
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
</div>
{{$services->links()}}
@endsection
