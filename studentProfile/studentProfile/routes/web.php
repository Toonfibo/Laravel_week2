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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/home','ExamplePageController@index');
//Route::get('/show/{id}','ExamplePageController@show');
//Route::get('/create','ExamplePageController@create');
//Route::post('create','ExamplePageController@store');

Route::get('/','StudentController@index');
Route::get('/create','StudentController@create');
Route::get('/show/{id}','StudentController@show');

