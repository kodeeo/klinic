@extends('admin.master')
@section('content')
    

<div class="col-sm-12">
        <div class="panel panel-default thumbnail">
 
            <div class="panel-heading no-print">
                <div class="btn-group"> 
                    <a class="btn btn-primary" href="{{route('profile',auth()->user()->id)}}"> <i class="fa fa-list"></i>  Profile </a>  
                </div>
            </div> 


            <div class="panel-body panel-form">
                <div class="row">
                    <div class="col-md-9 col-sm-12">

                    <form action="{{route('password.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf
                                            

 
                            <div class="form-group row">
                                <label for="firstname" class="col-xs-3 col-form-label">Reset Password <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="password" type="password" class="form-control" id="firstname" placeholder="Enter a password" value="">
                                </div>
                            </div>


                            <br>

<div class="form-group row">
    <div class="col-sm-offset-3 col-sm-6">
        <div class="ui buttons">
        <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</div>


                        </form>                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>


@endsection 