@extends('layouts.app')
        
@section('content')
	{{-- <div class="container">
		
	</div> --}}
	{{-- End .container --}}
	{{-- <div class="container-fluid front-image"> --}}
			<div class="jumbotron text-center front-image">
				<h1>{{$title}}</h1>
				{{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> --}}
		      	{{-- <img class="front-image" src={{asset('/upload_image/blue-robot.jpg')}} alt="Image on robot"></a> --}}
		      {{-- </div> --}}
	
			</div>{{-- END! Bootstrap Jumbotron --}}
		</div>{{-- END! container-fluid front-image --}}

	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
				{{-- <img class="front-image" src={{asset('/upload_image/blue-robot.jpg')}} alt="Image on robot"></a> --}}
			</div>
		{{-- 	<div class="col-4">
				<img class="front-image" src={{asset('/upload_image/blue-robot.jpg')}} alt="Image on robot"></a>
			</div> --}}
{{-- 			<div class="col-4">
				<img class="front-image" src={{asset('/upload_image/blue-robot.jpg')}} alt="Image on robot"></a>
			</div> --}}
		</div>
	</div>
@endsection