<link rel="stylesheet" href="{{asset('css/app.css')}}">{{-- <- bootstrap css--}}
<style>
	.container{
		background-color:fcc09;
		padding:7px 7px;
		
	}
	.bg-dark{
		background-color:#D35400!important;
		padding:20px 10px;
		font-size:17px;
	}
	
</style>
@include('layouts.header')
<br/>
<br/>
<br/>

<main class="container mt-4">
@yield('content')
</main>
@include('layouts.footer')
<script src="{{asset('js/app.js')}}"></script> {{-- <- bootstrap and jquery --}}