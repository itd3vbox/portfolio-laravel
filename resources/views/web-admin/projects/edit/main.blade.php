@extends('web-admin.page.main')

@section('title', 'Project - ' . $data['project']->name)

@section('content')

    <div id="wa-p-e">

        @include('web-admin.projects.edit.content-top.main')

        <div class="page-tabs-nav">
            <div class="t-item">Overview</div>
        </div>

        <div class="page-tabs-contents">
            <div class="t-content">
                @include('web-admin.projects.edit.overview.main')
            </div>
        </div>

    </div>

@endsection


@section('extra-body')
    <script class="remove">
        _APP.projects().edit(@json($data))
        document.body.removeChild(document.querySelector('script.remove'))
    </script>
@endsection