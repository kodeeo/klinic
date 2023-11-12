@extends('admin.master')
@section('content')

<h1>{{__('Medicine Purchase')}}</h1>
<hr>
<br>

<div>
    <form action="{{route('medicine_purchase.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="id">Patient Id <span style="color: red">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="timepicker form-control" id="id" name="patient_id"
                        placeholder="Enter Patient id">
                </div>
            </div>
            <!-- <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label" for="name">Medicine Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="medicine_name"
                        placeholder="Enter Medicine Name">
                </div>
            </div> -->

            <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label" for="status">Package Including <span
                        style="color: red">*</span></label>
                <div class="col-sm-10">
                    <table class="table">
                        <thead style="background: skyblue; color:black">
                            <tr>
                                <th class="col-4">
                                    <h5>Medicine</h5>
                                </th>
                                <th class="col-3">
                                    <h5>Quantity</h5>
                                </th>
                                <th class="col-2">
                                    <h5>Total</h5>
                                </th>
                                <th class="col-3">
                                    <h5>Add/Remove</h5>
                                </th>

                                <th class="col">
                                    <a href="javascript:void(0);" class="add_button btn btn-success"
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

            </div>

            {{-- after clicking add button --}}
            <div class="row field_wrapper" style="display: flex;">
                <div class="col-3">
                </div>
                <div class="col-3">
                </div>
                <div class="col-3">
                </div>

            </div>

            <div class="form-group row mt-2">
                <label class="col-sm-2 col-form-label" for="discount">Discount <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="discount" name="discount"
                        placeholder="Enter Medicine Discount">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label class="col-sm-4">Status</label>
                <div class="col-sm-4">
                    <div class="form-check">
                        <label class="radio-inline"><input type="radio" name="status" checked>Active</label>
                        <label class="radio-inline"><input type="radio" name="status">Inactive</label>
                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    var maxField = 10; //Input fields increment limitation
                    var addButton = $('.add_button'); //Add button selector
                    var wrapper = $('.field_wrapper'); //Input field wrapper
                    var fieldHTML =
                        '<div class="medicine row d-flex"><div class="col-sm-2"></div><div class="col-3"><select id="medicines" name="medicine_id[]" class="form-control"> @foreach($medicines as $item)<option value="{{$item->id}}">{{$item->name}}</option> @endforeach</select></div><div class="col-2"><input type="number" name="medicine_quantity[]" class="form-control" placeholder="Enter Quantity" value=""/></div><div class="col-2"></div><div class="col-3"><a href="javascript:void(0);" class="remove_button btn btn-danger">Remove</a></div><hr class="row" style="height:1px; margin-left:0.5rem; margin-top: 1rem;"></div>'; //New input field html 
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
                        $(this).closest('.medicine').remove(); //Remove field html
                        x--; //Decrement field counter
                    });
                });

            </script>


        </div>
        <button type="submit" class="btn btn-success btn-sm mt-4" style="text-align:right;">Save</button>
    </form>
</div>
@endsection
