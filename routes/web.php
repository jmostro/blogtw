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
Route::get('/entries/create', 'EntryController@create')->name('createEntry');
Route::post('/entries/savenew', 'EntryController@saveNew')->name('saveNewEntry');

Route::get('/users/{id}', 'UserController@view')->name('user.view');
