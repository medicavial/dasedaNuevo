<?php


class ContactoController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public $mensaje;


	protected function index(){

		$this->mensaje = null;
		return View::make('pages.contacto');
	}

	public function sendemail(){


		$this->mensaje = null;

		if (isset($_POST['contacto'])) {
			
			$rules = array(
				'nombre' => 'required',
				'asunto' => 'required',
				'email'  => 'required|email',
				'mensaje'=> 'required'
				);
			$validator = Validator::make(Input::all(), $rules);

			if ($validator->fails()){
		        $this->mensaje = '<div class="status alert alert-danger">Faltan campos por completar</div>';
		    }else{

		    	$nombre = Input::get('nombre');

		    	$this->mensaje = '<div class="status alert alert-success">Tu Mensaje fue enviado '.$nombre.'</div>';
		    }
		}

		return View::make('pages.contacto');

	}

}
