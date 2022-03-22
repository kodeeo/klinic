@extends('admin.master')
@section('content')
<h2>Permission Details</h2>
<div>
    <p><h5>Permission Name: <span style="font-style: initial">{{$permissionshow->name}}</span></h5></p>
    <p><h5>Permission Slug: <span style="">{{$permissionshow->slug}}</span></h5></p>
    <p><h5>Permission Status: <span style="">{{$permissionshow->status}}</span></h5></p>
</div>
@endsection