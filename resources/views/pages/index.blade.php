{{-- =======================================================

  Here is MY home page

  ==========================================================--}}
  @extends('layouts.app')
  @section('content')

<!-- 
engloayqannan@hotmail.com
https://www.facebook.com/Eng.Loayqannan
-->
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
    <h1 class="box-b-text m-l-30 m-t-30">Arkiv ? ...</h1>
    <p class="box-b-text m-l-30 m-t-30 m-r-30">Lorem ipsum dolor amet master cleanse tacos offal kickstarter asymmetrical pok pok. Edison bulb migas slow-carb mlkshk ramps XOXO. Activated charcoal austin poke prism palo santo, green juice intelligentsia church-key migas chillwave readymade.<br> 
      <br>IPhone listicle lo-fi fixie. Brooklyn cardigan vinyl williamsburg. Woke glossier hot chicken, cray next level af lo-fi vegan mixtape tbh man bun fashion axe semiotics.</p>
      {{-- <img class="front-image" src={{asset('/upload_image/annie-spratt-66432.jpg')}} alt="Image on boy"></a> --}}
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

   <div class="box f">
      <img class="front-image" src={{asset('/upload_image/frank-mckenna-118431.jpg')}} alt="Image on boy"></a>
  </div>

</div>



</section>
</div> {{-- END! Bootstrap Jumbotron --}}
</div>{{-- END! container-fluid front-image --}}
@endsection