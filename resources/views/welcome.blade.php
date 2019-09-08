<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3B</title>

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .featured{
                width: 1270px;
                overflow-x:auto;
                overflow-y:none;
            }
            

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container{
                margin-top:50px;
                font-size:20px;
                height:610px;
                width:100%;
                background: #a99ca3 ;
                color:#584565;
            }
            .prod-img{
                height:150px;
                width:150px;
            }
            .box{
                float:left;
                background-color:#ebe9e9 !important;
                background: grey;
                border: 1px solid #red;
                margin:10px 10px;
            }
            .add-to-cart-btn{
                background:green;
                color:#fff;
            }
            #product-txt{
                width: 400px;
                margin-left:50px;
            }
        </style>
        <?php if(isset($msg) && $msg == 1) { ?>
        <script>
        alert("Added Successfully");
        </script>
        <?php } ?>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth        

                       <?php 
                         foreach($Categories as $cute){ ?>
                            <a href="/search/find/<?php echo $cute->id; ?>"><?php echo $cute->name?></a>
                       <?php } ?>

                        <a class="nav-link" href="/orders/cart">{{ __('Cart') }} 
                        <?php if (Session::get('cart-item') != null) { ?>
                        (<?php echo count(Session::get('cart-item')) ?>)
                        <?php }else{ ?>
                        (0)
                        <?php } ?>
                        </a>
                            
                       <a href="{{ url('/home') }}">Home</a>
                      



                    @else
                        <a href="{{ route('login') }}">Customer login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Sign up</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">

                
                <h1><span class"badge badge-info">Trendy Clothes</span></h1>

                <span>Our Product</span>

                <div class="row featured">

            <?php foreach($products as $product)  {  ?>
                <div class="box">
                <span class="badge badge-secondary">
                <?php echo $product->product_name ?>
                </span><br/>
                <span class="box-body">
                <img src="/uploads/<?php echo $product->image ?>" class="prod-img"/><br/>
                RS:<?php echo $product->price ?>
                <a href="/orders/add-cart/<?php echo $product->id ?>" class="add-to-cart-btn">Add To Cart</a>
                </span>
                </div>
            <?php } ?>
        </div>
        </div>
    </body>
</html>
