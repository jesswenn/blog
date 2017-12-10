{{-- ======================================================= 
    
    Contact page 

==========================================================--}} 
@extends('layouts.app') 
@section('content')

<div class="row m-l-30">
<div class="col-sm-8 blog-main">
<h1>{{ $title }}</h1>

<div class="group">
    <div class="left">
        <p><strong>#myalbum</strong></p>
        <p>Birger Jarlsgatan 9</p>
        <p>STOCKHOLM</p>
        <br>
        <p>my@album.se +46(8)509 30 21</p>
    </div>

    <div class="right">
        <img class="img-contact" src={{asset( '/upload_image/map.jpg')}} alt="Image on boy">
    </div>
</div>

<h1>{{ $title }}</h1>
<form role="form" id="contact-form" class="contact-form">
    <div class="row">
        <div class="col-md-6">

            <div class="form-group">
                <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Name">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn main-btn pull-left">Send a message</button>
        </div>
    </div>
</form>

@endsection