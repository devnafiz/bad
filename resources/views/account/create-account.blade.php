@extends('layout')


@section('title','Account')


@section('content')

  <div class="row">
            <div class="col-sm-12">
                <div class="column">
                
                  <a href="{{route('manage-account')}}" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Account</a>

                </div>
            </div>
        </div>

        
        <!-- New Account -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Create Office Account </h4>
                        </div>
                    </div>
                  	<form action="{{ route('saveAccount')}}" class="form-vertical" id="validate" method="post" accept-charset="utf-8">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="account_name" class="col-sm-3 col-form-label">Account Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" name="account_name" placeholder="Account Name" id="account_name" required="" class="form-control">
                            </div>
                        </div>

                       	<div class="form-group row">
                            <label for="parent_account" class="col-sm-3 col-form-label">Root Account<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select name="parent_id" class="form-control" id="parent_account"> 
	                                <option value="customer">Customer </option>
	                                <option value="supplier">Supplier</option>
                                     <option value="Office">Office</option>
                                     <option value="Loan">Loan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="Create Office Account" />
                            </div>
                        </div>
                    </div>
                    </form>                </div>
            </div>
        </div>


@endsection