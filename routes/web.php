<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Authentication
 */
Route::group(['prefix' => 'auth'], function () {
    Route::get('/google', 'Auth\LoginController@redirectToProvider')->name('google.auth');
    Route::get('/google/callback', 'Auth\LoginController@handleProviderCallback')->name('google.callback');
});

/**
 * Map
 */
Route::group(['prefix' => 'maps'], function () {
    Route::get('/', 'Maps\MapController@index');
});
