<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Page</title>
        <link rel="icon" href="/images/app-icons/logo-150x150.png" sizes="32x32">
        <link rel="icon" href="/images/app-icons/logo-300x300.png" sizes="192x192">
        <link rel="apple-touch-icon" href="/images/app-icons/logo-300x300.png">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" 
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" 
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('dist/web-admin/SignIn.css') }}">
    </head>
    <body>
        
        <div id="page-btn-menu">
            <div></div>
        </div>
        
        @include('web-admin.sign-in.c1.main')
        @include('web-admin.sign-in.c2.main')

        <script src="{{ asset('dist/web-admin/SignIn.js') }}"></script>
        <script>
            const _APP = new SignIn({})
        </script>
    </body>
</html>