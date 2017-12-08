{{-- =======================================================

        About the web page

==========================================================--}}
        @extends('layouts.app')
        @section('content')

        <div class="nav-container">
         <div class="row">
            <div class="container-fluid">
               {{-- <img class="front-image" src={{asset('/upload_image/joshua-clay-27368.jpg')}} alt="Image on robot"></a> --}}
            </div>
         </div>

         <div class="row">
            <div class="col-12 col-lg-8 p-5 ">
               <div class="about-box">
                  <h1>{{ $title }}</h1>
                  <p class="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies ipsum in sem fermentum, eget venenatis augue laoreet. Morbi lacus mauris, aliquet eu dictum vitae, elementum ut dui. Nulla nibh elit, efficitur eu nisl quis, gravida malesuada lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed molestie leo sit amet tempus tristique. Mauris dolor nunc, convallis vel consectetur hendrerit, fringilla eu lectus. Nulla tincidunt vel elit quis pretium. Pellentesque tincidunt velit at bibendum convallis.</p>
               </div>
            </div>
         </div>
      </div>
   </div>{{-- END nav-container --}}
   @endsection