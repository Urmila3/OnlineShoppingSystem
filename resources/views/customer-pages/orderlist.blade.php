@extends("layouts.app")

<style>
    .order-content{
        width: 500px;
        heigth: 500px;
        background: #fff;
    }
    .container{
        background: #fff;
    }
    .ttl{
        background: #fff;
    }
    .featured{
        overflow-x: auto;
        overflow-y: none;
    }
</style>

@section('content')
<div class="container">
    <div class="row featured">
        <?php if(isset($sales)) { ?> 

        <table class="table">
            <tr>
                <td>Sales Id</td>
                <td>Amount</td>
            </tr>
            <?php foreach($sales as $sal){ ?>
            <tr>
            <td><?php echo $sal->id ?></td>
            <td><?php echo $sal->amount ?></td>
            </tr>
            <?php } ?>
        </table>
            <?php } ?>
    </div>
    </div>
@endsection