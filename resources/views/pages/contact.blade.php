{{-- =======================================================
        
        Contact info page

==========================================================--}}
@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-4">
    <h1>{{ $title }}
    </h1>
    <a href="#img1">
      <img class="front-image" src={{asset('/upload_image/annie-spratt-54459.jpg')}} alt="Image on boy">
    </a>

    <div class="lightbox-target" id="boy">
      <a href="#_" class="lightbox" id="img1">
        <h3 class="light-box-close-link">Close or click on image!</h3>
        <img src={{asset('/upload_image/annie-spratt-54459.jpg')}} alt="Image on boy">
      </a>
    </div>
  </div>
</div>
@endsection
