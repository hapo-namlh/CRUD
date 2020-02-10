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


Route::get('/', 'MemberController@index')->name('index');

Route::get('/create', 'MemberController@create')->name('create');
Route::post('/', 'MemberController@store')->name('store');

Route::get('/{id}/edit', 'MemberController@edit')->name('edit');
Route::put('/{id}','MemberController@update')->name('update');

Route::get('/{id}', 'MemberController@destroy')->name('destroy');
