@extends('layout')

@section('title','|manage purchage')


@section('content')



<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Manage Category</h4>
</div>
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="dataTableExample3" class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>SL.</th>
<th>Invoice No</th>
<th>Supplier Name</th>
<th>Purchase Date</th>
<th>Total Amount</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($purchase as $purchase_data)

<tr>
<td>{{$purchase_data->id}}</td>

<td class="text-center">{{$purchase_data->chalan_no}}</td>
<td class="text-center">{{$purchase_data->supplier_id}}
</td>
<td class="text-center">{{$purchase_data->purchase_date}}</td>
<td class="text-center">{{$purchase_data->grand_total_price}}</td>


<td>
<center>
<form action="" method="post" accept-charset="utf-8">
<a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>

<a href="" class="DeleteCategory btn btn-danger btn-sm" name="B7DFWBPPJM8X3OG" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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