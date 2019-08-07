@extends('layouts.layout')
@section('content')

<a href="/customers/create" class="btn btn-info">new customer</a><br/><br/>
<table class="table table-striped">
<tr>
<th>SNo.</th>
<th>Name</th>
<th>Address</th>
<th>Mobile</th>
<th></th>
<th></th>
</tr>
<?php $i=1; ?>
	<?php foreach($custArray as $cust){ ?>
<tr>
<td><?php echo $i++ ?></td>
<td><?php echo $cust->name;?></td>
<td><?php echo $cust->address;?></td>
<td><?php echo $cust->mobile;?></td>
<td><a href="customers/edit/<?php echo $cust->id?>">edit</a></td>&nbsp;
<td><a href="customers/delete/<?php echo $cust->id?>">delete</a></td>

</tr>
<?php } ?>
</table>
@endsection