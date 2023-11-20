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
        <h2>Assign Bed</h2>
        <form action="{{route('assign.bed.store',$bedstatus->id ??'null' )}}" method="post">
          @csrf
          <div class="d-flex justify-content-between">
            <div class="form-group mb-3">
              <label for="patient_id">Patient id</label>
              <input type="string" class="form-control" id="exampleInputfirstname" name="patient_id"/>
            </div>
            <div class="form-group">
              <label for="Ward">Ward </label>
              <input type="integer" class="form-control" id="exampleInputlastname"  value="{{$ward->id}}" name="ward_id"/>
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="phoneno">Assign Date</label>
            <input type="date" class="form-control date-width" id="exampleInputphoneno" name="assign_date"/>
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


