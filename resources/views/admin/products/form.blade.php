@extends('layouts.layout')
@section('content')
<form action="/admin/products/save" method="post" enctype="multipart/form-data">
@csrf
<table>
<tr><th>Category</th><td>
<select name="category_id">
<<<<<<< HEAD
<?php foreach($cats as $cat){?>
<option value="<?php echo $cat->id?>"><?php echo $cat->name?></option>
<?php } ?>
</section>
</td>

=======
<?php foreach($cats as $cat)  { ?>
<option value="<?php echo $cat->id ?>"><?php echo $cat->name ?></option>
<?php } ?>
</section>
</td>
>>>>>>> 2db4d329c5279569a69d6f4c44f1034a8f17d5c9
<tr><th>Product name:</th><td><input type="text" name="product_name"></td>
<tr><th>Product size:</th><td><input type="text" name="product_size"></td>
<tr><th>Image:</th><td><input type="file" name="image" class="form-control" required></td>

<tr><th>Price:</th><td><input type="text" name="price"></td>
<tr><th></th><td><input type="submit" value="Add Products" class="btn btn-info"></td></tr>
</table>
</form>
@endsection

