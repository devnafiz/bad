@extends('layout')

@section('title','create-customer')

@section('content')

<!-- New customer -->
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Add Customer </h4>
</div>
</div>
<form action="{{route('saveCustomer')}}" class="form-vertical" id="insert_customer" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="panel-body">
<div class="form-group row">
<label for="customer_name" class="col-sm-3 col-form-label">Customer Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input class="form-control" name ="name" id="customer_name" type="text" placeholder="Customer Name" required="">
</div>
</div>
<div class="form-group row">
<label for="email" class="col-sm-3 col-form-label">Customer Email</label>
<div class="col-sm-6">
<input class="form-control" name ="email" id="email" type="email" placeholder="Customer Email">
</div>
</div>
<div class="form-group row">
<label for="mobile" class="col-sm-3 col-form-label">Customer Mobile</label>
<div class="col-sm-6">
<input class="form-control" name="phone" id="mobile" type="number" placeholder="Customer Mobile" min="0">
</div>
</div>
<div class="form-group row">
<label for="address " class="col-sm-3 col-form-label">Customer Address</label>
<div class="col-sm-6">
<textarea class="form-control" name="address" id="address " rows="3" placeholder="Customer Address"></textarea>
</div>
</div>
<div class="form-group row">
<label for="previous_balance" class="col-sm-3 col-form-label">Previous Balance</label>
<div class="col-sm-6">
<input class="form-control" name="balance" id="previous_balance" type="number" placeholder="Previous Balance">
</div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-sm-4 col-form-label"></label>
<div class="col-sm-6">
<input type="submit" id="add-customer" class="btn btn-primary btn-large" name="add-customer" value="Save" />
<!-- <input type="submit" value="Save And Add Another" name="add-customer-another" class="btn btn-large btn-success" id="add-customer-another"> -->
</div>
</div>
</div>
</form> </div>
</div>
</div>
@endsection