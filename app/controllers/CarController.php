<?php

class CarController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public $mensaje;
	public $title = 'Carrito | DASEDA';
	public $content = 'En Daseda somos una empresa dedicada a la venta de consumibles de computadora, accesorios para tabletas, smartphones y laptops y lo que no lo conseguimos.';

	public function index()
	{
		$contenido = array(
			'title' => $this->title, 
			'content' => $this->content
		);
		return View::make('pages.carrito')->with($contenido);
	}

}
