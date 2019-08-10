@extends('layouts.layout')
@section('content')

<a href="/admin/categories/create" class="btn btn-info">new category</a><br/><br/>
<table class="table table-striped">
<tr class="bg-secondary">
<th>SNo.</th>
<th>Name</th>
<th></th>



</tr>
<?php $i=1; ?>
	<?php foreach($catArray as $cat){ ?>
<tr>
<td><?php echo $i++ ;?></td>
<td><?php echo $cat->name;?></td>

<td><a class="btn btn-success" href="categories/edit/<?php echo $cat->id?>">edit</a>&nbsp;
<a class="btn btn-danger" href="categories/delete/<?php echo $cat->id?>">delete</a></td>
</tr>
<?php } 
?>
</table>

@endsection 