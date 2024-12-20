<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return redirect('/search');
});
//Route::get('/', 'productController@index');
Route::get('/search', 'App\Http\Controllers\productController@search')->name('products.search');
