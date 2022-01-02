<?php

Route::get('/', function () {
    return redirect()->route('web.home');
});

Route::get('/{locale}', 'HomeController@index')
    ->name('web.home');