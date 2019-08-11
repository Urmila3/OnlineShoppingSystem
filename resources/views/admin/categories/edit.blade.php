@extends('layouts.layout')
@section('content')
<form action="/admin/categories/update/<?php echo $cat->id?>" method="POST">
@csrf
<center>Name:<br/><input type="text" name="name" value="<?php echo $cat->name;?>"/>
<br/><br/>
<input type="submit" value="update"/>
</form>
@endsection


