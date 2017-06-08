<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//相册

Route::get('/albums', 'albumsController@index')->name('home');

Route::get('/home', 'albumsController@index');


//相册资源路由
Route::resource('albums','AlbumsController');

//相片资源路由
Route::resource('photos','PhotosController');





Route::get('error',function(){
	return view('errors.503');
});