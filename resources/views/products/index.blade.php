@extends('layouts.layout')
@section('content')

<a href="products/create" class="btn btn-info">new product</a><br/><br/>
<table class="table table-striped">
<tr>
<th>SNo.</th>
<th>category_id</th>
<th>product_name</th>
<th>product_size</th>
<th>price</th>
<th></th>
<th></th>
</tr>
<?php $i=1; ?>
	<?php foreach($proArray as $prod){ ?>
<tr>
<td><?php echo $i++ ;?></td>
<td><?php echo $prod->category_id;?></td>
<td><?php echo $prod->product_name;?></td>
<td><?php echo $prod->product_size;?></td>
<td><?php echo $prod->price;?></td>
<td><a href="products/edit/<?php echo $prod->id?>">edit</a></td>&nbsp;
<td><a href="products/delete/<?php echo $prod->id?>">delete</a></td>
</tr>
<?php } ?>
</table>

@endsection