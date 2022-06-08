@extends('admin.master')
@section('content')
<div class ="row">
    <div class="col mb-4" style="margin-left:10rem;margin-right:10rem;margin-top:4rem;">
        @if (session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
   @endif
      <form  action="{{route('permission.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Add Permission Form</h2>
        <br>
       <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            {{-- <div class="form-outline mb-4">
                 <label class="form-label" for="form6Example1">Case Number</label>
                <input name="case_no" style="height:3rem;"type="text" id="form6Example1" class="input-group input-group-outline" />
        
              </div> --}}
             <div class="col">
                <div class="form-outline mb-4">
                     <label class="form-label" for="form6Example1">Name</label>
                    <input name="permissionname" style="height:3rem;"type="text" id="form6Example1" class="input-group input-group-outline" />
            
                  </div>
              </div>
               <div class="col">
                   <div class="form-outline mb-4">
                         <label class="form-label" for="form6Example2">Status</label>
                         <input name="permissionstatus" style="height:3rem;"type="text" id="form6Example2" class="input-group input-group-outline" />
           
                     </div>
                 </div>
                 <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example7">Slug</label>
                     <input name="permissionslug"style="height:3rem;" type="text" id="form6Example6" class="input-group input-group-outline" />
             
                 </div>
           
          </div>
    
         
           <!-- Submit button -->
           <button style="margin-right: 36rem;"type="submit" class="btn btn-primary btn-block mb-4">submit</button>
    </form>
  </div>
  </div>
    @endsection