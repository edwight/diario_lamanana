<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/','PostController@index');
Route::get('/','HomeController@showIndex');

Route::get('categoria/{slug}','HomeController@showCategory')->where('slug', '([A-z\d-\/_.]+)?');
Route::get('editor/{id}/{slug}', 'HomeController@showEditor')->where('slug', '([A-z\d-\/_.]+)?');
Route::get('/{id}/{slug}','HomeController@showDetail')->where(['id' => '[0-9]+','slug', '([A-z\d-\/_.]+)?']);
Route::any('hot/chicahot', 'HomeController@showHot');
Route::get('/etiquetas/{slug}', 'HomeController@showTags')->where('slug', '([A-z\d-\/_.]+)?');
Route::get('edicion','HomeController@showEdicion');

Route::get('edicion/impreso/{id}','PostController@revista');
//Route::get('edicion','HomeController@showEdicion');
//Route::get('/','PostController@index');
Route::post('/Busqueda','BusquedaController@postBusqueda');
//Route::any('hot/chicahot', 'ChicahotController@index');
//Route::get('/{id}/{slug}','PostController@show')->where(array('id' => '[0-9]+','slug', '([A-z\d-\/_.]+)?'));




Route::group(['before' => 'auth', 'AuthController@showLogin'], function()
{
	//Route::controller('users', 'UserController');
	
	Route::resource('admin/users', 'UserController');
	Route::resource('admin/posts', 'AdminController');
	Route::resource('admin/edicion','RevistaController');
	Route::resource('admin/tags', 'TagsController');
	Route::resource('admin/category', 'CategoryController');
	Route::resource('admin/chicahot', 'ChicahotController');

	Route::get('lv-logout','AuthController@logOut');
});

Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login','AuthController@postLogin');

