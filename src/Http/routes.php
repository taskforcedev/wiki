<?php

Route::group(['namespace' => 'Taskforcedev\Wiki\Http\Controllers'], function() {

    Route::get('wiki/install', ['as' => 'wiki.install', 'uses' => 'AdminController@install']);

    Route::get('wiki/{page}', ['as' => 'wiki.page.view', 'uses' => 'WikiController@view']);
    Route::post('wiki/{page}', ['as' => 'wiki.page.create', 'uses' => 'WikiController@create']);

});
