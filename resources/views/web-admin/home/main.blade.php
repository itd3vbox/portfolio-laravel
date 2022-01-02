@extends('web-admin.page.main')

@section('title', env('APP_NAME') . ' - Admin')

@section('content')

    <div id="wa-h">

        @include('web-admin.home._block-1')  

    </div>

@endsection


@section('extra-body')
    <script class="remove">
        _APP.home({})
        document.body.removeChild(document.querySelector('script.remove'))
    </script>
@endsection