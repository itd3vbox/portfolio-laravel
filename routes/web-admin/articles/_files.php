<?php

Route::namespace('Trainings')
    ->prefix('trainings/{training_id}/files')
    ->group(function () {

    Route::post('/search', 'FileController@search')
        ->name('web-admin.trainings.files.search');

});