<?php

Route::group(['namespace' => 'Taskforcedev\Wiki\Http\Controllers'], function() {

    Route::get('wiki/{page}',     ['as' => 'page.view',    'uses' => 'WikiController@view']);



});
