{{-- ===================================================== 

    Here we create our POSTS, In our DASHBOARD 
    Here we edit, delete and upload images to the DB 

========================================================--}} 
@extends('layouts.app') 
@section('content') 

    <div class="row m-l-30">
    <a href="/posts" class="btn btn-default m-l-30">Hem</a> 
    <h1 class="m-l-30">Skapa ett inlägg</h1> 

        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} 
            <div class="form-group m-l-30 "> 
                {{Form::label('title', 'Title')}} 
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => ''])}} 
            </div> 

            <div class="form-group m-l-30"> 
                {{Form::label('body', 'Body')}} 
                {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}} 
            </div> 
             
            {{-- Here we upload ourimage --}} 
            <div class="form-group m-l-30"> 
                {{Form::file('cover_image')}} 
            </div> 

            {{Form::submit('Skicka', ['class' => 'btn btn-primary m-l-30'])}} 
        {!! Form::close() !!} 

</div>{{-- END row --}}
@endsection