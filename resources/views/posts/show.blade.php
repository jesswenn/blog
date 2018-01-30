{{-- ========================================================================= 
        Single POST
        add comments on a post, Edit post and go back btn
=========================================================================--}} 
@extends('layouts.app') 
@section('content') 
<div class="container">
   {{-- <div class="row m-l-30"> --}}
      <a href="/posts" class="btn btn-default">Hem</a> 
      <h1>{{$post->title}}</h1>
      <small class="author-written">Written on{{ $post->created_at->toFormattedDateString() }} by {{$post->user->name}}</small> 
      {{-- <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="Image"> --}}
      <?php $singleimgLink = '/storage/cover_images/' . $post->cover_image; ?>
      {{-- <img src="{{ asset ('cover_images/' . $post->cover_image ) }}" width='800' height="400"> --}}
      <img style="width:100%" src="{{ url($singleimgLink) }}"> 
      <div>
         <p>{!!$post->body!!}</p>
      </div>
      
      @if(!Auth::guest()) 
      @if(Auth::user()->id == $post->user_id) 
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
         @endforeach  
         @endif 

{{-- ========================================================================= 
        Show comments 
=============================================================================== --}} 
         @foreach($post->comments as $comment)
         <li class="list-group-item">
            <strong>
            {{ $comment->created_at->diffForHumans() }}:&nbsp; 
            </strong>
            {{ $comment->body }}
         </li>
         @endforeach
         
{{-- ========================================================================= 
        Add comment
=============================================================================== --}} 
         <div class="card">
            <div class="card-block">
               <form method="POST" action="/posts/{{ $post->id }}/comments">
                  {{ csrf_field() }}
                  <div class="form-group">
                     <textarea name="body" placeholder="Your comment here" class="form-control" required>
                     </textarea>
                  </div>
                  {{-- End form-group --}}
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary">Lägg till kommentar</button>
                     <a href="/posts/{{$post->id}}/edit" class="btn btn-default m-l-30">Redigera</a> 
                  </div>
                  {{-- End form-group --}}
               </form>
               @include('inc.messages');
            </div>
            {{-- End card-block --}}
         </div>
         {{-- End card --}}
      </div>
   </div>
   {{-- END col --}} 
</div>
{{-- END row --}} 
</div> {{-- END comments --}} 
@endif 
@endsection

{{-- ========================================================================= 
Here if we want to delet a post on the single post show btn here
If not only delete a post on the DASHBOARD  
=============================================================================== --}} 
{{-- @include('inc.messages') --}}                   
{{-- In the PostController@destroy method we pass the post and the id so it knows with post to delete --}} 
{{-- {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class' => 'pull-right'])!!} 
{{Form::hidden('_method', 'DELETE')}} 
{{Form::submit('Delete', ['class' => 'btn btn-danger btn'])}} 
{!!Form::close()!!}  --}}