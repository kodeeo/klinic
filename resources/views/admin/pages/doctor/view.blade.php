@extends('admin.master')
@section('content')


<style>
    .main {
        display: flex;
        justify-content: space-between;
    }

    .leftPart {
        padding-top: 30px;
        padding-left: 20px;
        padding-right: 100px;
    }

    .rightPart {
        margin-top: 10px;
        padding: 2rem;
        border-radius: 0.375rem;
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07)) drop-shadow(0 2px 2px rgb(0 0 0 / 0.06));
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);

    }

    .rightPart h1 {
        font-weight: bold;
        padding-bottom: 15px;
        padding-top: 16px;

    }

    .rightPart p {
        margin-bottom: 10px;
    }

    .rightPart-personal {
        margin-top: 20px;
    }

</style>


<div class="container">
    <div style="display:flex; justify-content:space-between; align-items:center;">
        <h1>{{__('Doctor Profile Details')}}</h1>
        <div>
            <a href="{{route('pdf.doctor',$doctor->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" style="fill: #dc2626"
                    viewBox="0 0 24 24" width="32" height="32">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path
                        d="M6 19H3a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-3v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm0-2v-1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1h2V9H4v8h2zM8 4v3h8V4H8zm0 13v3h8v-3H8zm-3-7h3v2H5v-2z" />
                    </svg></a>
        </div>

    </div>
    <hr>
    <div class="main">
        <div class="leftPart">
            <img src="{{url($doctor->doctor_image)}}" style="border-radius:4px; display:flex; align-items:center;"
                width="200px" height="200px" alt="doctor image">
        </div>

        <div class="rightPart">
            <div class="rightPart-basic">
                <div style="display: flex; align-items: center;">
                    <div style="padding-right: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M2 3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993zM6 15v2h12v-2H6zm0-8v6h6V7H6zm8 0v2h4V7h-4zm0 4v2h4v-2h-4zM8 9h2v2H8V9z" />
                            </svg>
                    </div>
                    <h1>Basic Information</h1>

                </div>
                <p><span>First Name:</span> <span>{{$doctor->first_name}}</span></p>
                <p><span>Last Name:</span> <span>{{$doctor->last_name}}</span></p>
                <p><span>Name:</span> <span>{{$doctor->username}}</span></p>
                <p><span>Email:</span> <span>{{$doctor->email}}</span></p>
                <p><span>Phone No:</span> <span>{{$doctor->phone}}</span></p>
                <p><span>Mobile No:</span> <span>{{$doctor->mobile}}</span></p>
                <p><span>Address:</span> <span>{{$doctor->address}}</span></p>
            </div>

            <div class="rightPart-personal">
                <div style="display: flex; align-items: center;">
                    <div style="padding-right: 15px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                            <path fill="none" d="M0 0h24v24H0z" />
                            <path
                                d="M20 22H4v-2a5 5 0 0 1 5-5h6a5 5 0 0 1 5 5v2zm-8-9a6 6 0 1 1 0-12 6 6 0 0 1 0 12z" />
                            </svg>
                    </div>
                    <h1>Other Information</h1>

                </div>
                <p>Date of Birth: {{$doctor->date_of_birth}}</p>
                <p>Gender: {{$doctor->gender}}</p>
                <p>Blood Group: {{$doctor->blood_group}}</p>
                <p>Department: {{$doctor->department->name}}</p>
                <p>Education/Degree: {{$doctor->degree}}</p>
                <p>Specialist: {{$doctor->specialist}}</p>
                <p>Short Biography: {{$doctor->bio}}</p>
                <p>Status: {{$doctor->status}}</p>
                <p>
                    <td><img src="{{url('/uploads/doctors/'.$doctor->image)}}" style="border-radius:4px" width="200px"
                            alt="doctor image"></td>
                </p>
            </div>

        </div>


    </div>
</div>
@endsection
