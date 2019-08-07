@extends('layouts.layout')
@section('content')
<form action="/products/update/<?php echo $prod->id?>" method="POST">
@csrf
Category id:<input type="text" name="category_id" value="<?php echo $prod->category_id;?>"/>
Product Name:Category id:<input type="text" name="product_name" value="<?php echo $prod->product_name;?>"/>
Product size:Category id:<input type="text" name="product_size" value="<?php echo $prod->product_size;?>"/>
Price:Category id:<input type="text" name="price" value="<?php echo $prod->price;?>"/>

<input type="submit" value="update"/>
</form>
@endsection