@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div>
	<img src="Homepg/pic1.jpg" width="1345px" height="250px">
</div>

<div>
<img src="Homepg/logo.jpg" width="300px" width="200px">
<marquee width="70%" direction="left" height="50px">
<table class="table table-striped"><tr class="table-danger"><td>
<label><font face="Lucida Handwriting" size="+1" color="black"><big>
Life isn't perfect but your outfit can be.
<img src="Homepg/men.png" width="20px" width="40px">
<img src="Homepg/women.png" width="20px" width="40px">
<img src="Homepg/kid.png" width="20px" width="40px">
<b> Visit US now: </b>3B Fashion wears, Ranjana galli, Newroad, Kathmandu
</big></font></label>
</td></tr></table>
</marquee>
</div>

<div>
<label><font face="Lucida Handwriting" size="+1" color="#077Ac0f">
<b>Designed for fit. Loved for style.<br/>Visit US now at...</b>
</font></label>
<div>
	
	<img src="Homepg/map.png" width="300px" width="200px">
	<img  src="Homepg/d.png" width="190px" width="90px"/>
	<img  src="Homepg/dd.png" width="190px" width="90px"/>
	<img src="Homepg/ddd.png" width="180px" width="90px"/>
	<img src="Homepg/iii.png" width="195px" width="90px"/>
</div>

<div>

</div>
@endsection