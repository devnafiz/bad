@extends('layout')

@section('title','|login')

@section('content')

    <!-- Second Counter -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;">
                                <img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/pos_invoice.png" height="40" width="40" >
                             </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Cinvoice/pos_invoice">Create POS Invoice</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                         <h2><span class="slight" style="margin-left: 70px;"><img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/invoice.png" height="40" width="40" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Cinvoice">Create New Invoice</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                         <h2><span class="slight" style="margin-left: 70px;"><img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/product.png" height="40" width="40" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Cproduct">Add Product</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                         <h2><span class="slight" style="margin-left: 70px;"><img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/customer.png" height="40" width="40" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Ccustomer">Add Customer</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Third Counter -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/sale.png" height="40"> </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Admin_dashboard/todays_sales_report">Sales Report</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/purchase.png" height="40"> </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Admin_dashboard/todays_purchase_report">Purchase Report</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/stock.png" height="40"> </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Creport">Stock Report</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="http://wholesalenew.bdtask.com/newholesale/my-assets/image/account.png" height="40"></span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="http://wholesalenew.bdtask.com/newholesale/Caccounts/summary">Account Summary</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- This month progress -->
            <div class="col-sm-12 col-md-8">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4> Monthly Progress Report</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="lineChart" height="142"></canvas>
                    </div>
                </div>
            </div>
            <!-- Total Report -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="panel panel-bd lobidisable">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Todays Report</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="message_inner">
                            <div class="message_widgets">
                                
                                <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>Todays Report</th>
                                    <th>TK</th>
                                </tr>
                                    <tr>
                                        <th>Total Sales</th>
                                        <td>Rs 0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Total Purchase</th>
                                        <td>Rs 0.00</td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="count-number">6</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                            <div class="small">Total Customer</div>
                            <div class="sparkline1 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="count-number">12</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                            <div class="small">Total Product</div>
                            <div class="sparkline1 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="count-number">5</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>
                            <div class="small">Total Supplier</div>
                            <div class="sparkline1 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="count-number">47</span><span class="slight"> <i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>
                            <div class="small">Total Invoice</div>
                            <div class="sparkline1 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection