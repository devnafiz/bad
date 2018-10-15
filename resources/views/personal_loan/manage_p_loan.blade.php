@extends('layout')

@section('title','|personal loan')


@section('content')

<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Manage Loan </h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
			           			<thead>
									<tr>
										<th>Name</th>
										<th>Date</th>
										<th>Debit</th>
										<th>Credit</th>
										<th>action</th>
									</tr>
									</thead>
									<tbody>
										@foreach($personal_loan_trans as $LoanTrans )								
										<tr>
											
											
											<td><a href="
											">{{$LoanTrans->personalLoans['name']}}</a></td>
										
											<td>{{$LoanTrans->date}}</td>
											<td>{{$LoanTrans->debit}}</td>
											<td>{{$LoanTrans->credit}}</td>
											<td>
												<center>
													<form action="" method="post" accept-charset="utf-8">
													<a href="" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
													</form>	
												</center>
											</td>
										</tr>
									@endforeach
																		</tbody>
		                    </table>
		                </div>
		                <div class="text-right"></div>
		            </div>
		        </div>
		    </div>
		</div>

@endsection