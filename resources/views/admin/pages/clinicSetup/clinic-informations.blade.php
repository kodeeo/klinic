@extends('admin.master')
@section('content')
<h1>{{__('Clinic Informations')}}</h1>
<hr>
<a href="{{route('clinic.setup')}}"><button class="btn btn-primary">Setup Clinic</button></a>
<br><br>
<div> 
  <table class="table" id="dataTable" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Slogan</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
      <th scope="col">Logo</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       @foreach($clinic_infos as $key=>$clinic_info)
        
        <th scope="row">{{$key+1}}</th>
        <td>{{$clinic_info->name}}</td>
        <td>{{$clinic_info->slogan}}</td>
        <td>{{$clinic_info->address}}</td>
        <td>0{{$clinic_info->phone}}</td>
        <td>{{$clinic_info->email}}</td>
        <td>{{$clinic_info->web}}</td>
        <td>
          <img src="{{url('/uploads/klinicLogo/'.$clinic_info->image)}}" style="border-radius:4px" width="100px" alt="Logo">
        </td>
        <td>
            <a class="btn btn-warning btn-sm" href="{{route('clinic.setup.edit',$clinic_info->id)}}"><i class="fas fa-edit"></i></a>
            <a class="btn btn-danger btn-sm" href="{{route('clinic.setup.delete',$clinic_info->id)}}"><i class="fas fa-trash"></i></a>
        </td>
        </td>
      </tr>
    @endforeach
     
    </tbody>
  </table>
</div> 

@endsection