@extends('layout')

@section('title','|new Invoice')


@section('extra-js')

{{HTML::script('assets/js/add-cal.js')}}
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>New Invoice</h4>
</div>
</div>
<form action="http://wholesalenew.bdtask.com/newholesale/Cinvoice/insert_invoice" class="form-vertical" id="" name="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<div class="panel-body">
<div class="row">

<div class="col-sm-8" id="payment_from_1">
<div class="form-group row">
<label for="customer_name" class="col-sm-3 col-form-label">Customer Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" size="100" name="customer_name" class="customerSelection form-control" placeholder='Customer Name' id="customer_name" tabindex="1" />

<input id="SchoolHiddenId" class="customer_hidden_value" type="hidden" name="customer_id">
</div>
<div class=" col-sm-3">
<input id="myRadioButton_1" type="button" onClick="active_customer('payment_from_1')" id="myRadioButton_1" class="btn btn-success checkbox_account" name="customer_confirm" checked="checked" value="New Customer" tabindex="2">
</div>
</div>
</div>

<div class="col-sm-8" id="payment_from_2">
<div class="form-group row">
<label for="customer_name_others" class="col-sm-3 col-form-label">Payee Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input autofill="off" type="text" size="100" name="customer_name_others" placeholder='Payee Name' id="customer_name_others" class="form-control" />
</div>

<div class="col-sm-3">
<input onClick="active_customer('payment_from_2')" type="button" id="myRadioButton_2" class="checkbox_account btn btn-success" name="customer_confirm_others" value="Old Customer">
</div>
</div>

<div class="form-group row">
<label for="customer_name_others_address" class="col-sm-3 col-form-label">Address </label>
<div class="col-sm-6">
<input type="text" size="100" name="customer_name_others_address" class=" form-control" placeholder='Address' id="customer_name_others_address" />
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="form-group row">
<label for="date" class="col-sm-4 col-form-label">Date <i class="text-danger">*</i></label>
<div class="col-sm-8">
<input class="datepicker form-control" type="text" size="50" name="invoice_date" id="date" required value="10-09-2018" tabindex="3" />
</div>
</div>
</div>
</div>

<div class="table-responsive" style="margin-top: 10px">
<table class="table table-bordered table-hover" id="normalinvoice">
<thead>
<tr>
<th class="text-center">Item Information <i class="text-danger">*</i></th>
<th class="text-center">Available Ctn.</th>
<th class="text-center">Carton</th>
<th class="text-center">Item</th>
<th class="text-center">Quantity</th>
<th class="text-center">Rate <i class="text-danger">*</i></th>
<th class="text-center">Discount/Pcs. </th>
<th class="text-center">Total
</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody id="addinvoiceItem">
<tr>
<td style="width: 220px">
<input type="text" name="product_name" onkeypress="invoice_productList(1);" class="form-control productSelection" placeholder='Product Name' required="" id="product_name" tabindex="4">

<input type="hidden" class="autocomplete_hidden_value product_id_1" name="product_id[]" id="SchoolHiddenId"/>

<input type="hidden" class="baseUrl" value="http://wholesalenew.bdtask.com/newholesale/" />
</td>
<td>
<input type="text" name="available_quantity[]" class="form-control text-right available_quantity_1" value="" readonly="" />
</td>
<td>
<input type="text" name="cartoon[]" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" class="quantity_1 form-control text-right" value="" min="1" tabindex="5" placeholder="0.00" />
</td>
<td>
<input type="text" name="" class="ctnqntt_1 form-control text-right" readonly="" />
</td>
<td>
<input type="text" name="product_quantity[]" class="total_qntt_1 form-control text-right" readonly="" placeholder="0.00"/>
</td>
<td style="width: 85px">
<input type="text" name="product_rate[]" value="" id="price_item_1" class="price_item1 price_item form-control text-right" tabindex="6" required="" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);"/>
</td>
<!-- Discount -->
<td>
<input type="text" name="discount[]" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" id="discount_1" class="form-control text-right" value="" min="0" tabindex="7" placeholder="0.00"/>
</td>
<td style="width: 100px">
<input class="total_price form-control text-right" type="text" name="total_price[]" id="total_price_1" value="" tabindex="-1" readonly="readonly" />
</td>

<td>
<!-- Tax calculate start-->
<input type="hidden" id="total_tax_1" class="total_tax_1" />
<input type="hidden" id="all_tax_1" class="total_tax"/>
<!-- Tax calculate end -->

<!-- Discount calculate start-->
<input type="hidden" id="total_discount_1" class="total_tax_1" />
<input type="hidden" id="all_discount_1" class="total_discount"/>
<!-- Discount calculate end -->

<button style="text-align: right;" class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)" tabindex="8">Delete</button>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<td style="text-align:right;" colspan="7"><b>Total Discount:</b></td>
<td class="text-right">
<input type="text" id="total_discount_ammount" class="form-control text-right" name="total_discount" tabindex="" value="0.00" readonly="readonly" />
</td>
</tr>
<tr>
<td colspan="7" style="text-align:right;"><b>Grand Total:</b></td>
<td class="text-right">
<input type="text" id="grandTotal" tabindex="" class="form-control text-right" name="grand_total_price" value="0.00" readonly="readonly" />
</td>
</tr>
<tr>
<td align="center">
<input type="button" id="add-invoice-item" class="btn btn-info" name="add-invoice-item" onClick="addInputField('addinvoiceItem');" value="Add New Item" tabindex="9"/>

<input type="hidden" name="baseUrl" class="baseUrl" value="http://wholesalenew.bdtask.com/newholesale/"/>
</td>
<td style="text-align:right;" colspan="6"><b>Paid Amount:</b></td>
<td class="text-right">
<input type="text" id="paidAmount"
onkeyup="invoice_paidamount();" class="form-control text-right" name="paid_amount" value="" placeholder='0.00' tabindex=""/>
</td>
</tr>
<tr>
<td align="center">
<input type="submit" id="add-invoice" class="btn btn-success" name="add-invoice" value="Submit" tabindex=""/>

<input type="button" id="full_paid_tab" class="btn btn-warning" name="" value="Full Paid" tabindex="" onClick="full_paid();"/>
</td>

<td style="text-align:right;" colspan="6"><b>Due:</b></td>
<td class="text-right">
<input type="text" id="dueAmmount" class="form-control text-right" name="due_amount" value="0.00" readonly="readonly"/>
</td>
</tr>
</tfoot>
</table>
</div>
</div>
</form> </div>
</div>
</div>



@endsection