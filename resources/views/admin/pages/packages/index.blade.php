@extends('admin.master')
@section('content')
<h1>{{__('Package List')}}</h1>
<hr>
<a href="{{route('packages.create')}}"><button class="btn btn-primary">Add Packages</button></a>
<br><br>
<div>
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col-1">Sl</th>
                <th scope="col-1">Name</th>
                <th scope="col-1">Services</th>
                <th scope="col-3">Description</th>
                <th scope="col-2">Discount</th>
                <th scope="col-3">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $key=>$package)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$package->name}}</td>
                <td>
                    @foreach($services as $item)
                        <button class="btn btn-info badge">{{$item->name}}</button>
                    @endforeach
                </td>
                <td>{{$package->description}}</td>
                <td>{{$package->discount}}</td>
                <td class="col-2">
                    <div class="btn-group">
                        <form action="{{ route('package.status.update',$package->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div style="display: flex; align-items: center;">
                                <div style="padding-right: 10px;">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                        <option @if($package->status == 'Active') selected @endif value="Active">Active
                                        </option>
                                        <option @if($package->status == 'Inactive') selected @endif
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
                <td>
                    <div style="display:flex">
                        <a class="btn btn-success btn-sm" href="{{ route('packages.show',$package->id) }}"><i
                                class="fas fa-eye"></i></a>
                        <a style="margin-left: 4px" class="btn btn-warning btn-sm" href="{{ route('packages.edit',$package->id) }}"><i
                                class="fas fa-edit"></i></a>
                                <form style="margin-left: 4px" action="{{route('packages.destroy',$package->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div>
                                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
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
