{{-- =========================================================================
        Here we view our single 
        POST an (add comment)
        Edit and go back
=========================================================================--}}
@extends('layouts.app')
@section('content')

    <a href="/posts" class="btn btn-default">Go back!</a>
    <h1>{{$post->title}}</h1>
    <small class="author-written">Written on{{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}</small>
    {{-- <hr> --}}
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Image">
    <div>
        <p>{!!$post->body!!}</p>
    </div>


    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <div class="comments">

        <ul class="list-group">
            @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{ $comment->created_at->diffForHumans() }}:&nbsp;
                </strong>
                {{ $comment->body }}
            </li>                        
        </ul>
    </div> {{-- END comments --}}
@endforeach 
@endif


{{-- =========================================================================
        Show comments form, a user can add comments on everyones post, 
        and when not logged in you cant see the comments in the blog
=============================================================================== --}}
        @if(Auth::check())
        <div action="card">
            <div class="card-block">    

                <form method="POST" action="/posts/{{$post->id}}/comments" required>
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea id="body" name="comment" placeholder="Your comment here" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
            </div>{{-- END card-block --}}
        </div>{{-- END card --}}    
    </div>
@endif
@endif



{{-- =========================================================================
     IF YOU WANT THE DELETE BUTTON HERE, 
     OR ONLY COULD DELETE ON DASCHBOARD?????? 
=============================================================================== --}}
    {{-- @include('inc.messages')
    --}}                   
    {{-- In the PostController@destroy method we pass the post and the id so it knows with post to delete --}}
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger btn'])}}
    {!!Form::close()!!}
@endsection