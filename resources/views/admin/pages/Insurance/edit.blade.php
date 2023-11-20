@extends('admin.master')
@section('content')

<div class="panel panel-default thumbnail">
<h1>Insurance Edit Form</h1>
<hr>
    <div class="panel-heading no-print">
        <div class="btn-group">
            <a class="btn btn-primary" href="{{route('insurance.index')}}"><i class="fa fa-list" style="font-family: FontAwesome, Bangla871, sans-serif;"></i> Insurance List </a>
        </div>
    </div>
    <form action="{{route('insurance.update',$insurence->id)}}" method="post">
    @method('put')
        @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="insurance_name" class="col-xs-3 col-form-label">Insurance Name <i class="text-danger">
                        *</i></label>
                <input name="name" type="string" class="form-control" id="insurance_name"
                    placeholder="Insurance Name" value="{{ $insurence->name }}">
            </div>

            <div class="form-group col-6">
                <label for="service_tax" class="col-xs-3 col-form-label">Service Tax(%)</label>
                <input name="service_tax" type="integer" class="form-control" id="service_tax" placeholder="Service Tax"
                value="{{ $insurence->service_tax }}">
            </div>

            <div class="form-group col-6">
                <label for="discount" class="col-xs-3 col-form-label">Discount(%)</label>
                <input name="discount" type="integer" class="form-control" id="discount" placeholder="Discount" value="{{ $insurence->discount }}">
            </div>

            <div class="form-group col-6">
                <label for="remark" class="col-xs-3 col-form-label">Remark</label>
                <textarea name="remark" type="string" class="form-control" placeholder="Remark" rows="7">
                    {{ $insurence->remark }}
                </textarea>
            </div>

            <div class="form-group col-6">
                <label for="insurance_no" class="col-xs-3 col-form-label">Insurance No.</label>
                <input name="insurance_no" type="integer" class="form-control" id="insurance_no"
                    placeholder="Insurance No." value="{{ $insurence->insurance_no }}">
            </div>

            <div class="form-group col-6">
                <label for="insurance_code" class="col-xs-3 col-form-label">Insurance Code</label>
                <input name="insurance_code" type="integer" class="form-control" id="insurance_code"
                    placeholder="Insurance Code" value="{{ $insurence->insurance_code }}">
            </div>

            {{-- <div class="form-group row">
                <div data-role="dynamic-fields"> --}}
                    {{-- <div class="form-inline">
            <label for="disease_charge" class="col-xs-3 col-form-label">Disease Charge</label>
            <div class="col-xs-9" id="disease_charge">
                <div class="row">
                    <div class="col-4">
                        <input name="disease_name" type="string" class="form-control"
                            placeholder="Disease Name" value="">
                    </div>
                    <div class="col-4">
                        <input name="disease_charge" type="integer" class="form-control"
                            placeholder="Disease Charge" value="">
                    </div>
                    <div class="col-4">
                        <div class="btn-group">
                            <button type="button" class="btn  btn-info add-disease">+</button>
                            <button type="button" class="btn  btn-danger remove-disease">-</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
                {{-- </div>
            </div> --}}

            <label for="disease_charge" class="col-xs-3 col-form-label">Disease Charge</label>
            <div class="form-group">
                <div data-role="dynamic-fields">
                    <div class="form-inline">
                        <div class="row">
                            <div class="col-4">
                                <input name="disease_name" type="string" class="form-control" placeholder="Disease Name" value="{{ $insurence->disease_name}}">
                            </div>
                            <div class="col-4">
                                <input name="disease_charge" type="integer" class="form-control" placeholder="Disease Charge" value="{{ $insurence->disease_charge}}">
                            </div>
                            <div class="col-4">
                                <div class="btn-group">
                                    <button type="button" class="btn  btn-info add-disease" data-role="add">+</button>
                                    <button type="button" class="btn  btn-danger remove-disease" data-role="remove">-</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="form-group col-6">
                <label for="hospital_rate" class="col-xs-3 col-form-label">Hospital Rate</label>
                <input name="hospital_rate" type="integer" class="form-control" id="hospital_rate"
                    placeholder="Hospital Rate" value="{{ $insurence->hospital_rate }}">
            </div>

            <div class="form-group col-6">
                <label for="insurance_rate" class="col-xs-3 col-form-label">Insurance Rate</label>
                <input name="insurance_rate" type="integer" class="form-control" id="insurence_rate"
                    placeholder="Insurance Rate" value="{{ $insurence->insurance_rate }}">
            </div>

            <div class="form-group col-6">
                <label for="total" class="col-xs-3 col-form-label">Total</label>
                <input name="total" type="integer" class="form-control" id="total" placeholder="Total" value="{{ $insurence->total }}">
            </div>
            <div class="form-group col-6 mt-4">
                <div class="form-group row mt-2">
                    <label class="col-sm-1">Status</label>
                    <div class="col-sm-6">
                        <div class="form-check">
                            <label class="radio-inline"><input type="radio" name="status" checked>Active</label>
                            <label class="radio-inline"><input type="radio" name="status">Inactive</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row mt-2">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
<script>
    $(function() {
 // Remove button click
 $(document).on(
     'click',
     '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
     function(e) {
         e.preventDefault();
         $(this).closest('.form-inline').remove();
     }
 );
 // Add button click
 $(document).on(
     'click',
     '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
     function(e) {
         e.preventDefault();
         var container = $(this).closest('[data-role="dynamic-fields"]');
         new_field_group = container.children().filter('.form-inline:first-child').clone();
         new_field_group.find('input').each(function(){
             $(this).val('');
         });
         container.append(new_field_group);
     }
 );
});

</script>
    @endsection