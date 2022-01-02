<?php

Route::namespace('Projects')
    ->prefix('{locale}/projects')
    ->group(function () {

    Route::post('/search-all', 'ProjectController@searchAll')
        ->name('web.projects.search-all');

    Route::post('/search-one/{project_id}', 'ProjectController@searchOne')
        ->name('web.projects.search-one');
        
});