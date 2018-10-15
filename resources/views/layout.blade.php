
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@yield('title')</title>
<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="my-assets/image/logo/911ab09abfe5899b768dae55ea129049.png" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/dist/img/ico/apple-touch-icon-144-precomposed.png">
<!-- Start Global Mandatory Style-->
<!-- jquery-ui css -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
{{ HTML::style('assets/bootstrap/css/bootstrap.min.css') }}
{{ HTML::style('assets/css/cmxform.css') }}
{{ HTML::style('cassets/css/inventory.min.css') }}
{{ HTML::style('assets/css/pe-icon-7-stroke.css') }}


{{ HTML::style('assets/css/select2.min.css') }}

{{ HTML::style('assets/css/style.min.css') }}
{{ HTML::style('assets/css/dataTables.min.css') }}
{{ HTML::style('assets/css/jquery-ui.min.css') }}

{{HTML::script('assets/js/jquery-1.12.4.min.js')}}
{{HTML::script('assets/js/jquery.validate.min.js')}}
@yield('extra-js')
</head>
<body class="hold-transition sidebar-mini">
<div class="se-pre-con"></div>
<!-- Site wrapper -->
<div class="wrapper">
<!-- Admin header end -->
<style type="text/css">
.trnb:hover{
background-color: green;
color: white;

}
.trnb a:hover{
color:white;

}
</style>
@include('header')

@include('sidebar')
<script type="text/javascript">
function printDiv(divName) {
var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;
document.body.innerHTML = printContents;
document.body.style.marginTop="0px";
window.print();
document.body.innerHTML = originalContents;
}
</script>

<!-- Person Start -->
<div class="content-wrapper">
<section class="content-header">
<div class="header-icon">
<i class="pe-7s-note2"></i>
</div>
<div class="header-title">
<h1>Transaction details</h1>
<small>Transaction details</small>
<ol class="breadcrumb">
<li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
<li><a href="#">Transaction details</a></li>
<li class="active">Transaction details</li>
</ol>
</div>
</section>

<section class="content">
<!-- Manage Product report -->
@yield('content')

</section>
</div>
<!-- Person ledger End -->

<!-- Modal start -->
<!-- Link trigger modal -->


<!-- Default bootstrap modal example -->
<!-- Modal end -->

<!-- modal popup script -->
<script type="text/javascript">
function report_popup(transection_category)
{
$.ajax({
type: "POST",
url: "newholesale/Cpayment/today_details",
data: "transection_category="+transection_category,
success: function (response) {
$(".displaycontent").html(response);
}
});
}
</script>

<div class="modal fade displaycontent" id="myModal">

@include('footer')
@yield('jquery')
</body>
</html>