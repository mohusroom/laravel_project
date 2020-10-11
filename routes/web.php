<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('myapp.domain'))->namespace('User')->name('user.')->group(function () {
    Route::get('/', 'HomeController@index')
        ->name('home');
});