@extends('layouts.app')

@section('content')
	<h1>Our posts!</h1>
		{{-- Here we loop truw our posts in our DB --}}
		@if(count($posts) > 1)
			@foreach($posts as $post)
				<div class="well">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Image">
						</div>
						<div class="col-md-8 col-sm-8">
							{{-- Link to every single post when click on it whit the post id --}}
							
							<h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
							<small>Written on{{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}</small>		
						</div>		
					</div>
				</div>
			@endforeach

			{{-- HERE WE PAGINATES THE PAGES --}}
			{{ $posts->links() }}
		@else
			<p>No post found!</p>
		@endif

@endsection