@extends('admin.master')
@section('content')
<h1 class="text-center"><strong>{{__('Clinic Details ')}}</strong></h1>
<hr>
<div>

    @foreach($clinic as $key=>$item)
    <div>
        <div style="text-align:center;">
      <img src="{{url('/uploads/clinicLogo/'.$item->image)}}" alt="No Image for Clinic">

        </div>
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <h3><b>Company</b></h3>
                        <h3><b>Slogan</b></h3>
                        <h3><b>Phone</b></h3>
                        <h3><b>Website</b></h3>
                        <h3><b>Address</b></h3>
                      
                        
                    </div>
                    <div class="col-md-8">
                        <h3><b><span> : </span>{{$item->name}}</b></h3>
                        <h3><b><span> : </span>{{$item->slogan}}</b></h3>
                        <h3><b><span> : </span>{{$item->phone}}</b></h3>
                        <h3><b><span> : </span>{{$item->email}}</b></h3>
                        <h3><b><span> : </span>{{$item->address}}</b></h3>
                      
                       

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