{{-- ================================================ 
    THE AUTH METHOD THATS INCLUDED WHEN MAKING 
    php artisan make:auth Obs! it will 
    replace your app.blade.php 
===================================================== --}}

{{-- <nav class="navbar navbar-inverse"> --}}
<div class="nav-container">
    <div class="container">

    <div class="row">
     <div class="center">
      <div class="logo ">
        <li>#</li>
        <li>m</li>
        <li>y</li>
        <li>a</li>
        <li>l</li>
        <li>b</li>
        <li>u</li>
        <li>m</li>
      </div>
    </div>

            <!-- Collapsed Hamburger -->
{{--             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
 --}}
            <!-- Navbar -->
            <ul class="nav-wrapper m-l-10 m-t-20">
                <li><a class="nav-wrapper-home" href="/">Home</a></li>
                <li><a class="nav-wrapper-home" href="/about">About</a></li>
                <li><a class="nav-wrapper-home" href="/posts">Gallery</a></li>
                <li><a class="nav-wrapper-home" href="/contact">Contact</a></li>
            </ul>

       
            {{-- TO DO...
                MAke the logo work in SCSS file???? --}}
                <style>

                    .center {
                      position: absolute;
                      top: 30%;
                      left: 80%;
                      transform: translate(-50%, -50%);
                        }


                        .logo{
                              margin: 0;
                              padding: 0;
                              display: flex;
                            }

                            .logo li {
                              list-style: none;
                              color: #19d8a7;
                              font-size: 3em;
                              font-weight: lighter;
                              letter-spacing: 12px;
                            }

                            .logo:hover li {
                                cursor: pointer;
                              animation: animate 2s linear both;
                            }

                            @keyframes animate {
                              0% {
                                transform: rotate(0deg) translateY(0px);
                                opacity: 1;
                                filter: blur(1px);
                              }

                              100% {
                                transform: rotate(45deg) translateY(-200px);
                                opacity :0;
                                filter: blur(20px);
                              }
                            }

                            .logo li:nth-child(1) {
                              animation-delay: 0s;
                            }

                            .logo li:nth-child(2) {
                              animation-delay: .4s;
                            }

                            .logo li:nth-child(3) {
                              animation-delay: .8s;
                            }

                            .logo li:nth-child(4) {
                              animation-delay: 1.2s;
                            }

                </style>

                <!-- Right Side Of Navbar Login and Register links-->
                <ul class="nav navbar-nav navbar-right m-r-12 m-t-10 m-b-40">

                    <!-- Authentication Links -->
                    @if(Auth::guest())
                        <li><a class="nav-wrapper-auth" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-wrapper-auth" href="{{ route('register') }}">Register</a></li>
                    @else
                </ul>

                {{-- Dropdown menu when logged in to Dashboard / And logout --}}
                <li class="dropdown navbar-right">
                    <a href="#" class="dropdown-toggle nav-wrapper-auth" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="position: relative;padding-left: 50px;">

                        {{-- Avatar image in dropdown menu
                            (abow) style="position: relative;padding-left: 50px; --}}
                        
                        {{ Auth::user()->name }} <span class="caret"></span>
                        <img class="img-fileUpload-small" src="/upload_image/avatars/{{ Auth::user()->avatar }}">
                    </a>
                    
                    {{-- Redirects to Public dashboard fol all user--}}
                    <ul class="dropdown-menu nav-wrapper-home" role="menu">
                        <li><a href="/dashboard">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-user-circle-o"></i>
                                </span>Dashboard</a></li>

                        <li><a href="/posts">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-pencil-square-o"></i>
                                </span>All posts</a></li>

                        <li><a href="/profile">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-user"></i>
                                </span>Profile</a></li>
                        

                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                            <span class="icon">
                                <i class="fa fa-fw m-r-10 fa-sign-out"></i>
                            </span>Logout</a>

                        <hr>
                        
                        {{-- Redirects to Manage dashboard --}}
                        <a href="{{route('manage.dashboard')}}">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-table"></i>
                                </span>CMS</a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
                {{-- @endguest --}} 
            </ul>
        </div>
    </div>
</div>{{-- END row --}} 
</div>{{-- END nav-container --}} 
