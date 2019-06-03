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


Auth::routes();
Route::get('/','PageController@index');

route::resource('show','PageController');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('show');
Route::get('/form/create', 'PageController@create');
Route::post('/form/store', 'PageController@store');
Route::get('/show/list','PageController@list');

Route::get('/show/{id}','PageController@show');

Route::get('auth/logout', 'Auth\AuthController@logout');
Route::get('/search', 'PageController@search');
//Route::get('auth/login',[ 'uses' => 'Auth\LoginController@getLogin', 'as '=>'login' ]);
