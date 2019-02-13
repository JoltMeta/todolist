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
// todo routes
Route::get('/', 'TodosController@index');
Route::get('/create', 'TodosController@create');
Route::resource('todo', 'TodosController');
// gallery routes
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/index', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::post('/albums/store', 'AlbumsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');