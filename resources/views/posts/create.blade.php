{{-- ===================================================== 
Here we create our POSTS, In our DASHBOARD 
Here we edit, delete and upload images to the DB 
========================================================--}} 
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <a href="/posts" class="btn btn-default">Hem</a> 
      <h1 class="#">Skapa ett inlägg</h1>
      {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} 
      <div class="form-group"> 
         {{Form::label('title', 'Title')}} 
         {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => ''])}} 
      </div>
      <div class="form-group"> 
         {{Form::label('body', 'Body')}} 
         {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}} 
      </div>
      {{-- Here we upload our images --}} 
      <div class="form-group"> 
         {{Form::file('cover_image')}} 
      </div>
      {{Form::submit('Skicka', ['class' => 'btn btn-primary'])}} 
      {!! Form::close() !!} 
   </div>
   {{-- END row --}}
</div>
</div>
</div>
</div>
@endsection