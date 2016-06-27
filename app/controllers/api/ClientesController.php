<?php

class ClientesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public $response = array();


	public function index()
	{
		return Customer::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store crea un nuevo cliente en la base de datos.
	 *
	 * @return Response
	 */
	public function store()
	{
		$cliente = new Customer;
		$cliente->nombre = Input::get('nombre');
		$cliente->telefono = Input::get('telefono');
		$cliente->rfc = Input::get('rfc');
		$cliente->email = Input::get('correo');
		$cliente->direccion = Input::get('direccion');
		$cliente->descripcion = Input::get('descripcion');
		$cliente->user_id =  Auth::id();
		$cliente->save();

		$cliente_id = $cliente->id;

	    if ($cliente_id != NULL) {
	        $response["error"] = false;
	        $response["message"] = "Cliente guardado correctamente";
	        $response["cliente_id"] = $cliente_id;
	    } else {
	        $response["error"] = true;
	        $response["message"] = "Fallo el intento de guardar cliente, Intente nuevmanete";
	    }

		return Response::json($response);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Customer::find($id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cliente = Customer::find($id);

		$cliente->nombre = Input::get('nombre');
		$cliente->telefono = Input::get('telefono');
		$cliente->rfc = Input::get('rfc');
		$cliente->email = Input::get('correo');
		$cliente->direccion = Input::get('direccion');
		$cliente->descripcion = Input::get('descripcion');
		$cliente->activated = Input::get('activo');
		$cliente->user_id =  Auth::id();
		$cliente->save();

		$cliente_id = $cliente->id;

	    if ($cliente_id != NULL) {
	        $response["error"] = false;
        	$response["message"] = "Cliente actualizado correctamente";
	    } else {
	        $response["error"] = true;
        	$response["message"] = "Fallo actualizar cliente, intentalo nuevmanete";
	    }

		return Response::json($response);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
