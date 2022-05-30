@extends('admin.master')
@section('content')
<div class ="row">
    <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;margin-top:4rem;">
      <form  action="{{route('permission.update',$permissionedit->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <h2>Add Permission Form</h2>
        <br>
       <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
             <div class="col">
                <div class="form-outline mb-4">
                     <label class="form-label" for="form6Example1">Name</label>
                    <input name="permissionname" value="{{$permissionedit->name}}" style="height:3rem;"type="text" id="form6Example1" class="input-group input-group-outline" />
            
                  </div>
              </div>
               <div class="col">
                   <div class="form-outline mb-4">
                         <label class="form-label" for="form6Example2">Status</label>
                         <input name="permissionstatus" value="{{$permissionedit->status}}" style="height:3rem;"type="text" id="form6Example2" class="input-group input-group-outline" />
           
                     </div>
                 </div>
                 <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Slug</label>
                     <input name="permissionslug" value="{{$permissionedit->slug}}" style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
             
                 </div>
           
          </div>
    
         
           <!-- Submit button -->
           <button style="margin-right: 36rem;"type="submit" class="btn btn-primary btn-block mb-4">submit</button>
    </form>
  </div>
  </div>
    @endsection