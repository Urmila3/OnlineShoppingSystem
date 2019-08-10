@extends('layouts.layout')
@section('content')
<form action="/admin/products/update/<?php echo $prod->id?>" method="POST">
@csrf
<center>Category id:<br/><input type="text" name="category_id" value="<?php echo $prod->category_id;?>"><br/>
Product Name:<br/><input type="text" name="product_name" value="<?php echo $prod->product_name;?>"/><br/>
Product size:<br/><input type="text" name="product_size" value="<?php echo $prod->product_size;?>"/><br/>
Image:<br/><input type="file" name="image" value="<?php echo $prod->image;?>"/><br/>
Price<br/><input type="text" name="price" value="<?php echo $prod->price;?>"/><br/><br/>

<input type="submit" value="update"/>

</form>
@endsection

