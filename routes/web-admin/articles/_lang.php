<?php

Route::middleware(['admin.auth'])
    ->namespace('Trainings')
    ->prefix('trainings/langs')
    ->group(function () {

    Route::patch('/{training_lang_id}/title', 'LangController@titleUpdate')
        ->name('web-admin.trainings.langs.title-update');

    Route::patch('/{training_lang_id}/content', 'LangController@contentUpdate')
        ->name('web-admin.trainings.langs.content-update');

});