<?php

// Resource routes  for team
Route::group(['prefix' => set_route_guard('web').'/team'], function () {
    Route::resource('team', 'TeamResourceController');
});

// Public  routes for team
Route::get('team/popular/{period?}', 'TeamPublicController@popular');
Route::get('teams/', 'TeamPublicController@index');
Route::get('teams/{slug?}', 'TeamPublicController@show');

