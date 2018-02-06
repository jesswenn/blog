{{-- =====================================================
		Edit page – here we edit our single
		post via our dashboard
========================================================--}}
@extends('layouts.app')
@section('content')

<div class="container ">
    <div class="row">
    	<a href="/posts" class="btn btn-default">Hem</a>
	<h1><h1>
		
{{-- =====================================================
	    TO DO! 
	    2018-02-20
	    Make an arrow to show to go back
	    Nicer simple and clean
========================================================--}}
	{{-- <a href="/dashboard">
	<i class="fa fa-arrow-left" aria-hidden="true"></i></a> --}}

	{{-- PostController --}}
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		{{Form::label('title', 'Redigera inlägg')}}
		{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
	</div>

	<div class="form-group">
		{{Form::label('', '')}}
		{{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
	</div>

{{-- =====================================================
		Upload image 
========================================================--}}
			<div class="form-group-choose-file">
				{{Form::file('cover_image')}}
			</div>

			{{Form::hidden('_method', 'PUT')}}
			<div class="#"> {{Form::submit('Skicka', ['class' => 'btn btn-primary'])}} </div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
