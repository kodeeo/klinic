@extends('admin.master')
@section('content')
    
<div class="row">

    <div class="col-sm-12" id="PrintMe">
        <div class="panel panel-default thumbnail"> 
        
            <div class="panel-heading d-print-none">
                 <div class="btn-group">
                    <button type="button" onclick="{window.print()}" class="btn btn-success"><i class="fa fa-print"></i></button>            
                    <a href="{{route('profile.edit',auth()->user()->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
                    <a href="{{route('password.edit',auth()->user()->id)}}" class="btn btn-secondary"> <i class="fa-solid fa-key"></i></a> 
                </div>
            </div>


            <div class="panel-body">  
                <div class="row">
                    <div class="col-sm-12" align="center">  
                    <br>
                    </div>

                    <div class="col-sm-4" align="center"> 
                    <img src="{{url('/uploads/'.$user->image)}}" style="border-radius:4px" width="400"
                        alt="image">
                    </div> 

                    <div class="col-sm-8"> 
                        <dl class="dl-horizontal">
                                                    <dt>First Name:</dt><dd>{{$user->first_name}}</dd>
                        
                        
                        
                                                    <dt>Last Name:</dt><dd>{{$user->last_name}}</dd>
                         

                         

                                                    <dt>User Name:</dt><dd>{{$user->username}}</dd>
                         
   
                                                    <dt>Gender:</dt><dd>{{$user->gender}}</dd>
                         
  
                         
  
                                                    <dt>Mobile:</dt><dd>{{$user->mobile}}</dd>


                                                    <dt>Date of Birth:</dt><dd>{{$user->date_of_birth}}</dd>

                                                    <dt>Email:</dt><dd>{{$user->email}}</dd>

                                                    <dt>Address:</dt><dd>{{$user->address}}</dd>
                          
   
                                                    <dt>Status</dt><dd>{{$user->status}}</dd>
                          
                        </dl> 
                    </div>
                </div>  

            </div> 

            <div class="panel-footer">
                <div class="text-center">
                    <strong>Kodeeo Klinic</strong>
                    <p class="text-center">House#14,Road#8, Sector#6, Uttara, Dhaka</p>
                </div>
            </div>
        </div>
    </div>
 

</div>
@endsection 