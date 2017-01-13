<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', 'HomeSiteController@services');
Route::get('/projects', 'HomeSiteController@projects');
Route::get('/contact', 'HomeSiteController@contact');


Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index');

    Route::get('/users', 'UserController@index');
    Route::get('/users/{id}', 'UserController@show');

});


Auth::routes();

Route::get('/home', 'HomeController@index');
