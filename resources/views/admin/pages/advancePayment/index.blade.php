@extends('admin.master')
@section('content')

<h1>{{__('Advance Payment List')}}</h1>
<hr>
<div class="row" style="justify-content: space-between;">
    <div class="col">
        <a class="btn btn-success" href="{{route('advancepayment.create')}}">Pay Advance</a>
    </div>

    <div class="col-4 dt-buttons btn-group">
        <a class="btn btn-info" href="#">
            CSV
        </a>
        <a class="btn btn-info" href="#">
            Excel
        </a>
        <a class="btn btn-info" href="#">
            PDF
        </a>
        <button class="btn btn-info" onclick="{window.print()}">Print</button>

    </div>
</div>
<br><br>
<div style="overflow-x:auto">
    <table class="table" id="dataTable" style="text-align: center;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">SL.NO</th>
                <th scope="col">Reciept No</th>
                <th scope="col">Admission ID</th>
                <th scope="col">Patient ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Payment Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($advancePayment as $key=>$item)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$item->reciept_no}}</td>
                <td>{{$item->admission_id}}</td>
                <td>{{$item->patient_id}}</td>
                <td>{{$item->amount}}</td>
                <td>{{$item->payment_method}}</td>
                <td class="col-2 ">{{$item->created_at->format('d-m-Y h:i a')}}</td>
                <td>{{$item->status}}</td>

                <td>
                    <div style="display: flex">
                        <a style="margin-left: 3px" class="btn btn-warning btn-sm" href="#"><i
                                class="fas fa-edit"></i></a>
                        <form style="margin-left: 3px" action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <div>
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                            </div>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
