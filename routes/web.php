<?php

Route::get('/', 'Auth\LoginController@showLoginForm');
Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::resource('rides','RidesController');

});

