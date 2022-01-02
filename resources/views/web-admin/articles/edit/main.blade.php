@extends('web-admin.page.main')

@section('title', 'Article - ')

@section('content')

    <div id="wa-a-e">
        
        @include('web-admin.articles.edit.content-top.main')

        <div class="page-tabs-nav">
            <div class="t-item">Overview</div>
        </div>

        <div class="page-tabs-contents">
            <div class="t-content">
                @include('web-admin.articles.edit.overview.main')
            </div>
        </div>

    </div>

@endsection


@section('extra-body')
    <script class="remove">
        _APP.articles().edit({})
        document.body.removeChild(document.querySelector('script.remove'))
    </script>
@endsection