<?php

Route::get('/sign-in', 'SignController@signIn')
    ->name('web-admin.sign-in');

Route::post('/sign-in', 'SignController@signInRequest')
    ->name('web-admin.sign-in.request');

Route::get('/sign-out', 'SignController@signOut')
    ->name('web-admin.sign-out');