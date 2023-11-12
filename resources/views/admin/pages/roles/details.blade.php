@extends ('admin.master')
@section ('content')

<h1>View Role</h1>

<h5>Name:{{$role->name}}</h5>
<h5>Status:{{$role->status}}</h5>
<h5>Description:{{$role->description}}</h5>
 





@endsection