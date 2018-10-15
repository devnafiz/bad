@extends('layout')

@section('title','|manage-account')


@section('content')


<!-- Alert Message -->
<div class="row">
<div class="col-sm-12">
<div class="column">
<a href="{{route('create-account')}}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i>Create Account</a>

</div>
</div>
</div>


<!-- Manage Product report -->
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Manage Account</h4>
</div>
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>SL.</th>
<th>Account Name</th>

<th>Date</th>
<th style="width : 130px">Action</th>
</tr>
</thead>
<tbody>
@foreach($accounts as $account)

<tr>
<td>{{$account->id}}</td>
<td>

<a href="http://wholesalenew.bdtask.com/newholesale/Account_Controller/date_summary/7">
	{{$account->account_name}}</a>
</td>
<td>{{$account->created_at}}</td>

<td>
<center>


<a href="http://wholesalenew.bdtask.com/newholesale/Account_Controller/account_update_form/7" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>

<a href="" class="deleteAccount btn btn-danger btn-sm" name="{account_id}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>

</center>
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