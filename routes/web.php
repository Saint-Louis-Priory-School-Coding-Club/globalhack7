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
<<<<<<< HEAD
    return view('welcome');
=======
    return view('jobs');
>>>>>>> bf3e0593a6443f1ccac9509a0e519affb19308ab
})->middleware('guest');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jobs', 'JobsController@show');
Route::get('/chat', 'JobsController@chat');

Route::post('/lang', 'HomeController@lang');
