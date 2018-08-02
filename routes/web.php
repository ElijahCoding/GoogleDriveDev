<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/google', 'Auth\LoginController@redirectToProvider')->name('google.auth');
Route::get('/auth/google/callback', 'Auth\LoginController@handleProviderCallback')->name('google.callback');
