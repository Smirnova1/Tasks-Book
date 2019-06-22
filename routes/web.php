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
Route::get('/', function (){
    return view('index');
});

//Route::resource('task', 'IndexController');

Route::post('/task', 'IndexController@store');
Route::get('/task', 'IndexController@index');
Route::get('/task/create', 'IndexController@create');
Route::put('/task/{task}', 'IndexController@update');
Route::get('/task/{task}/edit', 'IndexController@edit');

//Route::get('/test', 'TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
