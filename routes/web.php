<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::pattern('id', '[0-9]+');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('products', 'ProductController', ['parameters' => [
        'product' => 'id'
    ]]);
});
