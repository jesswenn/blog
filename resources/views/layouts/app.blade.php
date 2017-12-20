<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fawicon -->
    <link rel="shortcut icon" href="{{{ asset('upload_image/favicon.png') }}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CDN Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- TO DO ASK ! 
        When importing this the CSS worked :)?????? -->
    <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">

    {{-- Bootstrap CDB --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    {{-- Render VUE coponent --}}
{{--     <div id="app">
        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>
        <router-link to="/about">Blog</router-link>
        <router-view></router-view>
    </div> --}}


    <div class="container">
        <div class="row">
            @include('layouts.navbar')

            @yield('content')

        </div> {{-- END row --}} 
    </div> {{-- END container--}}                          
    @include('layouts.footer')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/assets/js/ckeditor.js"></script>

        <script>
            CKEDITOR.replace('article-ckeditor');
        </script>
</body>

{{-- @stack('scripts')
{{!!  Html::scripts('js/hello.js') !!}}
 --}}
</html>