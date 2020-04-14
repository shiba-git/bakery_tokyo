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

// store 
Route::get('/store/{storeName}/', 'StoreController@show')->name('store.show');

// manager
   Route::get('/manager/', 'PanController@manager')->name('manager');
	Route::get('/manager/edit/{id}', 'PanController@edit')->name('manager.edit');
	Route::put('/manager/upload/{id}', 'PanController@upload')->name('manager.upload');
	Route::delete('/manager/delete/{id}', 'PanController@delete')->name('manager.delete');
// manager store
	Route::get('/manager/store/create/', 'StoreController@create')->name('manager.store.create');
	Route::post('/manager/store/complete/', 'StoreController@complete')->name('manager.store.complete');
// manager tag