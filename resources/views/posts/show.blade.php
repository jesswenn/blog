@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-default">Go back!</a>
		<h1>{{$post->title}}</h1>
		<hr>
			<small class="author-written">Written on{{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}</small>
	    	<hr>
			<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Image">
		<div>
			<p>{!!$post->body!!}</p>
		</div>
	<hr>
    	<div class="comments">
	    	<ul class="list-group">
	    		@foreach($post->comments as $comment)
		    		<li class="list-group-item">
		    			<strong>
		    				{{ $comment->created_at->diffForHumans() }}:&nbsp;
		    			</strong>
		    			{{ $comment->body }}
		    		</li>
		    	@endforeach		
	    	</ul>
	</div> {{-- END comments --}}
    	{{-- Show comments form, a user can add comments on everyones post, 
	    		and when not logged in you cant see the comments in the blog--}}
		<div action="card">
			<div class="card-block">	
				<form method="POST" action="/posts/{{$post->id}}/comments">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add comment</button>
					</div>
				</form>
			
			</div>{{-- END card-block --}}
		</div>{{-- END card --}} 	
	    	
    
</div>

@endsection

