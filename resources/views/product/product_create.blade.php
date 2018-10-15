@extends('layout')

@section('title','|login')

@section('content')

<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>New Product</h4>
</div>
</div>
<form action="{{route('saveProduct')}}" class="form-vertical" id="insert_product"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="panel-body">
<div class="row">
<div class="col-sm-6">
<div class="form-group row">
<label for="product_name" class="col-sm-4 col-form-label">Product Name <i class="text-danger">*</i></label>
<div class="col-sm-8">
<input class="form-control" name="name" type="text" id="product_name" placeholder="Product Name" required>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group row">
<label for="description" class="col-sm-4 col-form-label">Details</label>
<div class="col-sm-8">
<textarea class="form-control" name="dtails" id="description" rows="3" placeholder="Details"></textarea>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="form-group row">
<label for="category_id" class="col-sm-4 col-form-label">Category</label>
<div class="col-sm-8">
<select class="form-control" id="category_id" name="category_id">

<option value="">Select One</option>
@foreach($category as $category_data)
<option value="{{$category_data->id }}">{{$category_data->name }}</option>

@endforeach
</select>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group row">
<label for="image" class="col-sm-4 col-form-label">Image </label>
<div class="col-sm-8">
<input type="file" name="images" class="form-control" id="image">
</div>
</div>
</div>
</div>

<div class="table-responsive" style="margin-top: 10px">
<table class="table table-bordered table-hover">
<thead>
<tr>
<th class="text-center">Carton Quantity <i class="text-danger">*</i></th>
<th class="text-center">Sell Price <i class="text-danger">*</i></th>
<th class="text-center">Supplier Price <i class="text-danger">*</i></th>
<th class="text-center">Model <i class="text-danger">*</i></th>
<th class="text-center">Supplier <i class="text-danger">*</i></th>
</tr>
</thead>
<tbody id="form-actions">
<tr class="">
<td class="">
<input class="form-control text-right" name="carton_qty" type="number" required="" placeholder="Carton Quantity" tabindex="3" min="0">
</td>
<td class="">
<input class="form-control text-right" name="sell_price" type="number" required="" placeholder="Sell Price" tabindex="4" min="0">
</td>
<td class="">
<input type="number" tabindex="4" class="form-control text-right" name="supplier_price" placeholder="Supplier Price" required min="0"/>
</td>
<td class="text-right">
<input type="text" tabindex="5" class="form-control" name="p_model" placeholder="Model" required />
</td>
<td class="text-right">
<select name="supplier" class="form-control" required="">
<option value="">Select One
</option>
<option value="V2GZ82OM42GWVKKCMIHN">ibram Kholi
</option>
<option value="PQXZV8ZUXUZPN3N4S2WC">Moral Kemi
</option>
<option value="IOYDTFVIFMD8JQ7Z38OO">Johan Doye
</option>
<option value="E674MTLPNV55PK67QHT4">Al Faisal International
</option>
<option value="5I6N5LC8ZXDREA9CC3ZW">Easy Global Trading Ltd.
</option>
</select>
</td>
</tr>
</tbody>
</table>
</div>
<div class="form-group row">
<div class="col-sm-6">
<input type="submit" id="add-product" class="btn btn-primary btn-large" name="add-product" value="Save" />
<input type="submit" value="Save And Add Another" name="add-product-another" class="btn btn-large btn-success" id="add-product-another">
</div>
</div>
</div>
</form> </div>
</div>
</div>


@endsection