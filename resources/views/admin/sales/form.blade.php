@extends('layouts.layout')
@section('content')
<form action="/admin/sales/save" method="post">
@csrf
<table>
<tr><th>Customer id:</th><td><input type="text" name="customer_id"></td>
<tr><th>Amount:</th><td><input type="text" name="amount"></td>


<tr><th></th><td><input type="submit" value="Add Sales" class="btn btn-info"></td></tr>
</table>
</form>
@endsection