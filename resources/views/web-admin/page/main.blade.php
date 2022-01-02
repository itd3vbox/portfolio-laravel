<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" content="notranslate">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        {{-- LOGO - START --}}
        <link rel="icon" href="{{ asset('images/app-icons/logo-150x150.png') }}" sizes="32x32">
        <link rel="icon" href="{{ asset('images/app-icons/logo-300x300.png') }}" sizes="192x192">
        <link rel="apple-touch-icon" href="{{ asset('images/app-icons/logo-300x300.png') }}">
        {{-- LOGO - END --}}
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- App -->
        <link rel="stylesheet" href="{{ asset('dist/web-admin/App.css') }}">
        @yield('extra-head')
    </head>
    <body>

        <div id="page-button-c1">
            <span></span>
        </div>

        @include('web-admin.page.c1.main')
        @include('web-admin.page.c2.main')

        <!-- App -->
        <script src="{{ asset('dist/web-admin/App.js') }}"></script>
        <script class="remove">
            const _APP = new App({})
            document.body.removeChild(document.querySelector('script.remove'))
        </script>
        @yield('extra-body')
    </body>
</html>