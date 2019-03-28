<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tweets', 'TweetController@index')->name('tweets.list');
Route::get('/tweet', 'TweetController@create')->name('tweets.form');
Route::post('/tweet', 'TweetController@store')->name('tweets.publish');
