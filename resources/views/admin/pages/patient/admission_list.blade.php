@extends('admin.master')
@section('content')
<h1>{{__('Admissions')}}</h1>
<hr>
<div> 
  <table class="table" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Room</th>
      <th scope="col">Assigned Doctor</th>
      <th scope="col">Insurance</th>
      <th scope="col">Condition</th>
      <th scope="col">Mobile</th>
      </tr>
    </thead>
    <tbody>
      {{-- <tr>
          @foreach($test_categories as $key=>$test_category)
        
        <th scope="row">{{$key+1}}</th>
        <td>{{$test_category->name ?? ""}}</td>
        <td>
          
          <a class="btn btn-warning btn-sm" href="{{route('test.category.edit',$test_category->id)}}"><i class="fas fa-edit"></i></a>
          <a class="btn btn-danger btn-sm" href="{{route('test.category.delete',$test_category->id)}}"><i class="fas fa-trash"></i></a>
      </td>
        </td>
      </tr>
      @endforeach --}}
     
    </tbody>
  </table>
</div> 

@endsection