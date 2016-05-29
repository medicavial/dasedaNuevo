<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'InicioController@index']);

Route::get('/nosotros', ['as' => 'nosotros', 'uses' => 'NosotrosController@index']);

Route::get('/productos', ['as' => 'productos', 'uses' => 'ProductosController@index']);

Route::get('/detalle/{producto}', ['as' => 'producto', 'uses' => 'ProductosController@producto']);

Route::get('/servicios', ['as' => 'servicios', 'uses' => 'ServiciosController@index']);

Route::get('/carrito', ['as' => 'carrito', 'uses' => 'CarController@index']);

Route::get('/contacto',['as' => 'contacto' ,'uses' => 'ContactoController@index']);

Route::post('/correo', ['uses' => 'ContactoController@sendemail']);

Route::get('/login',['as' => 'login' ,'uses' => 'UserController@index']);

	



App::missing(function($exception)
{

    return Response::view('pages.error');

});