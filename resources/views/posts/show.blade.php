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
	
    {{-- If the user is not a guest,
    		 then they will not bee able to see this
    		 
    		 If aut user id is ecual to the post user id then its ok to see it
    		 the user has to match the post user id--}}
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
    			<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
	    
		    {{-- In the PostController@destroy method we pass the post and the id so it knows with post to delete --}}
		    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
		        {{Form::hidden('_method', 'DELETE')}}
		        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
		    {!!Form::close()!!}
	    @endif
    @endif

    {{-- SHOW COMMENTS FORM --}}

    <div class="card">
	    	<div class="card-block">
	    		<form method="POST" acrion="/posts{{$post->id}}/comments">

	    			{{ csrf_field() }}

	    			{{-- {{ method_field('PATCH')}} --}}

	    		<div class="form-group">
	    			<textarea name="body" placeholder="Comment here" cols="30" rows="10" class="form-control"></textarea>	    			
	    		</div>

		    		<div action="form-group">
		    			<button type="submit" class="btn m-b-75">Add Comment</button>	
		    		</div>

	    		</form>
	    	</div>{{-- END card-block --}}
    </div>{{-- END card --}}
@endsection


	{{-- btn btn-primary
    			<form method="POST" action="/comment/{{$post->id}}/comments">

    				{{ csrf_field() }}
    				
		    		<div class="form-group">
					{{Form::textarea('comment','', ['class' => 'form-control', 'placeholder' => 'Comments here'])}}
				</div>

    				<div class="form-group">
					{{Form::submit('Submit', ['class' => 'btn btn-primary', ])}}
					{!! Form::close() !!}
				</div>	 --}}


 	
