@extends('layout')

@section('title','|manage loan')


@section('content')


<div class="row">
  						<div class="col-sm-12">
                            <div class="panel panel-bd lobidrag">
									<div class="panel-heading">
										<div class="panel-title">
										  <h4>Manage Person</h4>
										</div>
									</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table id="dataTableExample3" class="table table-bordered table-striped table-hover">
											<thead>
												<tr>

													<th class="text-center">Name</th>
													<th class="text-center">Address</th>
													<th class="text-center">Phone</th>
													<th class="text-center">action</th>
												</tr>
											</thead>
											<tbody>
											@foreach($ofcloans as $ofcloan)
											<tr>
												<td>{{$ofcloan->name}}</td>
												<td>{{$ofcloan->address}}</td>
												<td>{{$ofcloan->phone}}</td>

												<td>
												<center>
												<form action="" method="post" accept-charset="utf-8">
													<a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>

													<a href="" class="DeleteCategory btn btn-danger btn-sm" name="" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
												</form>	
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