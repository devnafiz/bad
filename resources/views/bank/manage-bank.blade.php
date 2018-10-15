@extends('layout')

@section('title','|manage bank')


@section('content')
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Bank List add  some thinh</h4>
</div>
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="dataTableExample3" class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>SL.</th>
<th>Bank Name</th>
<th>A/C Name</th>
<th>A/C Number</th>
<th>Branch</th>
<th>Signature Picture</th>
<th>Action</th>
</tr>
</thead>
<tbody>
	@foreach($banks as $bank)
<tr>
<td>1</td>
<td><a href="http://wholesalenew.bdtask.com/newholesale/Csettings/bank_ledger/DCMHATDNVW" >	{{$bank->bank_name}}</a></td>
<td>{{$bank->acc_name}}</td>
<td>{{$bank->acc_number}}</td>
<td>{{$bank->branch}}</td>
<td>
<img src="images/uploads/bank/{{$bank->image}}" class="img img-responsive" height="80" width="100"></td>
<td>
<form action="http://wholesalenew.bdtask.com/newholesale/Csettings/bank_list" method="post" accept-charset="utf-8">
<a href="http://wholesalenew.bdtask.com/newholesale/Csettings/edit_bank/DCMHATDNVW" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="bank-transtion/bankLadger/{{$bank->id}}" class="btn btn-default btn-sm" ><i class="fa fa-eye" aria-hidden="true"></i>
</a>
</form>
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