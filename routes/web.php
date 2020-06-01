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
Route::get('/', 'HomeController@index')->name('top');
Route::get('/pan/', 'PanController@index')->name('pan.index');
Route::get('/pan/type/', 'HomeController@type')->name('pan.type');
Route::get('/pan/create/', 'PanController@create')->name('pan.create');
Route::post('/pan/complete/', 'PanController@complete')->name('pan.complete');

// key 
Route::get('/key/', 'HomeController@key')->name('key.index');
// store 
Route::get('/store/{storeName}/', 'StoreController@show')->name('store.show');

// tag
Route::get('/tag/{tagName}/', 'TagController@show')->name('tag.show');

// genre
Route::get('/genre/{genreName}/', 'GenreController@show')->name('genre.show');

//search
Route::get('/search/location/', 'SearchController@latlen')->name('search.latlen');
Route::get('/search/word/', 'SearchController@word')->name('search.word');

// manager
Route::get('/manager/', 'PanController@manager')->name('manager');
Route::get('/manager/edit/{id}', 'PanController@edit')->name('manager.edit');
Route::put('/manager/upload/{id}', 'PanController@upload')->name('manager.upload');
Route::delete('/manager/delete/{id}', 'PanController@delete')->name('manager.delete');
// manager store
Route::get('/manager/store/create/', 'StoreController@create')->name('manager.store.create');
Route::post('/manager/store/complete/', 'StoreController@complete')->name('manager.store.complete');
// manager tag
Route::get('/manager/tag/create/', 'TagController@create')->name('manager.tag.create');
Route::post('/manager/tag/complete/', 'TagController@complete')->name('manager.tag.complete');
// manager genre
Route::get('/manager/genre/create/', 'GenreController@create')->name('manager.genre.create');
Route::post('/manager/genre/complete/', 'GenreController@complete')->name('manager.genre.complete');

//manager list delete 
Route::get('/manager/list/', 'PanController@list')->name('manager.list');
Route::delete('/manager/genre/delete/{id}', 'GenreController@delete')->name('manager.genre.delete');
Route::delete('/manager/tag/delete/{id}', 'TagController@delete')->name('manager.tag.delete');
Route::delete('/manager/store/delete/{id}', 'StoreController@delete')->name('manager.store.delete');
