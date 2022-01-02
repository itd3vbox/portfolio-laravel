<?php

Route::namespace('Projects')
    ->prefix('projects/{project_id}/files')
    ->group(function () {

    Route::post('/image-main', 'FileController@store')
        ->name('web-admin.projects.files.image-main.store');

});