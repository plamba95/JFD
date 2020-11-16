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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::view('/admin-area', 'admin.home')->name('admin')->middleware('auth','auth.admin');

Route::namespace('Admin')->prefix('admin-area')->middleware('auth','auth.admin')->name('admin.')->group(function() {
    Route::resource('/users', 'UserController')->except(['show']);
});

Route::resource('/articles', 'ArticleController');
