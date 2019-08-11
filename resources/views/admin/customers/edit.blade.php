@extends('layouts.layout')
@section('content')
<form action="/admin/customers/update/<?php echo $cust->id?>" method="POST">
@csrf
<center>Name:<br/><input type="text" name="name" value="<?php echo $cust->name;?>"/><br/>
Address:<br/><input type="text" name="address" value="<?php echo $cust->address;?>"/><br/>
Mobile:<br/><input type="text" name="mobile" value="<?php echo $cust->mobile;?>"/><br/><br/>

<input type="submit" value="update"/>
</form>
@endsection