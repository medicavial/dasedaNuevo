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
Route::get('/productos', ['as' => 'productos', 'uses' => 'ProductoController@index']);
Route::get('/detalle/{producto}', ['as' => 'producto', 'uses' => 'ProductoController@producto']);
Route::get('/servicios', ['as' => 'servicios', 'uses' => 'ServiciosController@index']);
Route::get('/carrito', ['as' => 'carrito', 'uses' => 'CarController@index']);
Route::get('/contacto',['as' => 'contacto' ,'uses' => 'ContactoController@index']);
Route::post('/correo', ['uses' => 'ContactoController@sendemail']);
Route::get('/login',['as' => 'login' ,'uses' => 'UserController@index']);


Route::group(array('prefix' => 'api','before' => 'authenticate'), function(){

    Route::post('login','AuthController@Login');
	Route::get('logout','AuthController@Logout');

	Route::resource('provedores', 'ProvedoresController');
	Route::resource('clientes', 'ClientesController');
	Route::resource('categorias', 'CategoriasController');
	Route::resource('productos', 'ProductosController');
	Route::resource('marcas', 'MarcasController');

});

Route::get('test',function(){
	return SubCategory::all();
});
	



App::missing(function($exception)
{

    return Response::view('pages.error');

});