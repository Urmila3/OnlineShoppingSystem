@extends('layouts.layout')
@section('content')
<a href="/admin/sales/create" class="btn btn-info">new sales</a><br/><br/>
<table class="table table-striped">
<tr class="table-danger">
<th>SNo.</th>
<th>customer id</th>
<th>amount</th>
<th></th>
<th></th>
</tr>
<?php $i=1; ?>
	<?php foreach($salArray as $sal){ ?>
<tr>
<td><?php echo $i++ ?></td>
<td><?php echo $sal->customer_id;?></td>
<td><?php echo $sal->amount;?></td>
<td></td>
<td>
<a class="btn btn-secondary" href="sales/detail/<?php echo $sal->id?>">detail</a></td>
</tr>
<?php } ?>
</table>
@endsection