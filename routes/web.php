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
})->middleware('guest');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@finishReg');

Route::get('/jobs', 'JobsController@index');
Route::post('/jobs', 'JobsController@email');

Route::get('/jobs/{job}', 'JobsController@show');

Route::get('/chat/{id}', 'JobsController@chat');

Route::post('/lang/{job}', 'HomeController@lang');
