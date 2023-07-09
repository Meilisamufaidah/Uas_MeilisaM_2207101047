<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/pdam', 'PdamController@index');

Route::get('/pdam/create', 'PdamController@create'); 
Route::post('/pdam', 'PdamController@store');

Route::get('pdam/{id}/edit', 'PdamController@edit'); 
Route::patch('pdam/{id}', 'PdamController@update');

Route::delete('pdam/{id}', 'PdamController@destroy');

Route::get('/pdam/search', 'PdamController@search')->name('search');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
