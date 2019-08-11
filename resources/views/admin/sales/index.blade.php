@extends('layouts.layout')
@section('content')
<a href="/admin/sales/create" class="btn btn-info">new sales</a><br/><br/>
<table class="table table-striped">
<tr class="table-danger">
<th>SNo.</th>
<th>sales_id</th>
<th>amount</th>
<th></th>
<th></th>
</tr>
<?php $i=1; ?>
	<?php foreach($salArray as $sal){ ?>
<tr>
<td><?php echo $i++ ?></td>
<td><?php echo $sal->sales_id;?></td>
<td><?php echo $sal->amount;?></td>
<td></td>
<td><a class="btn btn-success" href="/admin/sales/edit/<?php echo $sal->id?>">edit</a>&nbsp;
<a class="btn btn-danger" href="sales/delete/<?php echo $sal->id?>">delete</a></td>
</tr>
<?php } ?>
</table>
@endsection