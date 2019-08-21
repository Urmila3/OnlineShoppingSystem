@extends("layouts.app")
<style>
.product{
    height:200px;
    width:200px;
    background:#fff;
    margin:10px 10px;
}
</style>
@section('content')
<?php if (!empty($products)) {  ?>
<?php foreach($products as $item) { ?>
<div class="product">
<div><?php echo $item['name']; ?> </div>
<div><img src="/uploads/<?php echo $item['image']; ?>" width="200" height="200"/></div>
<div><?php echo $item['price']; ?> </div>
</div>
<?php } ?>
<?php } else {?>
<span>No items in the cart</span>
<?php } ?>
<div class="row">
    <div class="col-sn-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <a href="{{route('/checkout')}}" type="button" class="btn btn-success">Checkout</a>
    </div>
</div>
@endsection