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

Route::get('/','PageController@index')->name('dashboard')->middleware('auth');

Auth::routes();
Route::resource('users', 'UserController')->middleware('auth');

Route::resource('roles', 'RoleController')->middleware('auth');

Route::resource('permissions', 'PermissionController')->middleware('auth');

//Permission up
Route::resource('border','BorderController');
//border trash
Route::get('border_trash','BorderController@trash');
Route::get('border_restore/{id}','BorderController@restore');

//mills resource
Route::resource('meal','MealController')->middleware('auth');