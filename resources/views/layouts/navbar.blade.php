{{-- THE AUTH METHOD THATS INCLUDED WHEN MAKING 
    php artisan make:auth Obs! it will 
    replace your app.blade.php  --}}

<div class="nav-container">
        <div class="container">
            <!-- Navbar -->
            <ul class="nav-wrapper m-t-50">
                <li><a class="nav-wrapper-home" href="/">Home</a></li>
                <li><a class="nav-wrapper-home" href="/about">About</a></li>
                <li><a class="nav-wrapper-home" href="/posts">Gallery</a></li>
                <li><a class="nav-wrapper-home" href="/contact">Contact</a></li>
            </ul>
            <div class="row">
                <div class="center">
                    <div class="logo">
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
                
                <!-- Right Side Of Navbar Login and Register links-->
                <ul class="nav navbar-nav navbar-right m-t-10 m-b-40">
                    <!-- Authentication Links -->
                    @if(Auth::guest())
                    <li><a class="nav-wrapper-auth " href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-wrapper-auth m-r-30" href="{{ route('register') }}">Register</a></li>
                    @else
                </ul>
                {{-- Dropdown menu when logged in to Dashboard / And logout --}}
                <li class="dropdown navbar-right">
                    <a href="#" class="dropdown-toggle nav-wrapper-auth" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative;padding-left: 50px;">
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
                            </span>Dashboard</a>
                        </li>
                        <li><a href="/posts">
                            <span class="icon">
                            <i class="fa fa-fw m-r-10 fa-pencil-square-o"></i>
                            </span>All posts</a>
                        </li>

                    {{-- PROFILE PAGE UNDER CONSTRUVTION :) --}}
                    {{--     <li><a href="/profile">
                            <span class="icon">
                            <i class="fa fa-fw m-r-10 fa-user"></i>
                            </span>Profile</a>
                        </li> --}}

                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <span class="icon">
                            <i class="fa fa-fw m-r-10 fa-sign-out"></i>
                            </span>Logout</a>
                       
                            {{-- Redirects to Manage dashboard --}}
                      {{--       <a href="{{route('manage.dashboard')}}">
                            <span class="icon">
                            <i class="fa fa-fw m-r-10 fa-table"></i>
                            </span>CMS</a>
                        </li> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </li>
                    </ul>
                </li>
                @endif{{-- END @endif --}} 
                </ul>
            </div>
        </div>{{-- END row --}} 
    </div>{{-- END nav-container --}} 
