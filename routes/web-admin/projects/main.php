<?php

include_once base_path('routes/web-admin/projects/_files.php');

Route::middleware(['admin.auth'])
    ->namespace('Projects')
    ->prefix('projects')
    ->group(function () {

    Route::get('/', 'ProjectController@index')
        ->name('web-admin.projects.home');

    Route::post('/search-all', 'ProjectController@searchAll')
        ->name('web-admin.projects.search-all');

    Route::post('/', 'ProjectController@store')
        ->name('web-admin.projects.store');

    Route::get('/{project_id}', 'ProjectController@edit')
        ->name('web-admin.projects.edit');

    Route::patch('/{project_id}/status-update', 'ProjectController@statusUpdate')
        ->name('web-admin.projects.status-update');

    Route::patch('/{project_id}/name-update', 'ProjectController@nameUpdate')
        ->name('web-admin.projects.name-update');

    Route::patch('/{project_id}/links-update', 'ProjectController@linksUpdate')
        ->name('web-admin.projects.links-update');
        
});