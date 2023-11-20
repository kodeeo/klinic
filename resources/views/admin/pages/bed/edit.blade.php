@extends('admin.master')
@section('content')

<h1>{{ __('Update Bed Information') }}</h1>
<hr>

{{-- <a href="{{route('create.category') }}" button type="submit" class="btn
btn-primary">Create Category</button> </a> --}}
<div style="padding-left: 250px; padding-right: 250px; text-align:center;">
    <form action="{{ route('beds.update',$beds->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="form-group col-6">
            <label for="">Bed type</label>
            <select class="form-select" name="type" aria-label="Default select example">
                        @foreach($bedtype as $data) 
                            <option 
                            @if($data==$beds->type) selected @endif 
                            value="{{$data}}">{{$data}}
                            </option>
                        @endforeach
                        </select>
            </div>

            <div class="form-group col-6">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" value="{{ $beds->description }}"
                    name="description" placeholder="Enter Description">
            </div>

            <div class="form-group col-6">
                <label for="ward">Ward</label>
                <select class="form-select" name="ward_id" aria-label="Default select example">
                <option>Select Ward</option>

                @foreach ($wards as $item)
          <option
                @if($item->id==$beds->ward_id)
                      selected
                      @endif
                  value="{{$item->id}}">{{$item->name}}</option>            
                      @endforeach
              </select>
            </div>
            <div class="form-group col-6">
                <label for="cabin_type">Cabin type</label>
                <select class="form-select" name="cabin_type" aria-label="Default select example">
                        @foreach($cabintype as $data) 
                            <option 
                            @if($data==$beds->cabin_type) selected @endif 
                            value="{{$data}}">{{$data}}
                            </option>
                        @endforeach
                        </select>
            </div>
            <div class="form-group col-6 mt-2">
                    
                    <label for="gender">Bed Capacity <span style="color: red">*</span></label>
                        <select class="form-select" name="capacity" aria-label="Default select example">
                        @foreach($capacity as $data) 
                            <option 
                            @if($data==$beds->capacity) selected @endif 
                            value="{{$data}}">{{$data}}
                            </option>
                        @endforeach
                        </select>
                    </div>
            <div class="form-group col-6 mt-2">
                <label for="charge">Charge</label>
                <span class="text-danger">*</span>
                <input type="number" class="form-control" id="charge" value="{{ $beds->charge }}" name="charge"
                    placeholder="Enter Charge">
            </div>
           
        </div>
        <button type="submit" class="btn btn-success btn-sm mt-2" style="text-align:right;">Submit</button>
    </form>
</div>
@endsection
