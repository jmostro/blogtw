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

Route::get('/', 'GuestController@index')->name('root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entries/new', 'EntryController@new')->name('entries.new');

Route::post('/entries/save', 'EntryController@save')->name('entries.save');
Route::get('/entries/view/{entry}','GuestController@show')->name('entries.show');
Route::get('/entries/edit/{entry}', 'EntryController@edit')->name('entries.edit');
Route::post('/entries/update/{entry}', 'EntryController@update')->name('entries.update');

Route::get('/entries/user/{id}', 'GuestController@index')->name('entries.listByUid');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
