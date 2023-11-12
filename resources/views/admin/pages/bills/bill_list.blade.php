@extends('admin.master')
@section('content')
    <h4>Bill List<h4>
            <table class="table" id="dataTable" style="text-align: center;">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Patient Name</th>
                    <th scope="col">AID</th>
                    <th scope="col">Bill ID</th>
                    <th scope="col">Bill Date</th>
                    <th scope="col">Total</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Tax</th>
                    <th scope="col">Status</th>
                    <th class="d-print-none" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bills as $key=>$bill)

                    <tr>

                        <th>{{ $key+1 }}</th>
                        <td>{{ $bill->type }}</td>
                        <td>{{ $bill->capacity }}</td>
                        <td>{{ $bill->charge }}</td>
                        <td>{{ $bill->status }}</td>

                        <td>
                            <div style="display: flex; justify-content: center">
                                <a class="btn btn-success btn-sm m-1"
                                   href="{{ route('bill.show',$bill->id) }}"><i class="fas fa-eye"></i></a>
                                <a style="margin-left: 2px" class="btn btn-warning btn-sm m-1"
                                   href="{{ route('bill.edit',$bill->id) }}"><i class="fas fa-edit"></i></a>
                                <form
                                    action="{{ route('bill.destroy',$bill->id) }}" method="POST">
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
                </tbody>
            </table>
@endsection
