@extends('admin.master')
@section('content')


<h1 style="text-align: center"> {{__('Patient Admission')}}</h1>


{{-- validation --}}
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<hr>
<div class="container">
    <form action="{{route('admissions.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="form-group col-6">
                <label for="patient_id">Patient ID<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="Enter Patient ID"
                    value="{{request()->patient_id??old('patient_id')}}" required>
            </div>

            <div class="form-group col-6">
                <label for="doctor_id">Doctor <span style="color:red">*</span></label>
                <select class="form-select" name="doctor_id" aria-label="Default select example" required>
                    <option>Select Doctor</option>
                    @foreach ($doctors as $item)
                    <option value="{{$item->id}}">{{$item->first_name}} {{$item->last_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-3 mt-2">
                <label for="admission_date">Admission Date<span style="color:red">*</span></label></label>
                <input type="date" class="form-control" id="admission_date" name="admission_date" required>
            </div>

            <div class="form-group col-3 mt-2">
                <label for="discharge_date">Discharge Date</label>
                <input type="date" class="form-control" id="discharge_date" name="discharge_date">
            </div>

            <div class="form-group col-3 mt-2">
                <label for="package">Package Name</label></label>
                <input type="text" class="form-control" id="package" name="package" placeholder="Enter Package Name">
            </div>

            <div class="form-group col-3 mt-2">
                <label for="insurance">Insurance Name</label></label>
                <input type="text" class="form-control" id="insurance" name="insurance"
                    placeholder="Enter Insurance Name">
            </div>

            <hr class="mt-1">

            <h3 style="text-align: center"> Patient Medical Information</h3>


            <div class="form-group col-6 mt-2">
                <label for="height">Enter Patient's Height</label>
                <input type="text" class="form-control" id=" height" name=" height"
                    placeholder="Enter Patient's Height">
            </div>

            <div class="form-group col-6 mt-2">
                <label for="weight">Enter Patient's Weight</label>
                <input type="text" class="form-control" id=" weight" name=" weight"
                    placeholder="Enter Patient's Weight">
            </div>

            <div class="form-group col-6 mt-2">
                <label for="allergies">Does patient has allergies to any medicine or food?</label>
                <input type="text" class="form-control" id=" allergies" name=" allergies"
                    placeholder="Does patient has allergies to any medicine or food?">
            </div>

            <div class="form-group col-6 mt-2">
                <label for="tendancy">Does patient has a tendancy to bleed or buise easily?</label>
                <input type="text" class="form-control" id="tendancy" name="tendancy"
                    placeholder="Does patient has  a tendancy to bleed or buise easily?">
            </div>

            <hr class="mt-1">
            <h3 style="text-align: center">Please Select Illness as following</h3>

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlSelect1">Heart Diseases</label>
                <select name="heart_diseases" class="form-control" id="exampleFormControlSelect1">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlSelect1">High Blood Pressure</label>
                <select name="high_BP" class="form-control" id="exampleFormControlSelect1">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>

            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlSelect1">Any Accident</label>
                <select name="accident" class="form-control" id="exampleFormControlSelect1">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>
            <div class="form-group col-3 mt-2">
                <label for="exampleFormControlSelect1">Diabetic</label>
                <select name="diabetic" class="form-control" id="exampleFormControlSelect1">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>

            <div class="form-group col-4 mt-2">
                <label for="exampleFormControlSelect1">Does patient has a high risk for infectious diseases?</label>
                <select name="infection" class="form-control" id="exampleFormControlSelect1">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>
            <div class="form-group col-4 mt-2">
                <label for="exampleFormControlSelect1">Quota</label>
                <select name="quota" class="form-control" id="exampleFormControlSelect1">
                    <option>Pensioner</option>
                    <option>Student</option>
                    <option>Low-Income Healtcare Card Holder</option>
                </select>
            </div>
            <div class="form-group col-4 mt-2">
                <label for="others">Others</label>
                <textarea type="text" class="form-control" id="others" name="others"></textarea>
            </div>

            <hr class="mt-1">
            <h3 style="text-align: center"> Gurdian Information</h3>

            <div class="form-group col-6 mt-2">
                <label for="guardian_name">Guardian Name</label></label>
                <input type="text" class="form-control" id="guardian_name" name="guardian_name"
                    placeholder="Enter Guardian Name" required>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="guardian_relation">Relation</label></label>
                <input type="text" class="form-control" id="guardian_relation" name="guardian_relation"
                    placeholder="Relation With Patient" required>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="guardian_contact">Guardian Contact No</label></label>
                <input type="text" class="form-control" id="guardian_contact" name="guardian_contact"
                    placeholder="Enter Mobile Number" required>
            </div>

            <div class="form-group col-6 mt-2">
                <label for="guardian_address">Guardian Address</label></label>
                <textarea type="text" class="form-control" id="guardian_address" name="guardian_address"
                    placeholder="Enter Address" required></textarea>
            </div>



        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>





@endsection
