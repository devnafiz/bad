@extends('layout')


@section('title','|add person')


@section('content')

<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Add Person </h4>
</div>
</div>
<form action="{{route('manage-office-save')}}" class="form-vertical" id="inflow_entry" enctype="multipart/form-data" method="post" accept-charset="utf-8">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="panel-body">
<div class="form-group row">
<label for="name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="text" class="form-control" name="name" id="name" required="" placeholder="Name"/>
</div>
</div>
<div class="form-group row">
<label for="phone" class="col-sm-3 col-form-label">Phone <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input type="number" class="form-control" name="phone" id="phone" required="" placeholder="Phone"/>
</div>
</div>
<div class="form-group row">
<label for="address" class="col-sm-3 col-form-label">Address <i class="text-danger"></i></label>
<div class="col-sm-6">
<textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
</div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-sm-4 col-form-label"></label>
<div class="col-sm-6">
<input type="reset" class="btn btn-danger" value="Reset" />
<input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Save"/>
</div>
</div>
</div>
</form> </div>
</div>
</div>

@endsection