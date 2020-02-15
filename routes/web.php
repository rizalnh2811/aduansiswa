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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'AspirasianController@index');

Route::get('/create/laporkan', 'AspirasianController@create');
Route::get('/create', 'AspirasianController@store');

//Data TErkirim ke url SUkses
Route::post('/success', 'AspirasianController@store');
Route::get('/success', 'AspirasianController@show');
