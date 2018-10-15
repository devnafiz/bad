@extends('layout')

@section('title','|manage -supplier')


@section('content')
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Manage Supplier</h4>
</div>
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="dataTableExample3" class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>SL.</th>
<th>Supplier Name</th>
<th>Address</th>
<th>Mobile</th>
<th>Details</th>
<th>Action</th>
</tr>
</thead>
<tbody>
	@foreach($suppliers as $supplier)
<tr>
<td>1</td>
<td>

{{$supplier->name
}}
</td>
<td>{{$supplier->address}}</td>
<td>8{{$supplier->mobile}}</td>
<td></td>
<td>
<center>
<form action="http://wholesalenew.bdtask.com/newholesale/Csupplier/manage_supplier" method="post" accept-charset="utf-8">
<a href="http://wholesalenew.bdtask.com/newholesale/Csupplier/supplier_update_form/V2GZ82OM42GWVKKCMIHN" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="" class="deleteSupplier btn btn-danger btn-sm" name="V2GZ82OM42GWVKKCMIHN" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
</form>	</center>
</td>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

@endsection