<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('gallery/json_data', '\App\Http\Controllers\GalleryController@jsonData')->name('gallery.json_data');
Route::resource('gallery', GalleryController::class);