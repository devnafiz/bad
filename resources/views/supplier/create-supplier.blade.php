@extends('layout')

@section('title','create-supplier')


@section('content')

<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Add Supplier </h4>
</div>
</div>
<form action="{{route('saveSupplier')}}" id="insert_supplier" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="panel-body">
<div class="form-group row">
<label for="supplier_name" class="col-sm-3 col-form-label">Supplier Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input class="form-control" name ="name" id="supplier_name" type="text" placeholder="Supplier Name" required="">
</div>
</div>
<div class="form-group row">
<label for="mobile" class="col-sm-3 col-form-label">Supplier Mobile <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input class="form-control" name="mobile" id="mobile" type="number" placeholder="Supplier Mobile" required="" min="0">
</div>
</div>
<div class="form-group row">
<label for="address " class="col-sm-3 col-form-label">Supplier Address</label>
<div class="col-sm-6">
<textarea class="form-control" name="address" id="address " rows="3" placeholder="Supplier Address"></textarea>
</div>
</div>
<div class="form-group row">
<label for="details" class="col-sm-3 col-form-label">Supplier Details</label>
<div class="col-sm-6">
<textarea class="form-control" name="details" id="details" rows="3" placeholder="Supplier Details"></textarea>
</div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-sm-4 col-form-label"></label>
<div class="col-sm-6">
<input type="submit" id="add-supplier" class="btn btn-primary btn-large" name="add-supplier" value="Save" />
<input type="submit" value="Save And Add Another" name="add-supplier-another" class="btn btn-large btn-success" id="add-supplier-another">
</div>
</div>
</div>
</form> </div>
</div>
</div>

@endsection