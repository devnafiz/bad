@extends('layout')

@section('title','|create-category')

@section('content')
<div class="col-sm-12">
     <div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Add Category </h4>
</div>
</div>
<form action="{{route('saveCategory')}}" class="form-vertical" id="insert_category" method="post" accept-charset="utf-8">

	<input type="hidden" name="_token" value="{{csrf_token() }}">
<div class="panel-body">

<div class="form-group row">
<label for="category_name" class="col-sm-3 col-form-label">Category Name <i class="text-danger">*</i></label>
<div class="col-sm-6">
<input class="form-control" name ="name" id="category_name" type="text" placeholder="Category Name" required="">
</div>
</div>
<div class="form-group row">
<label for="example-text-input" class="col-sm-4 col-form-label"></label>
<div class="col-sm-6">
<input type="submit" id="add-customer" class="btn btn-success btn-large" name="add-customer" value="Save" />
</div>
</div>
</div>
</form> </div>
</div>
</div>


@endsection