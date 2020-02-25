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

Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');





Route::group(['namespace'=>'Admin','prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('/panel', function () {
        return view('Admin.layout.master');
    });

    Route::resource('cat', 'CatsController');
    Route::resource('product', 'ProductController');
    Route::resource('color', 'ColorController');
 


});


Auth::routes();