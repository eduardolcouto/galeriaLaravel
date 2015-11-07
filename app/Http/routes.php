<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['middleware' => 'auth', function () {
    return redirect()->route('galeria.index');
}]);

Route::group(['prefix' => 'galeria'], function(){

  Route::get('',['as' => 'galeria.index','uses' => 'GaleriaController@index']);

  Route::get('create',['as' => 'galeria.create','uses' => 'GaleriaController@create']);

  Route::post('store',['as' => 'galeria.store','uses' => 'GaleriaController@store']);

  Route::get('{id}/destroy',['as' => 'galeria.destroy', 'uses' => 'GaleriaController@destroy']);

  Route::get('{id}/edit',['as' => 'galeria.edit', 'uses' => 'GaleriaController@edit']);

  Route::put('{id}/update',['as' => 'galeria.update', 'uses' => 'GaleriaController@update']);

  Route::post('upload',['as' => 'galeria.upload', 'uses' => 'GaleriaController@upload']);

});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
