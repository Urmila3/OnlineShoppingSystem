@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
<style>
        .ttl {
            background:#fff;
            border: 1px #ebe9e9 solid;
            height:100px;
            width:500px;
            color:#37568f;
        }
        html, body {
            background-color: #584565;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
             font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        
            .prod-img{
                height:150px;
                width:150px;
            }
        .box{
             background-color:#ebe9e9 !important;
             background: grey;
            border: 1px solid #red;
            margin:10px 10px;
        }
        .add-to-cart-btn{
            background:green;
            color:#fff;
        }
        .search-result{
            background: #fff;
            color:#212F3C;
        }
</style>
<div class="container">
    <?php if(!isset($prodss[0])){ ?>
    <span class="search-result">Products are not available in..</span>
    <?php } ?>

<?php foreach($prodss as $product)  {  ?>
    <div class="box">
    <span class="box-title">
    <?php echo $product->product_name ?>
    </span><br/>
    <span class="box-body">
    <img src="/uploads/<?php echo $product->image ?>" class="prod-img"/><br/>
    RS:<?php echo $product->price ?>
    <a href="/site/add-cart" class="add-to-cart-btn">Add To Cart</a>
    </span>
    </div>
<?php } ?>

@endsection