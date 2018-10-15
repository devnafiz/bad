@extends('layout')

@section('title','create-purchase')

@section('extra-js')

{{HTML::script('assets/js/purchase.js')}}
@endsection


@section('content')

<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Add Purchase</h4>
</div>
</div>

<div class="panel-body">
<form action="{{route('purchaseSave')}}" class="form-vertical" id="insert_purchase" name="insert_purchase" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{csrf_token()}}">

<div class="row">
<div class="col-sm-6">
<div class="form-group row">
<label for="supplier_sss" class="col-sm-3 col-form-label">Supplier <i class="text-danger">*</i>
</label>
<div class="col-sm-6">
<select name="supplier_id" id="supplier_ad" class="form-control " required="">
<option value=" ">Select One</option>
<option value="5I6N5LC8ZXDREA9CC3ZW">Easy Global Trading Ltd.</option>
<option value="E674MTLPNV55PK67QHT4">Al Faisal International</option>
<option value="PQXZV8ZUXUZPN3N4S2WC">Moral Kemi</option>
<option value="IOYDTFVIFMD8JQ7Z38OO">Johan Doye</option>
<option value="V2GZ82OM42GWVKKCMIHN">ibram Kholi</option>
</select>
</div>

<!-- <div class="col-sm-3">
<a href="http://wholesalenew.bdtask.com/newholesale/Csupplier">Add Supplier</a>
</div> -->
</div>
</div>

<div class="col-sm-6">
<div class="form-group row">
<label for="date" class="col-sm-4 col-form-label">Purchase Date <i class="text-danger">*</i>
</label>
<div class="col-sm-8">
<input type="text" tabindex="2" class="form-control datepicker" name="purchase_date" value="10-09-2018" id="date" required />
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="form-group row">
<label for="invoice_no" class="col-sm-3 col-form-label">Invoice No <i class="text-danger">*</i>
</label>
<div class="col-sm-9">
<input type="text" tabindex="3" class="form-control" name="chalan_no" placeholder="Invoice No" id="invoice_no" required />
</div>
</div>
</div>

<div class="col-sm-6">
<div class="form-group row">
<label for="adress" class="col-sm-4 col-form-label">Details </label>
<div class="col-sm-8">
<textarea class="form-control" tabindex="4" id="adress" name="purchase_details" placeholder=" Details" rows="1"></textarea>
</div>
</div>
</div>
</div>

<div class="table-responsive" style="margin-top: 10px">
<table class="table table-bordered table-hover" id="purchaseTable">
<thead>
<tr>
<th class="text-center">Item Information<i class="text-danger">*</i></th>
<th class="text-center">Stock/Qnt</th>
<th class="text-center">Carton <i class="text-danger">*</i></th>
<th class="text-center">Item/Cartoon </th>
<th class="text-center">Quantity </th>
<th class="text-center">Rate<i class="text-danger">*</i></th>
<th class="text-center">Total</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody id="addPurchaseItem">
<tr>
<td class="span3 supplier">
Please Select Supplier <!-- <select class="form-control supplier"></select> -->
</td>

<td>
<input type="text" id=""  class="form-control text-right stock_ctn_1" placeholder="Stock/Qnt" readonly/>
</td>

<td class="text-right">
<input type="text" name="cartoon[]" required id="qty_item_1" class="form-control text-right qty_calculate" placeholder="0.00" value="" min="0" tabindex="6"/>
</td>

<td class="text-right">
<input type="text" name="cartoon_item[]" value="" readonly="readonly" id="ctnqntt_1" class="form-control ctnqntt1 text-right" placeholder="Item/Cartoon"/>
</td>

<td class="text-right">
<input type="text" name="product_quantity[]" readonly="readonly" id="total_qntt_1" class="form-control text-right" placeholder="0.00" />
</td>
<td class="">
<input type="text" name="product_rate[]" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" id="price_item_1" class="form-control price_item1 text-right" placeholder="0.00" value="" min="0" tabindex="7"/>
</td>
<td class="text-right">
<input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_1" value="0.00" tabindex="-1" readonly="readonly" />
</td>
<td>
<button style="text-align: right;" class="btn btn-danger red" type="button" value="Delete" onclick="deleteRow(this)" tabindex="8">Delete</button>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2">
<input type="button" id="add-invoice-item" class="btn btn-info" name="add-invoice-item" onClick="addPurchaseInputField('addPurchaseItem');" value="Add New Item" tabindex="9"/>

<input type="hidden" name="baseUrl" class="baseUrl" value=""/>
</td>
<td style="text-align:right;" colspan="4"><b>Grand Total:</b></td>
<td class="text-right">
<input type="text" id="grandTotal" tabindex="-1" class="text-right form-control" name="grand_total_price" tabindex="-1" value="0.00" />
</td>
</tr>
</tfoot>
</table>
</div>

<div class="form-group row">
<div class="col-sm-6">
<input type="submit" id="add-purchase" class="btn btn-primary btn-large" name="add-purchase" value="Submit" tabindex="10"/>
<input type="submit" value="Submit And Add Another One" name="add-purchase-another" class="btn btn-large btn-success" id="add-purchase-another" tabindex="11">
</div>
</div>
</form> </div>
</div>
</div>
</div>


@endsection

@section('jquery')

<script type="text/javascript">
   $('body').on('change','#supplier_ad',function(event){
        event.preventDefault(); 
        var supplier_id=$('#supplier_ad').val();
        var csrf_test_name=  $("[name=csrf_test_name]").val();
        $.ajax({
            url: 'product_search_by_supplier',
            type: 'post',
            data: {supplier_id:supplier_id,csrf_test_name:csrf_test_name}, 
            success: function (msg){
                $(".supplier").html(msg);
            },
            error: function (xhr, desc, err){
                 alert('failed');
            }
        });        
    });
    //Product select by ajax end

   // Product selection start
    $('body').on('change', '.productSelection', function(){
        var product_id = $(this).val();  
        var base_url = $('.baseUrl').val(); 
        var target = $(this).parent().parent().children().next().next().next().next().children();
        var item_cartoon = $(this).parent().next().next().next().children();
        var stock = $(this).parent().next().children();
        var csrf_test_name=  $("[name=csrf_test_name]").val();
        $.ajax
        ({
            url: base_url+"Cinvoice/retrieve_product_data",
            data: {product_id:product_id,csrf_test_name:csrf_test_name},
            type: "post",
            success: function(data)
            {
                obj = JSON.parse(data);
                target.val(obj.supplier_price);
                item_cartoon.val(obj.cartoon_quantity);
                stock.val(obj.total_product);

                var cartoon = $('.qty_calculate').val();
                var item = $('.qty_calculate').parent().next().children().val();

                // set quantity
                $('.qty_calculate').parent().next().next().children().val(cartoon * item);

                var rate = $('.qty_calculate').parent().next().next().next().children().val();
                //set total
                $('.qty_calculate').parent().next().next().next().next().children().val(rate * cartoon * item);
                calculateSum();
            } 
        });
    });
    //Product selection end
</script>
@endsection