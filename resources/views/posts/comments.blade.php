{{-- =====================================================

    Here we render all posts comments with image date
    and if no posts found an error message

========================================================--}}
@extends('layouts.app')

@section('content')

    
    <form action="{{ route('comments.store', $post->id) }}" method="POST" required>
        {{ csrf_field() }}
        <h1>The comments will show here...</h1>
    </form>
     {{-- Show comments form, a user can add comments on everyones post, 
                and when not logged in you cant see the comments in the blog--}}

    {{--     <div action="card">
            <div class="card-block">    
                <form method="POST" action="/posts/{{$post->id}}/comments" required>
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <textarea name="text" placeholder="Your comment here" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form> --}}
@endsection
