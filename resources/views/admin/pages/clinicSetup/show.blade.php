@extends('admin.master')
@section('content')
<h1 class="text-center"><strong>{{__('Clinic Informations ')}}</strong></h1>
<hr>
<div>

  
    @foreach($clinic as $key=>$item)
   
    <div>
        <div style="text-align:center;">
      <img  class="h-auto" width="120" src="{{ $item->image }}" alt="No Image for Clinic">

        </div>
        <div class="row p-3">
            <div class="col-md-6 offset-md-3">
                <div class="row">
                    <div class="col-md-6 bg-info p-3">
                        <div class="row">
                            <div class="col-md-2 offset-md-5">
                                <h3><b>Company</b></h3>
                                <h3><b>Slogan</b></h3>
                                <h3><b>Address</b></h3>
                                <h3><b>Phone</b></h3> 
                                <h3><b>Website</b></h3>
                                <h3><b>Email</b></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-info p-3">
                        <h3><b><span> : </span>{{$item->name}}</b></h3>
                        <h3><b><span> : </span>{{$item->slogan}}</b></h3>
                        <h3><b><span> : </span>{{$item->address}}</b></h3>
                        <h3><b><span> : </span>{{$item->phone}}</b></h3>
                        <h3><b><span> : </span>{{$item->web}}</b></h3>
                        <h3><b><span> : </span>{{$item->email}}</b></h3>

                    </div>
                </div>
            </div><!-- col-md-6 -->
        </div><!-- row -->
        <div style="text-align:center; font-size:x-large">
            <a class="btn btn-warning btn-sm" href="{{route('clinic.edit',$item->id)}}"><i class="fas fa-edit"></i> Edit</a>
        </div>
    </div>
    @endforeach
</div>
@endsection