<?php

use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('Api')->name('api')->group(function () {
    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('all_products');
        Route::get('/{id}', 'ProductController@show')->name('single_product');
        Route::post('/', 'ProductController@store')->name('store_products');
        Route::put('/{id}', 'ProductController@update')->name('update_products');
        Route::delete('/{id}', 'ProductController@delete')->name('delete_products');
    });

    Route::prefix('purchase')->group(function () {
        Route::post('/', 'PurchaseController@store')->name('purchase_products');
    });
});
