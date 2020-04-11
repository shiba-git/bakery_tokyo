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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('top');;
Route::get('/pan/', 'PanController@index')->name('pan.index');
Route::get('/pan/create/', 'PanController@create')->name('pan.create');
Route::post('/pan/complete/', 'PanController@complete')->name('pan.complete');