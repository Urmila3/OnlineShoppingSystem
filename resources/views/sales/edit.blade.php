@extends('layouts.layout')
@section('content')
<form action="/sales/update/<?php echo $sal->id?>" method="POST">
@csrf
Sales id:<input type="text" name="sales_id" value="<?php echo $sal->sales_id;?>"/>
Amount:<input type="text" name="amount" value="<?php echo $sal->amount;?>"/>
<input type="submit" value="update"/>
</form>
@endsection