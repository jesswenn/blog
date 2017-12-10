{{-- =======================================================

  Here is MY home page

  ==========================================================--}}
  @extends('layouts.app')
  @section('content')
     {{-- <div class="row"> --}}
        {{-- <div class="col-md-8 col-md-offset-2"> --}}

  {{-- Welcome tect header--}}
  {{-- <h1 contenteditable data-heading="Fracture">{{$title}}</h1> --}}

  {{-- Welcome tect section --}}
{{--    <section>
     <div class="text-wrapper">
       <p class="text-wrapper-home">We start where you are.</p>
       <p class="text-wrapper-home">With who you are.</p>
       <p class="text-wrapper-home">And what you have.</p>
     </div>
 </section> --}}

 <div class="wrapper">
   {{-- <h1>Olle!</h1> --}}
   <div class="box a">
      <img class="front-image" src={{asset('/upload_image/frank-mckenna-118431.jpg')}} alt="Image on boy"></a>
  </div>
  {{-- <h1>Axel!</h1>--}}
  <div class=" box b">
      <img class="front-image" src={{asset('/upload_image/annie-spratt-66432.jpg')}} alt="Image on boy"></a>
  </div>
  {{-- <h1>Måns!</h1>--}}
  <div class="box c">
      <img class="front-image" src={{asset('/upload_image/jordan-whitt-54480.jpg')}} alt="Image on boy"></a>
  </div>
  {{-- <h1>Övriga bilder!</h1>--}}
  <div class="box d">
      <img class="front-image" src={{asset('/upload_image/annie-spratt-54459.jpg')}} alt="Image on boy"></a>
  </div>
  <div class="box e">
      <img class="front-image" src={{asset('/upload_image/nick-karvounis-75432.jpg')}} alt="Image on boy"></a>
  </div>
</div>
</section>
</div> {{-- END! Bootstrap Jumbotron --}}
</div>{{-- END! container-fluid front-image --}}
@endsection