@extends('admin.master')
@section('content')
    
<h3> Departments </h3>

<p><b>Name: {{$department->name}}</b></p>
<p><b>Details: {{$department->details}}</b></p>
<p>
    <td><img src="{{url('/uploads/departments/'.$department->image)}}" style="border-radius:4px" width="200px" alt="department image"></td>
</p> 

@endsection 