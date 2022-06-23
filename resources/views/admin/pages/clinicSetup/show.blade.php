@extends('admin.master')
@section('content')
<h1>{{__('Clinic Informations')}}</h1>
<hr>
<div>

    @foreach($clinic as $key=>$item)
    <div>
        <div style="text-align:center;">
            <img src="{{$klinic->image}}" style="border-radius:4px;" width="400px" alt="Logo">
        </div>
        <div style="text-align:center; font-size:x-large">
            <p><span><b>Company Name:</b></span> <span>{{$item->name}}</span></p>
            <p><span><b>Slogan:</b></span> <span>{{$item->slogan}}</span></p>
            <p><span><b>Address:</b></span> <span>{{$item->address}}</span></p>
            <p><span><b>Phone:</b></span> <span>{{$item->phone}}</span></p>
            <p><span><b>Email:</b></span> <span>{{$item->email}}</span></p>
            <p><span><b>Website:</b></span> <span>{{$item->web}}</span></p>
            <br>
            <a class="btn btn-warning btn-sm" href="{{route('clinic.edit',$item->id)}}"><i class="fas fa-edit"></i></a>

        </div>

    </div>


    @endforeach
</div>

@endsection
