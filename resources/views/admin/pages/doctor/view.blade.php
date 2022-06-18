@extends('admin.master')
@section('content')
<style>
    .panel{
        box-sizing: border-box;
  border-radius: 10px;
  /* box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%); */
  box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
  background-color: #ffffff;
    }
    .title{
        text-align: center;
    }
    .panel>.panel-heading{
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
    }
    .panel-heading{
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    }
    .img-hw-200 {
    height: 200px;
    width: 200px;
}
.img-thumbnail {
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    transition: all .2s ease-in-out;
    display: inline-block;
    max-width: 100%;
    height: auto;
}
.panel-footer {
    background-color: #f7f9fa;
    border-top: 1px solid #e1e6ef;
}
.panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
</style>
    <div class="row">

        <div class="col-sm-12" id="PrintMe">
    
            <div class="panel panel-default thumbnail">
     
                <div class="panel-heading no-print">
                    <div class="btn-group"> 
                        <a class="btn btn-success" href="https://hospitalnew.bdtask.com/demo7/doctor/create"> <i class="fa fa-plus" style="font-family: FontAwesome, Bangla885, sans-serif;"></i>  Add Doctor </a>  
                        <a class="btn btn-primary" href="https://hospitalnew.bdtask.com/demo7/doctor"> <i class="fa fa-list" style="font-family: FontAwesome, Bangla885, sans-serif;"></i>  Doctor List </a>  
                        <button type="button" onclick="printContent('PrintMe')" class="btn btn-danger"><i class="fa fa-print" style="font-family: FontAwesome, Bangla885, sans-serif;"></i></button> 
                    </div>
                </div> 
    
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12" align="center">  
                            <h1 class="title">{{__('Doctor Profile Details')}}</h1>
                        <br>
                        </div>
    
                        <div class="col-md-3 col-lg-3 " align="center"> 
                            <img class="img-thumbnail img-responsive img-hw-200" src="{{url('/uploads/doctors/'.$doctor->image)}}"  alt="doctor image">
                            {{-- <img alt="Picture" src="https://hospitalnew.bdtask.com/demo7/assets/images/no-img.png" class="img-thumbnail img-responsive img-hw-200"> --}}
                        </div>
    
                        <div class="col-md-7 col-lg-7 "> 
                            <dl class="dl-horizontal">
                                <p><b>First Name: {{$doctor->first_name}}</b></p>
                                <p><b>Last Name: {{$doctor->last_name}}</b></p>
                                <p><b>User Name: {{$doctor->username}}</b></p>
                                <p><b>Email: {{$doctor->email}}</b></p>
                                <p><b>Phone No: {{$doctor->phone}}</b></p>
                                <p><b>Mobile No: {{$doctor->mobile}}</b></p>
                                <p><b>Address: {{$doctor->address}}</b></p>
                                <p><b>Date of Birth: {{$doctor->date_of_birth}}</b></p>
                                <p><b>Gender: {{$doctor->gender}}</b></p>
                                <p><b>Blood Group: {{$doctor->blood_group}}</b></p>
                                <p><b>Department: {{$doctor->department->name}}</b></p>
                                <p><b>Education/Degree: {{$doctor->degree}}</b></p>
                                <p><b>Specialist: {{$doctor->specialist}}</b></p>
                                <p><b>Short Biography: {{$doctor->bio}}</b></p>
                                <p><b>Status: {{$doctor->status}}</b></p>
                            </dl> 
                        </div>
                    </div>
                </div> 
    
                <div class="panel-footer">
                    <div class="text-center">
                        <strong>Kodeeo Klinic</strong>
                        <p class="text-center">#House-14 #Road-08 Sector-06 Uttara Dhaka-12</p>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
@endsection