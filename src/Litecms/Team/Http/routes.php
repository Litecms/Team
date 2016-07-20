<?php

// Admin web routes  for team
Route::group(['prefix' => trans_setlocale() . '/admin/team'], function () {
    Route::resource('team', 'Litecms\Team\Http\Controllers\TeamAdminController');
});

// Admin API routes  for team
Route::group(['prefix' => trans_setlocale() . 'api/v1/admin/team'], function () {
    Route::resource('team', 'Litecms\Team\Http\Controllers\TeamAdminApiController');
});

// User web routes for team
Route::group(['prefix' => trans_setlocale() . '/user/team'], function () {
    Route::resource('team', 'Litecms\Team\Http\Controllers\TeamUserController');
});

// User API routes for team
Route::group(['prefix' => trans_setlocale() . 'api/v1/user/team'], function () {
    Route::resource('team', 'Litecms\Team\Http\Controllers\TeamUserApiController');
});

//  web routes for team
Route::group(['prefix' => trans_setlocale() . '/teams'], function () {
    Route::get('/', 'Litecms\Team\Http\Controllers\TeamController@index');
    Route::get('/{slug?}', 'Litecms\Team\Http\Controllers\TeamController@show');
});

//  API routes for team
Route::group(['prefix' => trans_setlocale() . 'api/v1/teams'], function () {
    Route::get('/', 'Litecms\Team\Http\Controllers\TeamApiController@index');
    Route::get('/{slug?}', 'Litecms\Team\Http\Controllers\TeamApiController@show');
});
