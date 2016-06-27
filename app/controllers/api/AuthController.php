<?php

class AuthController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function Login(){

		if(Auth::attempt(Input::only('username','password'))){
			return Auth::user();
		}else{
			return Response::json(array('flash' => 'Nombre de Usuario o contraseña Invalida'), 500); 
		}
		
		// $data = Input::all();
		// return $data;

	}
	 
	public function Logout(){

		Auth::logout();
		return Response::json(array('flash' => 'Sesion cerrada exitosamente'));
		
	}

}
