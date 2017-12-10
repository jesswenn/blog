{{-- =====================================================

		Edit page – here we edit our single
		post via our dashboard

========================================================--}}
@extends('layouts.app')

@section('content')

    <div class="row m-l-30">
    <div class="col-sm-8 blog-main">
	
	<h1>Edit post<h1>

	{{-- PostController --}}
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
	</div>

	<div class="form-group">
		{{Form::label('body', 'Body')}}
		{{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
	</div>

{{-- =====================================================
		Upload image 
========================================================--}}
	<div class="form-group-choose-file">
		{{Form::file('cover_image')}}
	</div>

	{{Form::hidden('_method', 'PUT')}}
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection