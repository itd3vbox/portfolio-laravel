<?php

Route::middleware(['admin.auth'])
    ->group(function () {
        
    Route::get('/', 'HomeController@index')
        ->name('web-admin.home');

});