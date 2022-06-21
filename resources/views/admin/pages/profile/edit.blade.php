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

                    <form action="{{route('profile.update',$user->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf



                            <div class="form-group row">
                                <label for="firstname" class="col-xs-3 col-form-label">First Name <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="first_name" type="text" class="form-control" id="firstname" placeholder="First Name" value="{{$user->first_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastname" class="col-xs-3 col-form-label">Last Name <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="last_name" type="text" class="form-control" id="lastname" placeholder="Last Name" value="{{$user->last_name}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lastname" class="col-xs-3 col-form-label">User Name <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="username" type="text" class="form-control" id="" placeholder="Last Name" value="{{$user->username}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xs-3">Gender</label>
                                <div class="col-xs-9">
                                    <div class="form-check">

                                        <label class="radio-inline">
                                        <input type="radio" name="gender"  {{ ($user->gender) == 'Male' ? 'checked' : '' }}  value="Male" >Male                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="gender" {{ ($user->gender) == 'Female' ? 'checked' : '' }} value="Female">Female                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="gender" {{ ($user->gender) == 'Other' ? 'checked' : '' }} value="Other">Other                                        </label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-xs-3 col-form-label">Mobile No <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="mobile" class="form-control" type="number" placeholder="Mobile No" id="mobile" value="{{$user->mobile}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birth" class="col-xs-3 col-form-label">Date of Birth <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="birth" class="form-control" type="date" placeholder="" id="" value="{{$user->date_of_birth}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-xs-3 col-form-label">Email Address <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <input name="email" class="form-control" type="email" placeholder="Email Address" id="email" value="{{$user->email}}">
                                </div>
                            </div>






                            <!-- if employee picture is already uploaded -->
                                                        <div class="form-group row">
                                <label for="picturePreview" class="col-xs-3 col-form-label"></label>
                                <div class="col-xs-9">
                                <img src="{{url('/uploads/users/'.$user->image)}}" style="border-radius:4px" width="400"
                        alt="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="picture" class="col-xs-3 col-form-label">Picture</label>
                                <div class="col-xs-9">
                                    <input type="file" name="image" id="picture" value="">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-xs-3 col-form-label">Address <i class="text-danger">*</i></label>
                                <div class="col-xs-9">
                                    <textarea name="address" class="form-control" id="address" placeholder="Address" maxlength="140" rows="7">{{$user->address}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3">Status</label>
                                <div class="col-xs-9">
                                    <div class="form-check">
                                    <label class="radio-inline">
                                        <input type="radio" name="status"  {{ ($user->status) == 'active' ? 'checked' : '' }}  value="active" >Active                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="status" {{ ($user->status) == 'inactive' ? 'checked' : '' }} value="inactive">Inactive                                        </label>                                      </label>
                                    </div>
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
