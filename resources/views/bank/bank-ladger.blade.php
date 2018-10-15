@extends('layout')


@section('title','|bank ladger')


@section('content')

<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Bank Ledger</h4>
		                </div>
		            </div>
		            <div class="panel-body">
		            
			            <div class="text-right">
			            	<button  class="btn btn-warning text-right" href="#" onclick="printDiv('printableArea')">Print</button>
			            </div>
		            	
						<div id="printableArea" style="margin-left:2px;">
						    <div class='text-center'>
							
							    <h3>{{$bank_data->bank_name}}</h3>
							    <h5>A/C Number :{{$bank_data->acc_number}}</h5>
							   <h5>Branch :{{$bank_data->branch}}</h5>
                             
							
													<span> Print Date: 08/10/2018 01:33:43 </span>
                            </div>
			                <div class="table-responsive" style="margin-top: 10px;">
			                    <table id="" class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th class="text-center">Date</th>
											<th class="text-center">Description</th>
											<th class="text-center">Withdraw / Deposite ID</th>
											<th class="text-center">Debit (+)</th>
											<th class="text-center">Credit (-)</th>
											<th class="text-center">Balance</th>
										</tr>
									</thead>
									<tbody>
                                       @foreach($bank_tran as $bank_tdata)
                                        
										<tr>
											
											<td class="text-center"></td>
											<td class="text-center"></td>
											<td class="text-center"></td>
											<td class="text-center">{{$bank_tdata->debit}}</td>
											<td class="text-center">{{$bank_tdata->credit}}</td>
											 
											<td class="text-center">{{$bank_tdata->credit-$bank_tdata->debit}}</td>

										</tr>
										
                                       @endforeach

																		</tbody>
									<tfoot>
										<tr>
											<td colspan="3" align="right"><b>Grand Total:</b></td>
											<?php ?>
                                            @foreach($debits as $dabit)
											<td align="right"><b> Rs {!! number_format($dabit->amount, 2, '.', ',');!!}</b></td>
                                           @endforeach
                                           @foreach($credits as $credit)
											<td align="right"><b>Rs {!! number_format($credit->amount, 2, '.', ','); !!}</b></td>
                                             @endforeach
                                             @foreach($balance as $ac)
											<td align="right"><b> {!! number_format($ac->amount, 2, '.', ','); !!}</b></td>
											@endforeach
										</tr>
									</tfoot>
			                    </table>
			                </div>
			            </div>
		                <div class="text-center">
		                			                </div>
		            </div>
		        </div>
		    </div>
		</div>


@endsection