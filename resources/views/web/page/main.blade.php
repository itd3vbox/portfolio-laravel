<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="icon" href="{{ asset('images/app-icons/logo-150x150.png') }}" sizes="32x32">
        <link rel="icon" href="{{ asset('images/app-icons/logo-300x300.png') }}" sizes="192x192">
        <link rel="apple-touch-icon" href="{{ asset('images/app-icons/logo-300x300.png') }}">
        <meta name="google" content="notranslate">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <!-- App -->
        <link rel="stylesheet" href="{{ asset('dist/web/App.css') }}">
        @yield('extra-head')
    </head>
    <body>

        <div id="button-page-c1">
            <div></div>
        </div>
        
        @include('web.page.c1.main')
        @include('web.page.c2.main')
       
        <!-- App -->
        <script src="{{ asset('dist/web/App.js') }}"></script>
        <script class="remove">
            const _APP = new App({})
            document.body.removeChild(document.querySelector('script.remove'))
        </script>
        @yield('extra-body')
    </body>
</html>