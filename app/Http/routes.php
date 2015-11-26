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

Route::get('/', function () {
    return view('welcome');
});

Route::post('oauth/access_token', function(){
   return Response::json(Authorizer::issueAccessToken());
});

Route::group(['middleware' => 'oauth'], function(){

    Route::resource('cliente', 'ClienteController', ['except' => ['crate', 'edit']]);

    Route::group(['prefix' => 'projeto'], function(){
        Route::resource('', 'ProjetoController', ['except' => ['crate', 'edit']]);

        Route::get('{id}/nota', 'ProjetoNotasController@index');
        Route::post('{id}/nota', 'ProjetoNotasController@store');
        Route::get('/{id}/nota/{notaId}', 'ProjetoNotasController@show');
        Route::put('/{id}/nota/{notaId}', 'ProjetoNotasController@update');
        Route::delete('{id}/nota/{notaId}', 'ProjetoNotasController@destroy');
    });
});

