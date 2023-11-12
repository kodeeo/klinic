@extends('admin.master')
@section('content')
    <div class="panel-body">
        <form action="" class="billig-form" method="post" accept-charset="utf-8">
            @csrf
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="admission_id"
                                               value="{{$admission->admission_id}}" name="admission_id"
                                               placeholder="AID" readonly>
                                        <span class="input-group-btn"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="patient_id"
                                               value="{{$admission->patient_id}}" placeholder="Patient ID" disabled="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <input value="{{date('Y-m-d')}}" name="bill_date" type="date"
                                       class="form-control datepicker hasDatepicker" id="bill_date"
                                       placeholder="Bill Date">
                            </div>
                            <br>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="patient_name" placeholder="Patient Name"
                                       disabled value="{{$admission->patients->full_name}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="form-group">
                                <input type="text" value="{{$admission->patients->mobile}}" class="form-control"
                                       id="mobile" placeholder="Mobile Number" disabled>
                            </div>
                            <br>
                        </div>

                        {{--                    <div class="col-xs-12 col-sm-12 col-md-6">--}}
                        {{--                        <div class="form-group">--}}
                        {{--                            <textarea class="form-control" rows="3" placeholder="Address" id="address" disabled=""></textarea>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="col-xs-12 col-sm-12 col-md-6">--}}
                        {{--                        <div class="form-group row">--}}
                        {{--                            <label for="sex" class="col-sm-4 col-md-2 col-form-label">Sex</label>--}}
                        {{--                            <div id="sex" class="col-sm-8 col-md-10 mt-1">--}}
                        {{--                                <div class="form-check form-check-inline">--}}
                        {{--                                    <input class="form-check-input" type="radio" id="male" disabled="">--}}
                        {{--                                    <label for="male">Male</label>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="form-check form-check-inline">--}}
                        {{--                                    <input class="form-check-input" type="radio" id="female" disabled="">--}}
                        {{--                                    <label for="female">Female</label>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                            <div class="form-group">
                                <input value="{{$admission->doctors->full_name. ' - '.$admission->doctors->gov_reg_no}}"
                                       type="text" class="form-control" id="doctor_name" placeholder="Doctor Name"
                                       disabled="">
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="avatar-img center-block">
                        <img id="picture" src="{{$admission->patients->patient_image}}"
                             class="img-responsive w-50 img-hw-200" alt="patient">
                    </div>
                </div>
            </div>

            <!--<hr>-->
            <div class="form-horizontal">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group row">
                            <label for="admission_date" class="col-sm-4 col-form-label">Admission Date</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="date" value="{{$admission->admission_date}}"
                                       placeholder="Admission Date" id="admission_date" disabled="">
                            </div>
                        </div>
                    </div>
                    {{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--                    <div class="form-group row">--}}
                    {{--                        <label for="package_name" class="col-sm-4 col-form-label">Package Name</label>--}}
                    {{--                        <div class="col-sm-8">--}}
                    {{--                            <input class="form-control" id="package_name" type="text" value="" placeholder="Package Name" disabled="">--}}
                    {{--                            <input name="package_id" type="hidden" id="package_id">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--                    <div class="form-group row">--}}
                    {{--                        <label for="total_days" class="col-sm-4 col-form-label">Total Days<br>&nbsp;</label>--}}
                    {{--                        <div class="col-sm-8">--}}
                    {{--                            <input class="form-control" type="text" placeholder="Total Days" id="total_days" disabled="">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="form-group row">
                            <label for="discharge_date" class="col-sm-4 col-form-label">Discharge Date</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" value="{{$admission->discharge_date}}"
                                       placeholder="Discharge Date" id="discharge_date" disabled="">
                            </div>
                        </div>
                    </div>
                    {{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--                    <div class="form-group row">--}}
                    {{--                        <label for="insurance_name" class="col-sm-4 col-form-label">Insurance Name</label>--}}
                    {{--                        <div class="col-sm-8">--}}
                    {{--                            <input class="form-control" type="text" value="" placeholder="Insurance Name" id="insurance_name" disabled="">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
                    {{--                    <div class="form-group row">--}}
                    {{--                        <label for="policy_no" class="col-sm-4 col-form-label">Policy No.</label>--}}
                    {{--                        <div class="col-sm-8">--}}
                    {{--                            <input class="form-control" type="text" value="" placeholder="Policy No." id="policy_no" disabled="">--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--            </div>--}}
                    {{--        </div>--}}
                    <br>


                    <div id="table" class="table-responsive mt-2" style="overflow: auto;">

                        <table id="fixTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="100"
                                    style="background-color: rgb(235, 237, 242); position: relative; top: 0px;"><i
                                        class="fa fa-cogs" style="font-family: FontAwesome, Bangla530, sans-serif;"></i>
                                </th>
                                <th style="background-color: rgb(235, 237, 242); position: relative; top: 0px;">Service
                                    Name
                                </th>
                                <th style="background-color: rgb(235, 237, 242); position: relative; top: 0px;">
                                    Quantity
                                </th>
                                <th style="background-color: rgb(235, 237, 242); position: relative; top: 0px;">Rate
                                </th>
                                <th style="background-color: rgb(235, 237, 242); position: relative; top: 0px;">Sub
                                    Total
                                </th>
                            </tr>
                            </thead>
                            <tbody id="table_body">
                            <tr>
                                <td>
                                    <div class="btn btn-group">
                                        <button type="button" class="table-add btn btn-sm btn-success"
                                                onclick="create_tr('table_body')">+
                                        </button>
                                        <button type="button" class="remove btn btn-sm btn-danger"
                                                onclick="remove_tr(this)">-
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <select name="service" id="" class="form-control service">
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control  quantity" type="number" name="quantity">
                                </td>
                                <td><input class="form-control  amount" type="number" name="amount"></td>
                                <td><input class="form-control  subtotal" type="number" name="subtotal"></td>

                            </tr>

                            </tbody>
                        </table>
                    </div>


                    <div class="row">
                        <div class="col-sm-4">
                            <h3 class="block-title-2"
                                style="font-family: &quot;Alegreya Sans&quot;, Bangla530, sans-serif;">Advance
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
                                    <select name="payment_method"
                                            class="form-control basic-single select2-hidden-accessible"
                                            required="required" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="selected">Select Option</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Card">Card</option>
                                        <option value="Cheque">Cheque</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                                   dir="ltr" style="width: 233.637px;">
                        <span class="selection">
                            <span class="select2-selection select2-selection--single" role="combobox"
                                  aria-haspopup="true" aria-expanded="false" tabindex="0"
                                  aria-labelledby="select2-payment_method-vy-container">
                                <span class="select2-selection__rendered" id="select2-payment_method-vy-container"><span
                                        class="select2-selection__placeholder">Select option</span></span><span
                                    class="select2-selection__arrow" role="presentation"><b role="presentation"
                                                                                            style="font-family: themify, Bangla530, sans-serif;"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="card_cheque_no" class="col-sm-4 col-md-4 col-form-label">Card / Cheque
                                    No.</label>
                                <div class="col-sm-8 col-md-8">
                                    <input name="card_cheque_no" class="form-control" type="text" id="card_cheque_no"
                                           placeholder="Card / Cheque No.">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="receipt_no" class="col-sm-4 col-md-4 col-form-label">Receipt No</label>
                                <div class="col-sm-8 col-md-8">
                                    <input name="receipt_no" class="form-control" type="text" value="" id="receipt_no"
                                           placeholder="Receipt No">
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
                                        <td><input name="total" type="number" class="form-control grand-calc" id="total"
                                                   value="0.00"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-addon">Discount %</div>
                                                <input type="number" id="discountPercent" required="" autocomplete="off"
                                                       class="form-control tax-discount-calc" value="0">
                                            </div>
                                        </td>
                                        <td><input name="discount" type="number" class="form-control grand-calc"
                                                   id="discount" value="0.00"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-addon">Tax %</div>
                                                <input type="number" id="taxPercent" required="" autocomplete="off"
                                                       class="form-control tax-discount-calc" value="0">
                                            </div>
                                        </td>
                                        <td><input name="tax" type="number" class="form-control grand-calc" id="tax"
                                                   value="0.00"></td>
                                    </tr>
                                    <tr>
                                        <td>Pay Advance</td>
                                        <td><input type="number" class="form-control grand-calc" id="pay_advance"
                                                   value="0.00"></td>
                                    </tr>
                                    <tr>
                                        <td>Payable</td>
                                        <td><input type="number" class="form-control grand-calc" id="payable"
                                                   value="0.00"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="note" class="form-control" rows="5" placeholder="Notes"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="radio-inline"><input type="radio" name="status" value="0"
                                                               checked="">Unpaid</label>
                            <label class="radio-inline"><input type="radio" name="status" value="1">Paid</label>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-success w-md">Submit</button>
                    </div>

        </form>
    </div>
    <script>
        function create_tr(table_id) {
            let table_body = document.getElementById(table_id),
                first_tr = table_body.firstElementChild
            tr_clone = first_tr.cloneNode(true);

            table_body.append(tr_clone);

            clean_first_tr(table_body.firstElementChild);
        }

        function clean_first_tr(firstTr) {
            let children = firstTr.children;

            children = Array.isArray(children) ? children : Object.values(children);
            children.forEach(x => {
                if (x !== firstTr.lastElementChild) {
                    x.firstElementChild.value = '';
                }
            });
        }

        function remove_tr(This) {
            if (This.closest('tbody').childElementCount == 1) {
                alert("You Don't have Permission to Delete This ?");
            } else {
                This.closest('tr').remove();
            }
        }
    </script>
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });
        $(".service").change(function (e) {
            e.preventDefault();
            $(this).parents("tr").find("input[name='amount']").val('500');

        });


    </script>

@endpush
{{--<tbody id="table_body">--}}
{{--<tr class="c1">--}}

{{--    <td>--}}
{{--        <div class="btn btn-group">--}}
{{--            <button type="button"  class="table-add btn btn-sm btn-success" onclick="create_tr('table_body')">+</button>--}}
{{--            <button type="button"  class="remove btn btn-sm btn-danger" onclick="remove_tr(this)">-</button>--}}
{{--        </div>--}}
{{--    </td>--}}


{{--    <td>--}}
{{--        <input name="quantity[]" class="form-control quantity item-calc" type="text" placeholder="Quantity" value="1" required="">--}}
{{--    </td>--}}
{{--    <td>--}}
{{--        <input class="form-control" type="number" class="newQty" name="newQty">--}}

{{--    </td>--}}
{{--    <td>--}}
{{--        <input name="subtotal[]" class="form-control subtotal" type="text" placeholder="Sub" total="" value="0.00" required="">--}}
{{--    </td>--}}
{{--</tr>--}}

{{--</tbody>--}}
