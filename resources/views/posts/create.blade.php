{{-- ===================================================== 

    Here we create our POSTS, In our DASHBOARD 
    Here we can edit, delete and upload images to the DB 

========================================================--}} 
@extends('layouts.app') 

@section('content') 

    <div class="row m-l-30">

    <h1>Create post</h1> 

        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} 
            <div class="form-group m-l-30 "> 
                {{Form::label('title', 'Title')}} 
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}} 
            </div> 

            <div class="form-group m-l-30"> 
                {{Form::label('body', 'Body')}} 
                {{Form::textarea('body','', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}} 
            </div> 
             
            {{-- Here we upload ourimage --}} 
            <div class="form-group m-l-30"> 
                {{Form::file('cover_image')}} 
            </div> 

            {{Form::submit('Submit', ['class' => 'btn btn-primary m-l-30'])}} 
        {!! Form::close() !!} 

</div>{{-- END row --}}
@endsection