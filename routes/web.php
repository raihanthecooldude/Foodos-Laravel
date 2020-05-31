<?php

Route::get('/', 'SearchController@index')->name('search.index');
Route::post('/', 'SearchController@result')->name('search.result');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::group(['middleware'=>['session']], function() {
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
	Route::get('/home/statistics', 'AdminController@statistics')->name('admin.stats');
});
Route::get('/logout', 'LogoutController@index')->name('logout.index');
