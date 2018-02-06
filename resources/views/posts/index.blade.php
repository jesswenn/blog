{{-- =========================================================================      
    Here we render ALL POSTS for ALL users
    and if no posts found an error message is shown
=============================================================================== --}}
@extends('layouts.app')
@section('content')

<div class="container">
   <div class="row">

{{-- <div class="col-md-8 col-md-offset-2"> --}}

         {{-- <a href="/posts" class="btn btn-default m-l-20">Hem</a> --}}
         <h1 class="m-l-30">Här är alla inlägg!</h1>
         {{-- Here we loop our posts in our DB --}}
         @if(count($posts) >= 1)
         @foreach($posts as $post)

             <div class="container-fluid">
                  <div class="col-md-4 col-sm-4">
                     {{-- <img class="img-responsive" src="{{ url($imageLink) }}"> --}}
                     <img class="#" style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Image">
                     {{-- </div> --}}
               </div>
            </div>



{{-- =============================================================================== 
         Link to every single post when click on it whit the post id 
==================================================================================== --}}   
         <div class="col-md-8 col-sm-8 ">
            <h3 class="m-l-20"><a class="single-post" href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
            <small class="author-written m-l-20">Written on {{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}</small>
         </div>
        @endforeach

          {{-- HERE WE PAGINATES THE PAGES --}}
             <div class="pagination">
                {{ $posts->links() }}
             </div>
             @else
                <p class="p-b-50">Du har inga poster!</p>
             @endif
          </div>
        </div>
    </div> {{-- END row --}}

@endsection