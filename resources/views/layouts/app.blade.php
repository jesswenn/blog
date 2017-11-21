<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- CDN Font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- TO DO ASK Frida:
        When importing this the CSS worked :)?????? -->
    <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <textarea name="ckeditor" id="ckeditor" cols="30" rows="10"></textarea> --}}
            @include('inc.navbar')
            {{-- @include('layouts.sidebar') --}}
            <div class="container">
                @include('inc.messages')

                @yield('content')   
                {{-- @include('layouts.sidebar')  --}}
            </div>
        </div>
        
    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>
    
    {{-- TO DO! Fixa så CKEDITOR synkas STÄMMER MED 
        textarea som tydligen måste finnas (se slack) --}}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
     {{-- <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script‌​>  --}}
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
