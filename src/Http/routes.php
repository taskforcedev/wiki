<?php

Route::group(['namespace' => 'Taskforcedev\Wiki\Http\Controllers'], function() {

    Route::get('wiki/{page}', ['as' => 'page.view', 'uses' => 'WikiController@view']);

    Route::get('wiki/install', ['as' => 'wiki.install', 'uses' => 'AdminController@install']);

});
