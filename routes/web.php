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

Route::get('/', ['as'=>'home', 'uses' => 'PagesController@home' ]);
Route::get('saludos/{nombre?}', ['as'=>'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

/* GRABAR EN BASE DE DATOS SIN */
// Route::get('mensajes', ['as'=>'messages.index', 'uses'=>'MessagesController@index']);
// Route::get('mensajes/create', ['as'=>'messages.create', 'uses'=>'MessagesController@create']);
// Route::post('mensajes', ['as'=>'messages.store', 'uses'=>'MessagesController@store']);
// Route::get('mensajes/{id}', ['as'=>'messages.show', 'uses'=>'MessagesController@show']);
// Route::get('mensajes/{id}/edit', ['as'=>'messages.edit', 'uses'=>'MessagesController@edit']);
// Route::put('mensajes/{id}', ['as'=>'messages.update', 'uses'=>'MessagesController@update']);
// Route::delete('mensajes/{id}', ['as'=>'messages.destroy', 'uses'=>'MessagesController@destroy']);
/* USANDO ELOQUENT */ 
Route::resource('mensajes', 'MessagesController');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
// Route::get('test', function(){
// 	$user = new App\User;
// 	$user->name='Ricardo';
// 	$user->email='radperez@gmail.com';
// 	$user->password=bcrypt('123456');
// 	$user->save();
// 	return $user;
// });