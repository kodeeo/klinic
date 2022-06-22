@extends('admin.master')
@section('content')


<h1>{{ __('Create Appointment') }}</h1>

<form action="{{ route('appointment.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="form-group col-6">
        <label for="name">Patient ID</label>
        <i class="text-danger">*</i>
        <input type="text" class="form-control" name="patient_id" placeholder="Enter Patient ID" required>
    </div>

    <div class="form-group col-6 mt-2">
        <label for="test_category">Doctor Department</label>
        <i class="text-danger">*</i>
        <select onclick="getDoctor(this.value)" class="form-select" name="department_id"
            aria-label="Default select example">

            @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-6 mt-2">
        <label for="test_category">Doctor</label>
        <i class="text-danger">*</i>
        <select class="form-select" name="doctor_id" aria-label="Default select example">
            <option>Select Doctor</option>
            @foreach($doctors as $item)
                <option value="{{ $item->id }}">{{ $item->first_name }} {{ $item->last_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-6">
        <label for="name">Appointment Date</label>
        <i class="text-danger">*</i>
        <input type="date" class="form-control" name="date" placeholder="Enter a phone number" required>
    </div>

    <div class="form-group row">
        <label for="serial_no" class="col-xs-3 col-form-labelSerial No"> <i class="text-danger">*</i></label>
        <div class="col-xs-9">
            <div id="serial_preview">
                <div type="button" class="btn btn-success disabled btn-sm"> 01</div>
                <div type="button" class="btn btn-success disabled btn-sm"> 02</div>
                <div type="button" class="btn btn-success disabled btn-sm"> 03</div>...
                <div type="button" class="slbtn btn btn-success disabled btn-sm"> N</div>

            </div>
            <input type="hidden" name="schedule_id" id="schedule_id">
            <input type="hidden" name="serial_no" id="serial_no">
        </div>
    </div>

    <div class="form-group row">
        <label for="problem" class="col-xs-3 col-form-label">Problem</label>
        <div class="col-xs-9">
            <textarea name="problem" class="form-control" placeholder="Problem" maxlength="140" rows="7"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-xs-3">Status</label>
        <div class="col-xs-9">
            <div class="form-check">
                <label class="radio-inline">
                    <input type="radio" name="status" value="Active" checked="&quot;checked&quot;">Active </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="Inactive">Inactive </label>
            </div>
        </div>
    </div>



    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    function getDoctor(department) {
        $("#doctor").empty();
        $.ajax({
            url: 'http://klinic.test/api/doctor-list/' + department,
            context: document.body,
            success: function (response) {

                for (doctor of response.data) {
                    console.log(doctor.name)
                    $("#doctor").append("<option value=" + doctor.id + " ?? ''>" + doctor.name +
                        "</option>")
                }
            }
        });
    }

</script>
@endsection
