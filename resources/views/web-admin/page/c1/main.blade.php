<div id="page-c1" class="">

    <div class="content-close">
        <div class="button-icon">
            <i class="fas fa-times"></i>
        </div>
    </div>

    @include('web-admin.page.c1._content-top')

    <a href="{{ route('web-admin.home') }}" class="content-app">
        <div class="icon">
            <img src="{{ asset('images/app-icons/logo-150x150.png') }}" 
                alt="App - Logo">
        </div>
        <div class="name">{{ env('APP_NAME') }} - Admin</div>
    </a>

    @include('web-admin.page.c1._content-main')

    @include('web-admin.page.c1._content-bottom')

</div>