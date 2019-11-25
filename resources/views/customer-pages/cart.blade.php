@extends("layouts.app")
<style>
.product{
    height:auto;
    width:200px;
    background:#fff;
    margin:10px 10px;
    float:left;
    margin-bottom:60px;
    background:#fff;
}
.product-wrapper{
    width:100%;
    height:500px;
}

#no-msg {
    padding:10px 10px;
    background:white;
}
.nopoint span{
    color:red;
    cursor:none;
}
</style>
@section('content')
<div class="product-wrapper">
<?php if (!empty($products)) {  ?>
<?php $total = 0; ?>
<?php foreach($products as $item) { ?>
<div class="product">
<div><center><b><big><?php echo $item['name']; ?></big> </b></center></div>
<div><img src="/uploads/<?php echo $item['image']; ?>" width="200" height="200"/></div>
<?php  $total += $item['price']; ?> 
<div><b><big><?php echo "Rs.".$item['price']; ?></big> </b></div>
<a class="btn btn-secondary" href="/cart/remove/<?php echo $item['id'] ?>">Remove cart </a>

</div>
<?php } ?>
<span class="btn btn-info nopoint"><span id="total-amount">Total amount: <?php echo $total; ?></span></span>
<a href="/cart/checkout" class="btn btn-success">Checkout</a> &nbsp; 
<a href="/orders/cart/empty" class="btn btn-danger">Empty Cart</a>
</div>
<?php } else {?>
<span id="no-msg">No items in the cart</span>
<?php } ?>

@endsection