<?php


Route::get('/home','HomeController@index');
Route::get('/','Backend\SampleController@index');
Route::get('/welcome','Backend\SampleController@welcome');
Route::get('/posts','Backend\SampleController@posts');
Route::get('/registers','Backend\SampleController@showRegistrationForm')->name('registers');
Route::post('/registers','Backend\SampleController@processRegistration');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
