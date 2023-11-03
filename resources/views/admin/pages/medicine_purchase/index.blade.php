@extends('admin.master')
@section('content')
   
       


        <div class="row" style="justify-content: space-between;">
  <div class="col">
  <a class="btn btn-success" href="{{route('medicine_purchase.create')}}">Medicine Purchase</a>
  </div>

  <div class="col-4 dt-buttons btn-group">
      <a class="btn btn-info" href="">
        CSV
      </a>
      <a class="btn btn-info" href="">
        Excel
      </a>
      <a class="btn btn-info" href="">
        PDF
      </a>
      <a class="btn btn-info" href="">
        Print
      </a>
  </div>
</div>
<br><br>
<div>


        <table class="table" id="dataTable" style="text-align: center">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Patient_id</th>
                <th scope="col">Medicine Name</th>
                <th scope="col">Medicine Category</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
      @foreach($buymedicine as $key=>$data)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$data->patient_id}}</td>
                      <td>{{$data->medicine->name}}</td>
                      <td>{{$data->medicine->category_id}}</td>
                      <td>{{$data->quantity}}</td>
                      <td></td>
                     
                      <td>
                        <div style="display: flex; justify-content: center">
                        <a  class="btn btn-success btn-sm m-1" href=""><i class="fas fa-eye"></i></a>
                        <a  class="btn btn-warning btn-sm m-1" href=""><i class="fas fa-edit"></i></a>
                      
                                <button class="btn btn-danger btn-sm m-1" type="submit"><i class="fas fa-trash"></i></button>
                        
                        </div>
                      </td>
                  </tr>
            @endforeach
            </tbody>
          </table>
       </div>
@endsection