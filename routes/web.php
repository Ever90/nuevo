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

Route::get('/', 'UserController@index');//lista las rutas
Route::post('users', 'UserController@store')->name('users.store');//cuando se presiona guardar se va a la BD
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');//elimina  al usuario
