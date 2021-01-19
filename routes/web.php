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

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/* Route entry  create */
/* Getting */
Route::get('/entries/create', 'EntryController@create');
/* Post */
Route::post('/entries', 'EntryController@store');
/* View data entrys */
Route::get('/entries/{entry}', 'GuestController@show');


Route::get('/entries/{entry}/edit', 'EntryController@edit');
Route::put('/entries/{entry}', 'EntryController@update');

Route::get('/users/{user}', 'UserController@show');