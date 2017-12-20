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
    </div>

{{-- ======================================================= 
    
    Send mail form

==========================================================--}} 
<div class="col-md-6 m-t-75">
    <h1>Send mail</h1>
    <form action="send" method="POST">
        {{ csrf_field() }}
        to: <input type="text" name="to">
        message: <textarea name="msg" cols="30" rows="10"></textarea>
        <input type="submit" value="Send">
    </form>
    
@endsection