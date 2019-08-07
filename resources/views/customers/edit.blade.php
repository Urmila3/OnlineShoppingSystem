@extends('layouts.layout')
@section('content')
<form action="/customers/update/<?php echo $cust->id?>" method="POST">
@csrf
Name:<input type="text" name="name" value="<?php echo $cust->name;?>"/>
Address:<input type="text" name="address" value="<?php echo $cust->address;?>"/>
Mobile:<input type="text" name="mobile" value="<?php echo $cust->mobile;?>"/>

<input type="submit" value="update"/>
</form>
@endsection