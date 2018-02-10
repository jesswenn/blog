{{-- ERROR MESSAGE --}}

   <div class="row">
    {{-- <div class="col-sm-8 blog-main"> --}}
@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">			
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger">
		{{session('error')}}
	</div>
@endif