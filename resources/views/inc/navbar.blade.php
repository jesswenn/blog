 {{-- THE AUTH METHOD THATS INCLUDED WHEN MAKING php artisan make:auth Obs! it will replace your app.blade.php --}}

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image / Maybe a logo here? Instead of Album name? -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{-- {{ config('app.name', 'Laravel') }} --}}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Navbar -->
            <ul class="nav navbar-nav">
                <li><a class="#" href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/posts">Blog</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

                <!-- Authentication Links -->
                @if(Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                
                {{-- Dropdown menu when lkogged in to Dashboard / And logout --}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="/dashboard">
                                <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>
                            Dashboard</a></li>

                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                            <span class="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>
                            Logout</a>

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
</nav>