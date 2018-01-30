{{-- ERROR MESSAGE --}}

   <div class="row">
    {{-- <div class="col-sm-8 blog-main"> --}}
@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger m-l-70">			
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success m-l-70">
		{{session('success')}}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger m-l-70">
		{{session('error')}}
	</div>
@endif