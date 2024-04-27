<?php
    Route::group(['middleware' => 'product.access'], function () {
    Route::post('products', 'ProductController@store');
    Route::put('products/{product}', 'ProductController@update');
    Route::delete('products/{product}', 'ProductController@destroy');
    Route::post('products/upload/local', 'ProductController@uploadImageLocal');
    Route::post('products/upload/public', 'ProductController@uploadImagePublic');
});


