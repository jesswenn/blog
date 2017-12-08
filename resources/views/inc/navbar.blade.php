 {{-- THE AUTH METHOD THATS INCLUDED WHEN MAKING php artisan make:auth Obs! it will replace your app.blade.php --}}

{{-- <nav class="navbar navbar-inverse"> --}}
<div class="nav-container">
    <div class="container">
        
        <!-- Branding Image / Maybe a logo here? Instead of Album name? -->
        {{-- <div class="navbar-header"> --}}

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#app-navbar-collapse"    aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image / Maybe a logo here? Instead of Album name? -->
     {{--        <a class="navbar-brand" href="{{ url('/') }}">
            </a>
        </div> --}}

            <!-- Navbar -->
            <ul class="nav-wrapper">
                <li><a class="nav-wrapper-home" href="/">Home</a></li>
                <li><a class="nav-wrapper-home" href="/about">About</a></li>
                <li><a class="nav-wrapper-home" href="/posts">Blog</a></li>
                <li><a class="nav-wrapper-home" href="/contact">Contact</a></li>
            </ul>

                <!-- Right Side Of Navbar Login and Register links-->
                <ul class="nav navbar-nav navbar-right">

                    <!-- Authentication Links -->
                    @if(Auth::guest())
                        <li><a class="nav-wrapper-auth" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-wrapper-auth" href="{{ route('register') }}">Register</a></li>
                    @else
                </ul>

                {{-- Dropdown menu when lkogged in to Dashboard / And logout --}}
                <li class="dropdown navbar-right">
                    <a href="#" class="dropdown-toggle nav-wrapper-auth" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu nav-wrapper-home" role="menu">
                        <li>
                            {{-- Redirects to Public dashboard fol all user--}}
                            <a href="/dashboard">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-user-circle-o"></i>
                                </span>Dashboard</a></li>
                        

                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                            <span class="icon">
                                <i class="fa fa-fw m-r-10 fa-sign-out"></i>
                            </span>Logout</a>
                        <hr>
                        
                        {{-- Redirects to Manage dashboard --}}
                        <a href="{{route('manage.dashboard')}}">
                                <span class="icon">
                                    <i class="fa fa-fw m-r-10 fa-user-circle-o"></i>
                                </span>Manage CMS</a></li>

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
</div>{{-- END nav-container --}} 
