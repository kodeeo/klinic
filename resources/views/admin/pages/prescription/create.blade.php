@extends('admin.master')
@section('content')

<h1>{{__('Add Prescription')}}</h1>
<hr>
<br>

{{-- <a href="{{route('create.category')}}" button type="submit" class="btn btn-primary">Create Category</button> </a>
--}}
<div style="text-align:center;">
    <form action="{{route('prescription.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="patient_id">Patient ID</label>
                        <input type="text" class="form-control" id="patient_id" name="patient_id"
                            placeholder="Enter Patient ID" readonly value="{{$patient->patient_id}}">
                    </div>
                    <div class="form-group col-6">
                        <label for="patient_name">Patient Name</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name"
                            placeholder="Enter Patient Name" value="{{$patient->first_name.' ' .$patient->last_name}}">
                    </div>

                    <div class="form-group col-6">
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight"
                            placeholder="Enter Patient Weight" value="">
                    </div>
                    <div class="form-group col-6">
                        <label for="blood_pressure">Blood Pressure</label>
                        <input type="text" class="form-control" id="blood_pressure" name="blood_pressure"
                            placeholder="Enter Blood Pressure">
                    </div>
                    <div class="form-group col-6">
                        <label for="reference">Reference</label>
                        <input type="text" class="form-control" id="reference" name="reference"
                            placeholder="Enter Reference">
                    </div>

                    <div class="form-group col-6 mt-2">
                      <label for="insurance">Select Insurance</label>
                      <select class="form-select" name="insurance" aria-label="Default select example">
                          <option selected>Select insurance</option>
                          <option value="BUPA">BUPA</option>
                          <option value="IFIC">IFIC</option>

                      </select>
                  </div>

                    <div class="form-group col-6 mt-2">
                        <label for="type">Type</label>
                        <div style="display: flex; justify-content:center; margin-top:3px;">
                            <input type="radio" id="new" name="type" value="new">
                            <label for="type" style="margin-right: 10px">New </label><br>
                            <input type="radio" id="old" name="type" value="old">
                            <label for="type">Old </label><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3" style="text-align: right">
                <p>Date: {{now()->format('Y-m-d')}}</p>
                <p>{{$klinic->name}}</p>
                <p>{{$klinic->address}}</p>
            </div>
        </div>


        <div style="margin-top: 20px;">
            <table class="table">
                <thead style="background:skyblue; color:black">
                    <tr>
                        <th class="col-3">
                            <h5>Medicine Name</h5>
                        </th>
                        <th class="col-2">
                            <h5>Type</h5>
                        </th>
                        <th class="col-4">
                            <h5>Instructions</h5>
                        </th>
                        <th class="col-2">
                            <h5>Days</h5>
                        </th>
                        <th class="col-1">
                            <h5>Add/Remove</h5>
                        </th>

                        <th class="col">
                            <a href="javascript:void(0);" class="add_medicine_button btn btn-success"
                                title="Add field">Add</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
        {{-- after clicking add button --}}
        <div class="row medicine_field_wrapper" style="display: flex;">
            <div class="col-3">
            </div>
            <div class="col-3">
            </div>
            <div class="col-3">
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var maxField = 10; //Input fields increment limitation
                var addMedicineButton = $('.add_medicine_button'); //Add button selector
                var medicinewrapper = $('.medicine_field_wrapper'); //Input field wrapper
                var x = 1; //Initial field counter is 1
                var fieldHTML =
                    '<div class="medicine row d-flex"><div class="col-3"><select id="medicine_id" name="medicine[id][]" class="form-control"> @foreach($medicines as $medicine)<option value="{{$medicine->id}}">{{$medicine->name}}</option> @endforeach</select></div><div class="col-2"><input type="text" name="medicine[medicine_type][]" class="form-control" placeholder="Medicine Type" value=""/></div><div class="col-4"><textarea type="text" name="medicine[medicine_instruction][]" class="form-control" placeholder"Enter Instruction" value=""/></textarea></div><div class="col-1"><input type="text" name="medicine[days][]" class="form-control" placeholder="Days" value=""/></div><div class="col-2"><a href="javascript:void(0);" class="remove_medicine_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html

                //Once add button is clicked
                $(addMedicineButton).click(function () {
                    //Check maximum number of input fields
                    if (x < maxField) {
                        x++; //Increment field counter
                        $(medicinewrapper).append(fieldHTML); //Add field html
                    }
                });

                //Once remove button is clicked
                $(medicinewrapper).on('click', '.remove_medicine_button', function (e) {
                    e.preventDefault();
                    $(this).closest('.medicine').remove(); //Remove field html
                    x--; //Decrement field counter
                });
            });

        </script>


        <div style="margin-top: 20px;">
            <table class="table">
                <thead style="background:#ffa0a0; color:black">
                    <tr>
                        <th class="col-3">
                            <h5>Diagnosis </h5>
                        </th>
                        <th class="col-8">
                            <h5>Instructions</h5>
                        </th>
                        <th class="col-1">
                            <h5>Add/Remove</h5>
                        </th>

                        <th class="col">
                            <a href="javascript:void(0);" class="add_diagnosis_button btn btn-success"
                                title="Add field">Add</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
        {{-- after clicking add button --}}
        <div class="row diagnosis_field_wrapper" style="display: flex;">
            <div class="col-3">
                @if ($errors->has('subject_id'))
                <span class="text-danger">{{ $errors->first('subject_id') }}</span>
                @endif
            </div>
            <div class="col-3">
                @if ($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
            </div>
            <div class="col-3">
                @if ($errors->has('number'))
                <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var maxField = 10; //Input fields increment limitation
                var addDiagnosisButton = $('.add_diagnosis_button'); //Add button selector
                var diagnosiswrapper = $('.diagnosis_field_wrapper'); //Input field wrapper
                var fieldHTML =
                    '<div class="diagnosis row d-flex"><div class="col-3"><select id="test_id" name="test[id][]" class="form-control"> @foreach($tests as $test)<option value="{{$test->id}}">{{$test->name}}</option> @endforeach</select></div><div class="col-7"><textarea type="text" name="test[test_instruction][]" class="form-control" placeholder"Enter Instruction" value=""/></textarea></div><div class="col-2"><a href="javascript:void(0);" class="remove_diagnosis_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html
                var x = 1; //Initial field counter is 1

                //Once add button is clicked
                $(addDiagnosisButton).click(function () {
                    //Check maximum number of input fields
                    if (x < maxField) {
                        x++; //Increment field counter
                        $(diagnosiswrapper).append(fieldHTML); //Add field html
                    }
                });

                //Once remove button is clicked
                $(diagnosiswrapper).on('click', '.remove_diagnosis_button', function (e) {
                    e.preventDefault();
                    $(this).closest('.diagnosis').remove(); //Remove field html
                    x--; //Decrement field counter
                });
            });

        </script>

        <div class="container" style="padding-left:25%; padding-right:25%">
            <div class="form-group mt-2" style="display: block ruby">
                <label for="fees">Visiting Fees</label>
                <input type="text" class="form-control" id="fees" name="fees" placeholder="Enter Visiting Fee">
            </div>

            <div class="form-group mt-2" style="display: block ruby">
                <label for="patient_notes">Patient Notes</label>
                <textarea type="text" class="form-control" id="patient_note" name="patient_note"
                    placeholder="Enter Note"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-sm mt-4">Save</button>


</form>
</div>
@endsection
