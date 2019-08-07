@extends('layouts.layout')
@section('content')
<form action="/products/save" method="post">
@csrf
<table>
<tr><th>Category id:</th><td><input type="text" name="category_id"></td>
<tr><th>Product name:</th><td><input type="text" name="product_name"></td>
<tr><th>Product size:</th><td><input type="text" name="product_size"></td>
<tr><th>Price:</th><td><input type="text" name="price"></td>

<input type="hidden" name="category_id" value="1">
<tr><th></th><td><input type="submit" value="Add Products" class="btn btn-info"></td></tr>
</table>
</form>
@endsection

