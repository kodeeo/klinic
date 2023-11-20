@extends('admin.master')
@section('content')


    <style>
      .container {
        max-width: 600px;
        border-radius: 10px;
      }
      .date-width {
        width: 274px;
      }
      input[type="radio"] {
        display: none;
      }

      .bedinform {
        padding: 0.3em;
        display: inline-block;
        border: 1px solid grey;
        cursor: pointer;
        background-color: #66FF99;
      }

      

      .blank-label {
        display: none;
      }

      input[type="radio"]:checked + label {
        background: orange;
        
      }
    </style>
  </head>
  <body>
    <body>
      <div class="container mt-5 shadow-sm p-3">
        <h2>Assign Bed Edit</h2>
        <form action="{{route('assign.bed.update',$bedstatus->id ??'null' )}}" method="post">
          @method('put')
          @csrf
          <div class="d-flex justify-content-between">
            <div class="form-group mb-3">
              <label for="patient_id">Patient id</label>
              <input type="string" value="{{$find->patient_id}}" class="form-control" id="exampleInputfirstname" name="patient_id"/>
            </div>
            <div class="form-group mb-6">
                <label for="ward">Ward</label>
                <select name="ward_id" id="" class='form-control' value="{{$find->ward->name}}">
                        @foreach($wards as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                        @endforeach
                    </select>
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="phoneno">Assign Date</label>
            <input type="date" value="{{$find->assign_date}}" class="form-control date-width" id="exampleInputphoneno" name="assign_date"/>
          </div>
          <!-- bed list -->

          
          <h4>Bed</h4>
          <div class="mb-3">
          @foreach($beds as $data)
         <input type="radio" id="bed1" name="bed_id" value="{{$data->id}}" />
            <label class="bedinform" for="bed1">
                {{$data->type}}-{{$data->id}}
                {{$data->capacity}}

            
            </label>
            @endforeach
          </div>
      
       
          <!-- bed list -->
            <h4>Cabin</h4>
          <div class="mb-3">
          @foreach($cabins as $data)
         <input type="radio" id="cabin" name="bed_id" value="{{$data->id}}" />
            <label class="bedinform" for="cabin">
            {{$data->type}}-{{$data->id}}
                {{$data->capacity}}

                
            </label>

           
            @endforeach
          </div>
          
          
          
          <div class="form-group mb-3">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="create">Submit</button>
        </form>
      </div>
    </body>
 
  </body>
</html>
@endsection


