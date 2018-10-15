@extends('layout')

@section('title','|manage bank')


@section('content')
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Bank transaction </h4>
</div>
</div>
<form action="{{route('bankTranstionSave')}}" class="form-vertical" id="insert_deposit" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="panel-body">

<div class="form-group row">
<label for="date" class="col-sm-3 col-form-label">Date <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" class="form-control datepicker" name="date" id="date" required="" placeholder="Date" value="10-09-2018"/>
</div>
</div>

<div class="form-group row">
<label for="account_type" class="col-sm-3 col-form-label">Account Type <i class="text-danger">*</i></label>
<div class="col-sm-6">
<select class="form-control" id="account_type" name="account_type">
<option value="Debit(+)">Debit (+)</option>
<option value="Credit(-)">Credit (-)</option>
</select>
</div>
</div>

<div class="form-group row">
<label for="bank_name" class="col-sm-3 col-form-label">Bank Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<select class="form-control" name="bank_id">
<option value="1">Duchbangla Banks</option>
<option value="2">Agrani bank</option>
<option value="3">islami Bnak</option>
<option value="8XRLB6YVU8">uttara</option>
<option value="DJTQEQH2WR">City Bank</option>
</select>
</div>
</div>

<div class="form-group row">
<label for="description" class="col-sm-3 col-form-label">Description <i class="text-danger"></i></label>
<div class="col-sm-6">
<textarea class="form-control" placeholder="Description" name="description"></textarea>
</div>
</div>

<div class="form-group row">
<label for="withdraw_deposite_id" class="col-sm-3 col-form-label">Withdraw / Deposite ID <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" class="form-control" name="deposite_id" id="withdraw_deposite_id" required="" placeholder="Withdraw / Deposite ID" />
</div>
</div>

<div class="form-group row">
<label for="ammount" class="col-sm-3 col-form-label">Amount <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="number" class="form-control" name="ammount" id="ammount" required="" placeholder="Amount" />
</div>
</div>


<div class="form-group row">
<label for="example-text-input" class="col-sm-4 col-form-label"></label>
<div class="col-sm-6">
<input type="reset" class="btn btn-danger" value="Reset" />
<input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Save" />
</div>
</div>
</div>
</form> </div>
</div>
</div>


@endsection

@section('jquery')
<script type="text/javascript">
            $( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });

            // select 2 dropdown 
            $("select.form-control:not(.dont-select-me)").select2({
                placeholder: "Select option",
                allowClear: true
            });

            //Insert supplier
            $("#insert_supplier").validate();

            //Update supplier
            $("#supplier_update").validate();

            //Update customer
            $("#customer_update").validate();

            //Insert customer
            $("#insert_customer").validate();  

            //Update product
            $("#product_update").validate();

            //Insert product
            $("#insert_product").validate();   

            //Insert pos invoice
            $("#insert_pos_invoice").validate();

            //Insert invoice
            $("#insert_invoice").validate(); 

            //Update invoice
            $("#invoice_update").validate();

            //Insert purchase
            $("#insert_purchase").validate();

            //Update purchase
            $("#purchase_update").validate();

            //Add category
            $("#insert_category").validate();

            //Update category
            $("#category_update").validate(); 

            //Stock report
            $("#stock_report").validate(); 

            //Stock report
            $("#stock_report_supplier_wise").validate();
            //Stock report
            $("#stock_report_product_wise").validate();  

            //Create account
            $("#create_account_data").validate();

            //Update account
            $("#update_account_data").validate();

            //Inflow entry
            $("#inflow_entry").validate();

            //Outflow entry
            $("#outflow_entry").validate();

            //Tax entry
            $("#tax_entry").validate();  

            //Update tax
            $("#update_tax").validate();

            //Account summary
            $("#summary_datewise").validate();
             //Comission generate
            $("#commission_generate").validate();

        </script>
      

@endsection