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

Route::get('/home', 'AdminController@index')->name('admin.index');
Route::get('/home/searchhistory', 'AdminController@searchHistory')->name('admin.searchHistory');
Route::get('/home/adminlist', 'AdminController@adminList')->name('admin.adminList');
Route::get('/home/add', 'RegistrationController@index')->name('registration.index');
Route::post('/home/add', 'RegistrationController@register')->name('registration.register');
Route::get('/home/show/{aid}', 'AdminController@show')->name('admin.show');
Route::get('/home/edit/{aid}', 'AdminController@edit')->name('admin.edit');
Route::post('/home/edit/{aid}', 'AdminController@update')->name('admin.update');
Route::get('/home/delete/{aid}', 'AdminController@destroy')->name('admin.destroy');
Route::get('/home/searchfood', 'AdminController@searchFood')->name('admin.searchFood');
Route::get('/home/statistics', 'AdminController@statistics')->name('admin.statistics');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
