<footer class="main-footer">

</footer> </div>
<!-- ./wrapper -->
<!-- Start Core Plugins-->
<!-- jquery-ui -->
{{ HTML::script('js/charisma.js') }}
{{ HTML::script('assets/js/select2.min.js') }}
{{ HTML::script('assets/js/dashboard.min.js') }}
{{ HTML::script('assets/js/dataTables.min.js') }}
{{ HTML::script('assets/js/jquery.counterup.min.js') }}
{{ HTML::script('assets/js/waypoints.min.js') }}
{{ HTML::script('assets/js/sparkline.min.js') }}
{{ HTML::script('assets/js/frame.min.js') }}
{{ HTML::script('assets/js/fastclick.min.js') }}
{{ HTML::script('assets/js/fastclick.min.js') }}
{{ HTML::script('assets/js/jquery.slimscroll.min.js') }}
{{ HTML::script('assets/js/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/jquery-ui.min.js') }}




<script type="text/javascript">
$( ".datepicker" ).datepicker({ dateFormat: 'dd-mm-yy' });
// select 2 dropdown
$("select.form-control:not(.dont-select-me)").select2({
placeholder: "Select option",
allowClear: true
});
//Insert supplier
$("#insert_supplier").validate();
//Update supplier
$("#supplier_update").validate();
//Update customer
$("#customer_update").validate();
//Insert customer
$("#insert_customer").validate();
//Update product
$("#product_update").validate();
//Insert product
$("#insert_product").validate();
//Insert pos invoice
$("#insert_pos_invoice").validate();
//Insert invoice
$("#insert_invoice").validate();
//Update invoice
$("#invoice_update").validate();
//Insert purchase
$("#insert_purchase").validate();
//Update purchase
$("#purchase_update").validate();
//Add category
$("#insert_category").validate();
//Update category
$("#category_update").validate();
//Stock report
$("#stock_report").validate();
//Stock report
$("#stock_report_supplier_wise").validate();
//Stock report
$("#stock_report_product_wise").validate();
//Create account
$("#create_account_data").validate();
//Update account
$("#update_account_data").validate();
//Inflow entry
$("#inflow_entry").validate();
//Outflow entry
$("#outflow_entry").validate();
//Tax entry
$("#tax_entry").validate();
//Update tax
$("#update_tax").validate();
//Account summary
$("#summary_datewise").validate();
//Comission generate
$("#commission_generate").validate();
</script>
</body>
</html>