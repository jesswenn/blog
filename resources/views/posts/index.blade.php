{{-- =========================================================================      
    Here we render ALL POSTS for ALL users
    and if no posts found an error message is shown
=============================================================================== --}}
@extends('layouts.app')
@section('content')
{{-- If smaller image thumbnail use 
col-md-8 col-md-offset-2 --}}
{{-- <div class="row">
<div class="col-md-8 col-md-offset-2"> --}}
   <div class="container">
      <div class="row">
         {{-- <a href="/posts" class="btn btn-default m-l-20">Hem</a> --}}
         <h1 class="m-l-20">Här är alla inlägg!</h1>
         {{-- Here we loop our posts in our DB --}}
         @if(count($posts) >= 1)
         @foreach($posts as $post)

         {{-- If want a border box and background around every post use the well class --}}     
         {{-- <div class="well"> --}}
            {{--  <div class="container-fluid"> --}}
               {{-- If you whant thr post NOT in row take the row class away--}}
               {{--  <div class="row"> --}}

                  <div class="col-md-4 col-sm-4">
                     {{-- <img class="img-responsive" src="{{ url($imageLink) }}"> --}}
                     <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Image">
                     {{-- </div> --}}
               </div>
            </div>
         </div>

{{-- =============================================================================== 
         Link to every single post when click on it whit the post id 
==================================================================================== --}}   
         <div class="col-md-8 col-sm-8 m-b-40">
            <h3><a class="single-post" href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <small class="author-written">Written on {{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}</small>
         </div>
      </div> {{-- END well class --}}
      @endforeach

      {{-- HERE WE PAGINATES THE PAGES --}}
      <div class="pagination">
         {{ $posts->links() }}
      </div>
      @else
         <p class="m-l-20">Du har inga poster!</p>
      @endif
   </div>
</div>
@endsection