<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link href="https://fonts.googleapis.com/css?family=Scope+One" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <textarea name="ckeditor" id="ckeditor" cols="30" rows="10"></textarea> --}}
            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')    
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
