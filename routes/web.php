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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create','App\Http\Controllers\BodyTemperatureController@create');
Route::post('/post','App\Http\Controllers\BodyTemperatureController@post');
Route::get('/edit/{id}','App\Http\Controllers\BodyTemperatureController@edit');
Route::post('/update/{id}','App\Http\Controllers\BodyTemperatureController@update');
Route::get('/delete/{id}','App\Http\Controllers\BodyTemperatureController@delete');
Route::get('/index','App\Http\Controllers\BodyTemperatureController@index');
