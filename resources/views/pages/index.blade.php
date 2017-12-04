{{-- =======================================================

  Here is MY home page

==========================================================--}}
@extends('layouts.app')
@section('content')
   <h1 contenteditable data-heading="Fracture">{{$title}}</h1>
   <div class="wrapper">
      {{-- <h1>Olle!</h1> --}}
      <div class="box a">
         <img class="front-image" src={{asset('/upload_image/frank-mckenna-118431.jpg')}} alt="Image on boy"></a>
      </div>
      {{-- <h1>Axel!</h1>--}}
      <div class=" box b">
         <img class="front-image" src={{asset('/upload_image/kelley-bozarth-31364.jpg')}} alt="Image on boy"></a>
      </div>
      {{-- <h1>Måns!</h1>--}}
      <div class="box c">
         <img class="front-image" src={{asset('/upload_image/joshua-clay-27368.jpg')}} alt="Image on boy"></a>
      </div>
      {{-- <h1>Övriga bilder!</h1>--}}
      <div class="box d">
         <img class="front-image" src={{asset('/upload_image/nick-karvounis-75432.jpg')}} alt="Image on boy"></a>
      </div>
      <div class="box e">
         <img class="front-image" src={{asset('/upload_image/nick-karvounis-75432.jpg')}} alt="Image on boy"></a>
      </div>
   </div>
   </section>

   <style>
      * {
      box-sizing: border-box;
      }
      h1{
      margin: 20px;
      font-size: 5rem;
      text-align: center;
      }
      .box e{
      background-color: #fff;
      }
      .wrapper {
      display: grid;
      /*display: flex; *//* Stack on row */
      grid-gap: 10px;
      grid-template-columns: 300px 300px 500px;
      /*background-color: #fff;*/
      color: #444;
      padding-bottom: 50px;
      display: grid;
      /* Display as a Grid */
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      /* repeat = as many times as you can fit */
      /* auto-fit = fit as many items on the line as possible, go bigger if you need to */
      /*minmax = (min size, max size) = the minimum size the column should be is 200px, but if there's space then give them all 1fr of that width. */
      grid-gap: 10px;
      }
      .box {
      /*background-color: #444;*/
      color: #fff;
      border-radius: 5px;
      /*padding: 10px;*/
      /*font-size: 150%;*/
      }
      .a {
      grid-column: 1 / span 2;
      }
      .b {
      grid-column: 3 ;
      grid-row: 1 / span 2;
      }
      .c {
      grid-column: 1 ;
      grid-row: 2 ;
      }
      .d {
      grid-column: 2 ;
      grid-row: 2 ;
      }
      .e {
      grid-column: 1 / span 3;
      }

      /* FRACTURE HEADEING TEXT */
      h1 {
	color: black;

	&::before,
	&::after {
		content: attr(data-heading);
		position: absolute;
		left: 0;
		overflow: hidden;
	}
	
	// middle
	&:before {;
		height: 50%;
		color: white;
		text-shadow: 3px -2px 5px white, -3px 3px 4px white;
	}

	/*Top*/
	&:after {
		transform: translateX(-10px);
		height: 49%;
		color: black;
	}
}


/*Animation*/
h1::after {
	transform: translateX(0);
	animation: fracture 5s infinite ease;
}

@keyframes fracture {
	0% {
		transform: translateX(0);
	}
	50% {
		transform: translateX(-20px);
	}
}


/* Setup */
html {
	height: 100vh;
}

body {
	font-family: 'Roboto', sans-serif;
	height: 100vh;
}

h1 {
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;
	margin: 0;
	font-size: 10vw;
	font-weight: 900;
	line-height: 8vw;
	letter-spacing: 3vw;
	text-transform: uppercase;
}
</style>

</div> {{-- END! Bootstrap Jumbotron --}}
</div>{{-- END! container-fluid front-image --}}
@endsection