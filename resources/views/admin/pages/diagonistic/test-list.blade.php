@extends('admin.master')
@section('content')
<h1>{{__('Test List')}}</h1>
<hr>
<a href="{{route('test.add')}}"><button class="btn btn-primary">Create Test</button></a>
<br><br>
<div> 
  <table class="table" style="text-align: center;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">ID</th>
      <th scope="col">Test Category</th>
      <th scope="col">Test</th>
      <th scope="col">Price</th>
      <th scope="col">Procedure</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($tests as $key=>$test)
        
        <th scope="row">{{$key+1}}</th>
        <td>{{$test->category->name ?? ""}}</td>
        <td>{{$test->name}}</td>
        <td>{{$test->price}}</td>
        <td>{{$test->procedure}}</td>
        <td>{{$test->description}}</td>
        <td><img src="{{url('/uploads/'.$test->image)}}" style="border-radius:4px" width="40px" alt="test image"></td>
        <td>
          
          <a class="btn btn-warning btn-sm" href="{{route('test.edit',$test->id)}}"><i class="fas fa-edit"></i></a>
          <a class="btn btn-danger btn-sm" href="{{route('test.delete',$test->id)}}"><i class="fas fa-trash"></i></a>
      </td>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
  {{$tests->links()}}
</div> 

@endsection