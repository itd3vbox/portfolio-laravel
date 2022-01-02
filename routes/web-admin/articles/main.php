<?php

Route::middleware(['admin.auth'])
    ->namespace('Articles')
    ->prefix('articles')
    ->group(function () {

    Route::get('/', 'ArticleController@index')
        ->name('web-admin.articles.home');

    Route::post('/search', 'ArticleController@searchAll')
        ->name('web-admin.articles.search-all');

    Route::post('/', 'ArticleController@store')
        ->name('web-admin.articles.store');

    Route::patch('/{training_id}/status', 'ArticleController@statusUpdate')
        ->name('web-admin.articles.status-update');

});