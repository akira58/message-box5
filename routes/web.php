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

Route::get('/', 'MessagesController@index');

// Route::get('messages/{id}','MessagesController@show');
// Route::post('messages','MessagesController@store');
// Route::put('messages/{id}','MessagesController@update');
// Route::delete('messages/{id}','MessagesController@destroy');
// Route::get('messages','MessagesController@index');
// Route::get('message/create', 'MessagesController@create');
// Route::get('message/{id}/edit', 'MessagesController@edit')->name('messages.edit');

Route::resource('messages', 'MessagesController');