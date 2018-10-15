@extends('layout')

@section('title','|personal loan')


@section('content')
<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add Loan </h4>
                        </div>
                    </div>
                   <form action="{{route('personalLoanSave')}}" class="form-vertical" id="inflow_entry" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                   	<input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="person_id" id="name">
                                    <option>Select One</option>
                                    @foreach($loaner_name as $name)
                                    <option value="{{$name->id}}">{{$name->name}}</option>
                                    
                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control phone" name="phone" id="phone" required="" placeholder="Phone" min="0"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ammount" class="col-sm-3 col-form-label">Amount <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <input type="number" class="form-control" name="ammount" id="ammount" required="" placeholder="Amount" min="0"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Date <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control datepicker" name="date" id="date" value="13-10-2018" placeholder="Date"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label">Details <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" placeholder="Details"></textarea>
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
                    </form>                </div>
            </div>
        </div>

        @endsection