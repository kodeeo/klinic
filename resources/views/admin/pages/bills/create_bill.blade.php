@extends('admin.master')
@section('content')
<div class="panel-body">
    <h3><b>Old Patient</b></h3>
    <hr>
    <form action="{{route('bill.store')}}" class="billig-form" method="post" accept-charset="utf-8">
        @csrf
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row ">
                    <div class="col-md-4 bg-success">
                    <h5>Patient Name or ID :</h5>
                    </div>
                    
                    <div class="col-md-8">
                        <input type="search" name="patient_name" class="form-control" placeholder=" Search Patient Name or ID">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
        <h3><b>Patient Details</b></h3>
        <hr>
            <div class="col-md-12">
                <table class="table table-bordered border-success">
                    <tbody>
                        <tr>
                            <td>Reg.NO.</td>
                            <td>123</td>
                            <td>Operation</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>Maksud</td>
                            <td>Phone</td>
                            <td>01718</td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>22</td>
                            <td>Gender</td>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>Uttara</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td>Doctor Name</td>
                            <td colspan="3"></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>

<div class="row">
<h3 class="bg-success p-1">Services</h3>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="service" class="form-control" placeholder="Service Name">
            </div>
            <div class="col-md-4">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col-md-4">
               <button type="submit" class="btn btn-primary">Add Service</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered border-success mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>X-ray</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Total</b></td>
                    <td>1000</td>
                </tr>
                <tr> 
                    <td class="p-3" colspan="2">
                        <div class="row">
                            <div class="col-md-4">
                                <b>Report Delivery Date:</b> 
                                <span><input type="date" name="date" class="form-control"></span> 
                            </div>
                            <div class="col-md-4">
                                <span><b>Time:</b>
                                <input type="time" name ="time" class="form-control"></span>
                            </div>
                            <div class="col-md-2">
                                <label>Format</label>
                                <select name="format" class="form-control" id="">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>
                            </div>
                        </div>
                    </td>

                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <h3 class="block-title-2" style="font-family: &quot;Alegreya Sans&quot;, Bangla530, sans-serif;">Advance
            Payment</h3>
        <div class="table-responsive table-height">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Receipt No</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody id="advance_data">
                </tbody>
            </table>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="form-group row">
            <label class="col-sm-4 col-md-4 col-form-label">Payment Method</label>
            <div class="col-sm-8 col-md-8">
                <select name="payment_method" class="form-control basic-single " tabindex="-1" aria-hidden="true">
                    <option value="" selected="selected">Select Option</option>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Cheque">Cheque</option>
                </select>

            </div>
        </div>
        <div class="form-group row">
            <label for="card_cheque_no" class="col-sm-4 col-md-4 col-form-label">Card / Cheque
                No.</label>
            <div class="col-sm-8 col-md-8">
                <input name="card_cheque_no" class="form-control" type="text" id="card_cheque_no" placeholder="Card / Cheque No.">
            </div>
        </div>
        <div class="form-group row">
            <label for="receipt_no" class="col-sm-4 col-md-4 col-form-label">Receipt No</label>
            <div class="col-sm-8 col-md-8">
                <input name="receipt_no" class="form-control" type="text" value="" id="receipt_no" placeholder="Receipt No">
            </div>
        </div>
    </div>


    <div class="col-sm-4">
        <div class="table-responsive m-b-20">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Total</th>
                        <th>Receipt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Total</td>
                        <td><input name="total_amount" type="number" class="form-control grand-calc" id="total" value="0.00"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-group">
                                <div class="input-group-addon">Discount %</div>
                                <input type="number" id="discountPercent" required="" autocomplete="off" class="form-control tax-discount-calc" value="0">
                            </div>
                        </td>
                        <td><input name="discount" type="number" class="form-control grand-calc" id="discount" value="0.00"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="input-group">
                                <div class="input-group-addon">Tax %</div>
                                <input type="number" id="taxPercent" required="" autocomplete="off" class="form-control tax-discount-calc" value="0">
                            </div>
                        </td>
                        <td><input name="tax" type="number" class="form-control grand-calc" id="tax" value="0.00"></td>
                    </tr>
                    <tr>
                        <td>Pay Advance</td>
                        <td><input type="number" class="form-control grand-calc" id="pay_advance" value="0.00"></td>
                    </tr>
                    <tr>
                        <td>Payable</td>
                        <td><input type="number" class="form-control grand-calc" id="payable" value="0.00"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="form-group">
    <textarea name="remarks" class="form-control" rows="5" placeholder="Notes"></textarea>
</div>
<div class="form-group">
    <div class="form-check">
        <label class="radio-inline"><input type="radio" name="status" value="0" checked="">Unpaid</label>
        <label class="radio-inline"><input type="radio" name="status" value="1">Paid</label>
    </div>
</div>
<div class="">
    <button type="submit" class="btn btn-success w-md">Submit</button>
</div>

</form>
</div>

@endsection
