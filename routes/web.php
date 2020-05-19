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

Route::get('/album', 'AlbumController@index')->name('album.index');
Route::post('/album', 'AlbumController@store')->name('album.store');
Route::get('/album/show/{id}', 'AlbumController@show')->name('album.show');

Route::get('/photo/create/{id}', 'PhotoController@create')->name('photo.create');
Route::post('/photo/store', 'PhotoController@store')->name('photo.store');
Route::get('/photo/show/{id}', 'PhotoController@show')->name('photo.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
