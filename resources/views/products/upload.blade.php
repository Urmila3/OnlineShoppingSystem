@extends('layouts.layout')

@section('content')
<form action="/admin/products/uploadfile" method="POST" enctype="multipart/form-data">
@csrf

<input type="file" name="publicpic" class="form-control"/><br/>

<input type="submit" name="submit" value="upload"/>
<input type="hidden" value="{{ csrf_token()}}" name="_token">

</form>


@endsection