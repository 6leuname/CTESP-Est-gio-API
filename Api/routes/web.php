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
Route::apiResource('api','ApiController');
Route::get('/chrome', 'PagController@chrome');
Route::get('/chromep', 'PagController@chromep');
Route::get('/chromew', 'PagController@chromew');


// Route::get('/stand','StandController@index');
// Route::get('/stand/create','StandController@create')->middleware('auth');
// Route::post('/stand','StandController@store')->middleware('auth');
// Route::get('/stand/{project}','StandController@show');
// Route::get('/stand/{project}/edit','StandController@edit')->middleware('auth');
// Route::patch('/stand/{project}','StandController@update')->middleware('auth');
// Route::delete('/stand/{project}','StandController@destroy')->middleware('auth');