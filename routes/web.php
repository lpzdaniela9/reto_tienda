<?php

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    return 'This is profile';
})->middleware('verified');

Route::get('/', 'HomeController@index')->name('home');
