@extends('admin.master')
@section('content')



        <h3>{{__('Package Details')}}</h3>
        <h5>Package Name: {{ $package->name }}</h5>
        <h5>Description: {{ $package->description }}</h5>
       
        <h5>Status: {{ $package->status }}</h5>
        <h5>Service Quantity: {{ $package->service_quantity }}</h5>
        <h5>Discount: {{ $package->discount }}</h5>



        <div>


        <table class="table" id="dataTable" style="text-align: center">
            <thead>
              <tr class="table-danger">
                <th scope="col">ID</th>
                <th scope="col">Service Name</th>
               
                <th scope="col">Quantity</th>
                <th scope="col">Rate</th>
               
              </tr>
            </thead>
            <tbody>
      @foreach($service as $key=>$data)
                  <tr class="table-primary">
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$data->service_name}}</td>
                      <td>{{$data->service_quantity}}</td>
                      <td>{{$data->service_rate}}</td>
                      
                      </tr>
            @endforeach
            </tbody>
          </table>
       </div>
        

      
      
      
      
      
        @endsection