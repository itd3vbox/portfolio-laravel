@extends('web-admin.page.main')

@section('title', 'Articles')

@section('content')

    <div id="wa-a-h">

        @include('web-admin.articles.home.options.main')
        @include('web-admin.articles.home.list.main')

        @include('web-admin.articles.home.dialog-store.main')

    </div>

@endsection


@section('extra-body')
    <script class="remove">
        _APP.articles().home(@json($data))
        document.body.removeChild(document.querySelector('script.remove'))
    </script>
@endsection