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
Route::get('/album/edit/{id}', 'AlbumController@edit')->name('album.edit');
Route::post('/album/update/{id}', 'AlbumController@update')->name('album.update');
Route::post('/album/{id}' , 'AlbumController@destroy')->name('album.destroy');



Route::get('/photo/create/{id}', 'PhotoController@create')->name('photo.create');
Route::post('/photo/store', 'PhotoController@store')->name('photo.store');
Route::get('/photo/show/{id}', 'PhotoController@show')->name('photo.show');
Route::get('/photo/edit/{id}', 'PhotoController@edit')->name('photo.edit');
Route::post('/photo/update/{id}', 'PhotoController@update')->name('photo.update');
Route::post('/photo/{id}' , 'PhotoController@destroy')->name('photo.destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
