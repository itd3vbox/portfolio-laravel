@extends('web.page.main')

@section('title', env('APP_NAME'))

@section('extra-head')
    <link rel="canonical" href="{{ env('APP_URL') }}/">
    <link rel="shortlink" href="{{ env('APP_URL') }}">
    <meta name="description" content="" />
@endsection


@section('content')

    <div id="w-h">

        @include('web.home.zero.main')
        @include('web.home.projects.main')
        @include('web.home.blog.main')
        @include('web.home.contact.main')

    </div>

@endsection

@section('extra-body')
    <script class="remove">
        _APP.home({})
        document.body.removeChild(document.querySelector('script.remove'))
    </script>
@endsection