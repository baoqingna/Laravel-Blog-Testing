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

Route::get('/', 'PagesController@Home');
Route::post('/', 'PagesController@storeFunc');
Route::get('blog/{id}/edit', 'PagesController@editBlog');
Route::post('blog/{id}/edit', 'PagesController@updateFunc');
Route::get('blog/{id}/destroy', 'PagesController@destroy');
