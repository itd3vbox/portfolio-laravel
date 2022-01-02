<?php

Route::middleware(['admin.auth'])
    ->prefix('app')
    ->group(function () {

    Route::get('/search', 'AppController@search')
        ->name('web-admin.app.search');
});