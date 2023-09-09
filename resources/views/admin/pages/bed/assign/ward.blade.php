@extends('admin.master')
@section('content')



<h3>Select Ward</h3>
            <ul class="main-category">
@foreach($ward as $data)
<li><a href="{{route('assign.bed',$data->id)}}" >{{$data->name}}</a></li>
@endforeach
</ul>

@endsection




