@extends('admin.master')
@section('content')


<h1>{{ __('Assign Test') }}</h1>

<form action="{{ route('assign.test.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group mt-2 col-4">
            <label for="patient_id">Patient ID <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="patient_id" placeholder="Enter Patient ID" required>
        </div>

        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-10">
                            <h5>Test Name</h5>
                        </th>
                        <th class="col-2">
                            <h5>Add/Remove</h5>
                        </th>

                        <th class="col-1">
                            <a href="javascript:void(0);" class="add_button btn btn-info" title="Add field">Add</a>
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
        <div class="row field_wrapper" style="display: flex;">
            <div class="col-3">
                @if($errors->has('subject_id'))
                    <span class="text-danger">{{ $errors->first('subject_id') }}</span>
                @endif
            </div>
            <div class="col-3">
                @if($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var maxField = 10; //Input fields increment limitation
                var addButton = $('.add_button'); //Add button selector
                var wrapper = $('.field_wrapper'); //Input field wrapper
                var fieldHTML =
                    '<div class="test row d-flex"><div class="col-10"><select id="test_id" name="test_id[]" class="form-control"> @foreach($tests as $test)<option value="{{ $test->id }}">{{ $test->name }}</option> @endforeach</select></div><div class="col-1"><a href="javascript:void(0);" class="remove_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html 


                var x = 1; //Initial field counter is 1

                //Once add button is clicked
                $(addButton).click(function () {
                    //Check maximum number of input fields
                    if (x < maxField) {
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); //Add field html
                    }
                });

                //Once remove button is clicked
                $(wrapper).on('click', '.remove_button', function (e) {
                    e.preventDefault();
                    $(this).closest('.test').remove(); //Remove field html
                    x--; //Decrement field counter
                });
            });

        </script>

        <div class="form-group col-12 mt-2">
            <label for="note">Note</label>
            <textarea type="text" class="form-control" name="note" placeholder="Enter Note" required></textarea>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
