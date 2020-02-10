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

Route::get('/', function () {
    return view('welcome');
});
Route::get('list', 'MemberController@index');

Route::get('add', 'MemberController@create');
Route::post('add', 'MemberController@store');

Route::get('edit/{id}', 'MemberController@edit');
Route::post('update/{id}','MemberController@update')->name('update_member');

Route::get('delete/{id}', 'MemberController@destroy');
