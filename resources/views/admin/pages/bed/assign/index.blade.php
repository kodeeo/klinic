@extends('admin.master')
@section('content')

<h1>{{ __('Assigned Bed List') }}</h1>
<hr>

<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a class="btn btn-primary d-print-none" href="{{ route('assign.bed.create') }}"
            class="btn btn-primary">+ Assign Bed</a>
    </div>

    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info d-print-none" href="#">
            CSV
        </a>
        <a class="btn btn-info d-print-none" href="#">
            Excel
        </a>
        <a class="btn btn-info d-print-none" href="#">
            PDF
        </a>
        <button class="btn btn-info d-print-none" onclick="{window.print()}">Print</button>
    </div>
</div>
<br><br>

<div style="overflow-x:auto">
    <table class="table" id="dataTable" style="text-align: center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">SL.NO</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Ward</th>
                <th scope="col">Type</th>
                <th scope="col">Cabin Type</th>
                
                <th scope="col">Assign Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
       
          @foreach($assign_beds as $key=>$item)
              <tr>
                  <th>{{ $key+1 }}</th>
                  <td>{{ $item->patient_id }}</td>
                  <td>{{ $item->ward->name ??'null' }}</td>
               
                    <td>{{ $item->bed->type ??'null' }}</td>
                    
                  <td>{{ $item->bed->cabin_type ??'null' }}</td>

                
                  <td>{{ $item->assign_date }}</td>
                  
                    <td>
                        <div style="display: flex">
                            <a style="margin-left: 2px" class="btn btn-warning btn-sm m-1" href="{{route('assign.bed.edit',$item->id)}}"><i
                                    class="fas fa-edit"></i></a>
                            <a style="margin-left: 2px" class="btn btn-warning btn-sm m-1" href="{{route('assign.bed.delete',$item->id)}}"><i
                                    class="fas fa-destroy"></i></a>
                       
                        </div>
                    </td>
                </tr>
      
            @endforeach
        </tbody>
      </table>
      
      </div>
      @endsection
                  
                
    
              
                 
              
              
               
