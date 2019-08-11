@extends('layouts.layout')

@section('content')
<form action="/admin/products/uploadfile" method="POST" enctype="multipart/form-data">
@csrf

<input type="file" name="image_pic"/><br/>

<input type="submit" name="submit" value="upload"/>


</form>


@endsection