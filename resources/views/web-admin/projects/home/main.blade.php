@extends('web-admin.page.main')

@section('title', 'Projects')

@section('content')

    <div id="wa-p-h">

        @include('web-admin.projects.home.options.main')
        @include('web-admin.projects.home.list.main')

        @include('web-admin.projects.home.dialog-store.main')

    </div>

@endsection


@section('extra-body')
    <script class="remove">
        _APP.projects().home(@json($data))
        document.body.removeChild(document.querySelector('script.remove'))
    </script>
@endsection