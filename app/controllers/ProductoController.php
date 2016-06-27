<?php

class ProductoController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	protected function index(){

		return View::make('pages.productos');
	}

	protected function producto($producto){

		return View::make('pages.producto');
	}



}
