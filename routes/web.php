<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});




//Route::get('/login', 'Auth\LoginController@showLoginForm');


Route::group(['middleware' => 'auth'], function () {

	Route::post('rides/{ride}/enter', 'RidesController@addPassenger');
    Route::resource('rides','RidesController');
	Route::resource('rides.comments', 'CommentsController');

});

