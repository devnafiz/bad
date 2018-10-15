@extends('layout')

@section('title','|Manage Product ')


@section('content')
<div class="row">
			<div class="col-sm-12">
		        <div class="panel panel-default">
		            <div class="panel-body"> 

						<form action="http://wholesalenew.bdtask.com/newholesale/Cproduct/product_by_search" class="form-inline" method="post" accept-charset="utf-8">
							
		                    <label class="select">Product Name:</label>
		                    
							<select class="form-control" name="product_id">
	                            
	                            	<option value="94999792">Apple-(DE453)</option>
	                            
	                            	<option value="86815584">light-(SED675)</option>
	                            
	                            	<option value="84662895">Mobile-(GTY543)</option>
	                            
	                            	<option value="83517747">Sunmoon-(SM-781)</option>
	                            
	                            	<option value="67988258">Laptop-(VFR453)</option>
	                            
	                            	<option value="63853613">Sunmoon-(SM-771)</option>
	                            
	                            	<option value="43238874">Sunmoon-(SM-8607)</option>
	                            
	                            	<option value="13177442">Sunmoon-(SM-378A)</option>
	                            
	                            	<option value="97255764">FOCUS-(SF-6904)</option>
	                            
	                            	<option value="67197783">FOCUS-(SF-6905)</option>
	                            
	                            	<option value="63775648">FOCUS-(SF-7602T)</option>
	                            
	                            	<option value="19226752">FOCUS-(SF-6901)</option>
	                            
                            </select>

							<button type="submit" class="btn btn-primary">Search</button>
		                	
			            </form>		            
			        </div>
		        </div>
		    </div>
	    </div>

		<!-- Manage Product report -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4>Manage Product</h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
		                        <thead>
									<tr>
										<th>SL.</th>
										<th>Product Name</th>
										<th>Product Model</th>
										<th>Carton Quantity</th>
										<th>Supplier Name</th>
										<th>Sell Price</th>
										<th>Supplier Price</th>
										<th>Images</th>
										<th style="width : 130px">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($products as $product)							
									<tr>
										<td>1</td>
										<td>
											<a href="#">
											{{$product->name}}
											</a>			
										</td>
										<td><a href="#">{{$product->p_model}} </a></td>
										<td>{{$product->carton_qty}}</td>
										<td>{{$product->supplier}}</td>
										<td style="text-align: right;">
										Rs {{$product->sell_price}}										</td>
										<td style="text-align: right;">
										Rs {{$product->supplier_price}}								</td>
										<td class="text-center">
										<img src="{{$product->p_model}}" class="img img-responsive" height="50" width="50">
										</td>
										<td>
											<center>
											<form action="http://wholesalenew.bdtask.com/newholesale/Cproduct/manage_product" method="post" accept-charset="utf-8">

										

												<a href="http://wholesalenew.bdtask.com/newholesale/Cproduct/product_update_form/94999792" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>

												<a href="" class="deleteProduct btn btn-danger btn-sm" name="94999792" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>

											</form>											</center>
										</td>
									</tr>
								
									
								
									@endforeach
								
																</tbody>
		                    </table>
		                    <div class="text-right"><ul class='pagination'><li class='disabled'><li class='active'><a href='#'>1<span class='sr-only'></span></a></li><li><a href="http://wholesalenew.bdtask.com/newholesale/Cproduct/manage_product/10" data-ci-pagination-page="2">2</a></li><li><a href="http://wholesalenew.bdtask.com/newholesale/Cproduct/manage_product/10" data-ci-pagination-page="2" rel="next">&gt;</a></li></ul></div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

@endsection