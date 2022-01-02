<?php

Route::prefix('{locale}/app')
    ->group(function () {

    Route::post('/search', 'AppController@search')
        ->name('web.app.search');
});