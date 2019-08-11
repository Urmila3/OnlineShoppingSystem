@extends('layouts.layout')
@section('content')
<form action="/admin/customers/save" method="post">
@csrf
<table>
<tr><th>Name:</th><td> <input type="text" name="name"></td>
<tr><th>Address:</th><td> <input type="text" name="address"></td>
<tr><th>Mobile:</th><td> <input type="text" name="mobile"></td>

<tr><th></th><td><input type="submit" value="Add Customers" class="btn btn-info"></td></tr>
</table>
</form>
@endsection