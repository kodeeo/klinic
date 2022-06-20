@extends('admin.master')
@section('content')
    

<h1>Edit Appointment</h1>

<form action="{{route('appointment.update',$appointment->id)}}" method="POST" enctype="multipart/form-data">
    @method('put')
    @csrf


        <div class="form-group col-6">
            <label for="name">Patient ID</label>
            <i class="text-danger">*</i>
            <input type="text" class="form-control" value="{{$appointment->p_id}}" name="p_id" placeholder="Enter Clinic Name" required>
          </div>

          <div class="form-group col-6 mt-2">
            <label for="test_category">Doctor Department</label>
            <i class="text-danger">*</i>
            <select onclick="getDoctor(this.value)" class="form-select" name="d_department" aria-label="Default select example">

            @foreach ($departments as $department)
                <option 
                @if($department->id==$appointment->d_department)
                selected
                @endif
                 value="{{$department->id}}">{{$department->name}}</option>
                @endforeach

              </select>
        </div>

        <div class="form-group col-6 mt-2">
            <label for="test_category">Doctor</label>
            <i class="text-danger">*</i>
            <select id="doctor" class="form-select" name="doctor" aria-label="Default select example">
            <option value="{{$appointment->doctor}}">{{$appointment->doctorRelation->name ?? ""}}</option>
              </select>
        </div>

          <div class="form-group col-6">
            <label for="name">Appointment Date</label>
            <i class="text-danger">*</i>
            <input type="date" class="form-control" value="{{$appointment->date}}" name="date" placeholder="Enter a phone number" required>
          </div>

          <div class="form-group row">
                                <label for="serial_no" class="col-xs-3 col-form-label">Serial No <i class="text-danger">*</i></label>
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
                                    <input type="text" class="form-control" value="{{$appointment->problem}}" name="problem" placeholder="Enter a phone number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xs-3">Status</label>
                                <div class="col-xs-9">
                                    <div class="form-check">
                                        <label class="radio-inline">
                                        <input type="radio" name="status"  {{ ($appointment->status) == 'Active' ? 'checked' : '' }}  value="Active" >Active                                        </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="status" {{ ($appointment->status) == 'Inactive' ? 'checked' : '' }} value="Inactive">Inactive                                        </label>
                                    </div>
                                </div>
                            </div>

                            
      
    <br>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>

  <script>
     function getDoctor(department)
     {
        $("#doctor").empty();
            $.ajax({
                url:'http://klinic.test/api/doctor-list/'+department,
                context:document.body,
                success:function(response){
                  
                    for(doctor of response.data){
                        console.log(doctor.name)
                        $("#doctor").append("<option value="+doctor.id+" ?? ''>"+doctor.name+"</option>")
                    }
                }
            });
     }
  </script>
  @endsection