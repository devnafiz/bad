@extends('layout')


@section('title','|new bank')


@section('content')
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Add New Bank </h4>
</div>
</div>
<form action="{{route('saveBank')}}" class="form-vertical" id="insert_deposit" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="panel-body">

<div class="form-group row">
<label for="bank_name" class="col-sm-3 col-form-label">Bank Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" class="form-control" name="bank_name" id="bank_name" required="" placeholder="Bank Name" />
</div>
</div>

<div class="form-group row">
<label for="ac_name" class="col-sm-3 col-form-label">A/C Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" class="form-control" name="ac_name" id="ac_name" required="" placeholder="A/C Name" />
</div>
</div>

<div class="form-group row">
<label for="ac_no" class="col-sm-3 col-form-label">A/C Number <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" class="form-control" name="ac_no" id="ac_no" required="" placeholder="A/C Number" />
</div>
</div>

<div class="form-group row">
<label for="branch" class="col-sm-3 col-form-label">Branch <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" class="form-control" name="branch" id="branch" required="" placeholder="Branch" />
</div>
</div>

<div class="form-group row">
<label for="signature_pic" class="col-sm-3 col-form-label">Signature Picture <i class="text-danger"></i></label>
<div class="col-sm-6">
<input type="file" class="form-control" name="signature_pic" id="signature_pic" placeholder="Signature Picture" />
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