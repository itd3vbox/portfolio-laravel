<?php

Route::namespace('Articles')
    ->prefix('{locale}/articles')
    ->group(function () {

    Route::post('/search-all', 'ArticleController@searchAll')
        ->name('web.articles.search-all');

    Route::post('/search-one/{article_id}', 'ArticleController@searchOne')
        ->name('web.articles.search-one');
        
});