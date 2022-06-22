@extends('admin.master')
@section('content')

<h1>{{__('Update Patient')}}</h1>


<img src="{{$patient->patient_image}}" style="border-radius:4px" width="200px" alt="patient image"> 

<form action="{{route('patients.update',$patient->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="form-group col-6">
            <label for="first_name">First Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="first_name" name="first_name" value={{$patient->first_name}} placeholder="Enter First Name">
        </div>
        <div class="form-group col-6">
            <label for="last_name">Last Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" id="last_name" name="last_name" value={{$patient->last_name}} placeholder="Enter Last Name">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="email">Email <span style="color:red">*</span></label>
            <input type="email" class="form-control" id="email" name="email" value={{$patient->email}} placeholder="Enter Email">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="password">Password <span style="color:red">*</span></label>
            <input type="password" class="form-control" id="email" name="password" placeholder="Enter Password">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="date_of_birth">Birth Date</label>
            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value={{$patient->date_of_birth}} placeholder="Enter birthdate">
        </div>
        
        <div class="form-group col-6 mt-2">
            <label for="exampleFormControlSelect1">Gender</label>
            <select name="gender" class="form-control" id="exampleFormControlSelect1">
                @foreach($genders as $data)
                <option @if($data==$patient->data) selected @endif
                    value="{{$data}}">{{$data}}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value={{$patient->address}} placeholder="Enter address">
        </div>
        <div class="form-group col-6 mt-2">
            <label for="mobile">Mobile No</label>
            <input type="text" class="form-control" id="phoneNumber" name="mobile" value={{$patient->mobile}} placeholder="Enter Phonenumber">
        </div>

        <div class="form-group col-6 mt-2">
            <label for="blood">Blood Group</label>
            <input type="text" class="form-control" id="blood_group" name="blood_group" value={{$patient->blood_group}} placeholder="Blood Group">
        </div>

        <div class="form-group col-6 mt-2">
            <label for="patient_image" class="form-label">Insert Image</label>
            <input class="form-control" type="file" id="patient_image" name="patient_image">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
