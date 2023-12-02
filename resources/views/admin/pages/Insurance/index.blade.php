@extends('admin.master')
@section('content')
    <h1>Insurance List</h1>


    <hr>

    <div class="row" style="justify-content: space-between;">
        <div class="col">
            <a class="btn btn-primary d-print-none" href="{{ route('insurance.create') }}" class="btn btn-primary">Create
                Insurance</a>
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
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Insurance No</th>
                <th scope="col">Insurance Rate</th>
                <th scope="col">Status</th>
                <th scope="col">Remark</th>
            </tr>
        </thead>
        <tbody>
            
                    @foreach($insurance as $key=>$item)
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->insurance_no }}</td>
                            <td>{{ $item->insurance_rate}}</td>
                            <td>{{ $item->status}}</td>
                            <td>{{ $item->remark}}</td>
                 
                            <td>
                                 <div style="display: flex">
                                        <a class="btn btn-success btn-sm m-1" href="{{route('insurance.show',$item->id)}}"><i
                                            class="fa fa-eye"></i></a>
                                        <a style="margin-left: 2px" class="btn btn-warning btn-sm m-1" href="{{ route('insurance.edit',$item->id) }}"><i
                                                class="fas fa-edit"></i></a>
                                        <form action="{{ route('insurance.destroy',$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div>
                                                <button class="btn btn-danger btn-sm m-1" type="submit"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </form>
                                 </div>
                            </td>
                        </tr>
               
                     @endforeach
            <tbody>

                @foreach ($insurance as $key => $item)
                    <tr>
                        <th>{{ $key + 1 }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->service_tax }}</td>
                        <td>{{ $item->discount }}</td>
                        <td>{{ $item->remark }}</td>

                        <td>{{ $item->insurance_no }}</td>
                        <td>{{ $item->insurance_code }}</td>
                        <td>{{ $item->disease_name }}</td>
                        <td>{{ $item->disease_charge }}</td>

                        <td>{{ $item->hospital_rate }}</td>
                        <td>{{ $item->insurance_rate }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <div style="display: flex">
                                <a style="margin-left: 2px" class="btn btn-warning btn-sm m-1" href=""><i
                                        class="fas fa-edit"></i></a>
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div>
                                        <button class="btn btn-danger btn-sm m-1" type="submit"><i
                                                class="fas fa-trash"></i></button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </tbody>
    </table>

</div>
@endsection
