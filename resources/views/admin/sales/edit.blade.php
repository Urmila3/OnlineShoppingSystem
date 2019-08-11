@extends('layouts.layout')
@section('content')
<form action="/admin/sales/update/<?php echo $sal->id?>" method="POST">
@csrf
<center>Sales id:<br/><input type="text" name="sales_id" value="<?php echo $sal->sales_id;?>"/><br/>
Amount:<br/><input type="text" name="amount" value="<?php echo $sal->amount;?>"/><br/><br/>
<input type="submit" value="update"/>
</form>
@endsection