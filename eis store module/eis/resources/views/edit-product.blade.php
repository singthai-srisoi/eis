@extends('template')
@section('edit-product')

<form action="{{url('update', $c->prod_id)}}" method="POST">
	@csrf
	@method('PUT')
	<input type="text" name="prod_code" placeholder="Product Code" value="{{ $c['prod_code'] }}"><br><br>
	<input type="text" name="prod_name" placeholder="Product Name" value="{{ $c['prod_name'] }}"><br><br>
	<input type="text" name="prod_image" placeholder="Product Image" value="{{ $c['prod_image'] }}"><br><br>
	<input type="text" name="prod_desc" placeholder="Product Desc" value="{{ $c['prod_desc'] }}"><br><br>
	<input type="text" name="prod_ctg" placeholder="Product Category" value="{{ $c['prod_ctg'] }}"><br><br>
	<input type="text" name="prod_price" placeholder="Product Supplier Price" value="{{ $c['prod_price'] }}"><br><br>
	<input type="text" name="prod_sellprice" placeholder="Product Selling Price" value="{{ $c['prod_sellprice'] }}"><br><br>
	<input type="text" name="prod_stock" placeholder="Product Stock" value="{{ $c['prod_stock'] }}"><br><br>
	<input type="text" name="prod_status" placeholder="Product Status" value="{{ $c['prod_status'] }}"><br><br>
	<input type="text" name="prod_supplierID" placeholder="Product Supplier ID" value="{{ $c['prod_supplierID'] }}"><br><br>
	<button type="submit">Update Product</button>
</form>					
@endsection
