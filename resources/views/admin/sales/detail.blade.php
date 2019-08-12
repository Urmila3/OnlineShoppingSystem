@extends('layouts.layout')
@section('content')
<style>
.ttl {
    color:blue;
}
</style>
<div class="ttl"><h3>Sales Detail</h3><div>
    <table class="table table-striped">
        <tr>
            <th>Sales id</th><td><?php echo $salesd->sales_id; ?></td>
        </tr>

		<tr>
            <th>Amount</th> <td><?php echo $salesd->amount; ?></td>
        </tr>

        <tr>
            <th>Quantity</th> <td><?php echo $salesd->quantity; ?></td>
        </tr>
       
        
    </table>
@endsection