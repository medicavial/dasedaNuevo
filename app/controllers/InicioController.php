<?php

class InicioController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	protected function index(){

		return View::make('pages.home');
	}

}
