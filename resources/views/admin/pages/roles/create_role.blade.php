@extends('admin.master')
@section('content')


<h1>{{__('Add Role')}}</h1>

    

<form action="{{route('role.store')}}" method='POST' enctype="multipart/form-data">

    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name:</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
{{-- 
    <div>
      <h4 style="text-align: center">Permissions list</h4>
  </div>
  <div style="margin-left: 120px">
      <input type="checkbox" id="select-all">
      <span style="font-size: 18px">Select All / Unselect All</span>
  </div>
  <div class="mt-5 mt-3" style="margin-left: 100px">
      @foreach($modules as $module)
          <div class="mb-8">
              <div>
                  <h6 style="margin-left: 25px">{{$module->name}}</h6>
              </div>

              @foreach($module->permissions as $permission)
                  <div style="margin-left: 50px; margin-top: 5px">
                      <input
                          type="checkbox"
                          name="permission_ids[]"
                          value="{{$permission->id}}" multiple
                      />
                      <span style="font-size: 15px;margin-top: 2px">{{$permission->name}}</span>
                  </div>
              @endforeach
          </div>
      @endforeach
  </div> --}}

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Status:</label>
      <input type="text" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Description:</label>
      <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Slug:</label>
      <input type="text" name="slug" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 


@endsection
