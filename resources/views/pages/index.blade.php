@extends('layouts.app')
        
@section('content')
	<div class="jumbotron text-center">
		<h1>{{$title}}</h1>
		{{-- <h1>Ho ho</h1> --}}

		{{-- Img on frontpage --}}
		{{-- <img class="img" src="/upload_image/homePage.jpg" alt=""> --}}
		
		{{-- TO DO!
			Is this image dynamic now how do i see this? --}}
		<img src={{asset('/upload_image/homePage.jpg')}} alt="Image on children"></a>

	    	<p>This is my own album </p>
	    	<p><a class="btn-lgbtn-primary" href="/login" role="button">Login</a> 
	    	<a class="btn btn-sucsses btn-lg" href="/register" role="button">Register</a></p>
	</div>{{-- END! Bootstrap Jumbotron --}}

@endsection

