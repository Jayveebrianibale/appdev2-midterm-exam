<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::apiResource('products', ProductController::class);
Route::post('products/upload/local', 'ProductController@uploadLocal')->name('upload.local');
Route::post('products/upload/public', 'ProductController@uploadPublic')->name('upload.public');



Route::get('/', function () {
    return view('welcome');
});
