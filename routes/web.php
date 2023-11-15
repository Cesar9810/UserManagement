<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Home';
});

Route::get('/usuarios', 'App\Http\Controllers\UserController@index')
    ->name('users.index');

Route::get('/usuarios/{user}', 'App\Http\Controllers\UserController@show' )
    ->where('user','[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo',  'App\Http\Controllers\UserController@create')
    ->name('users.create');

Route::post('/usuarios', 'App\Http\Controllers\UserController@store');

Route::get('/usuarios/{user}/editar', 'App\Http\Controllers\UserController@edit')
    ->name('users.edit');
    
Route::put('/usuarios/{user}', 'App\Http\Controllers\UserController@update');

Route::get('/saludo/{name}/{nickname?}', 'App\Http\Controllers\WelcomeUserController@index');

Route::delete('/usuarios/{user}', 'App\Http\Controllers\UserController@destroy')
    ->name('users.destroy');
