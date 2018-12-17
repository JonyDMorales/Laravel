<?php

Route::get('/home', 'HomeController@index')->name('home');

Route::get('', 'PostController@index')->name('welcome');
Route::get('create', 'PostController@create')->name('create');
Route::post('save', 'PostController@save')->name('save');

Auth::routes();


Route::get('register', 'SessionController@register')->name('register');
Route::post('registrar', 'SessionController@registrar')->name('registrar');
Route::get('login', 'SessionController@login')->name('login');
Route::post('entrar', 'SessionController@entrar')->name('entrar');
Route::get('logout', 'SessionController@logout')->name('logout');


Route::prefix('post')->middleware('auth')->group(function(){
    Route::get('create', 'PostController@create')->name('create');
    Route::post('save', 'PostController@save')->name('save');
});