@extends('admin.master')
@section('content')


<h1>View Role Details</h1>
<div class="container">
  <p>User Name: {{$users->username}}</p>
  <p>Role Name: {{$users->role->name}}</p>
  <p>Email Name: {{$users->email}}</p>
</div>

@endsection
