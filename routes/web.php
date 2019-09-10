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

use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'shops'],function (){
    Route::get('/', 'ProductController@index')->name('shop.index');
});
Route::group(['prefix'=>'users'],function (){
    Route::get('/signup', 'ProductController@signup')->name('shop.signup');
});

