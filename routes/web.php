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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','FrontEndController@index')->name('home');

Route::get('/category/{slug}','FrontEndController@postByCategory')->name('category.posts');
Route::get('/brand/{slug}','FrontEndController@postByBrand')->name('brand.posts');
Route::get('/subcategory/{slug}','FrontEndController@postBySubCategory')->name('subcategory.posts');
