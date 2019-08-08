@extends('layouts.layout')
@section('content')
<form action="/categories/update/<?php echo $cat->id?>" method="POST">
@csrf
Name:<input type="text" name="name" value="<?php echo $cat->name;?>"/>

<input type="submit" value="update"/>
</form>
@endsection
//image:<input type="text" name="image" value="<?php echo $cat->image;?>"/>

