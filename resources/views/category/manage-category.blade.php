@extends('layout')

@section('title','|managec-category')


@section('content')

<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="panel-title">
<h4>Manage Category</h4>
</div>
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="dataTableExample3" class="table table-bordered table-striped table-hover">
<thead>
<tr>

<th class="text-center">Category Name</th>
<th class="text-center">Category Description</th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
@foreach($categories as $category)

<tr>
<td class="text-center">{{$category->name}}</td>
<td class="text-center">{{$category->description}}</td>
<td>
<center>
<form action="" method="post" accept-charset="utf-8">
<a href="#" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>

<a href="" class="DeleteCategory btn btn-danger btn-sm" name="B7DFWBPPJM8X3OG" data-toggle="tooltip" data-placement="right" title="" data-original-title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
</form>	</center>
</td>
</tr>
@endforeach
{{ $categories->links() }}
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


@endsection

@section('jquery')
<script type="text/javascript">
// 	$(document).ready(function() {
    

//     $('#dataTableExample3').dataTable({
//     paging: false
// });
// } );



</script>



@endsection