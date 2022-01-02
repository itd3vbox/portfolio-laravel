<?php

Route::middleware(['admin.auth'])
    ->prefix('langs')
    ->group(function () {

    Route::post('/search-all', 'LangController@searchAll')
        ->name('web-admin.langs.search-all');
});