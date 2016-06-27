<?php

class ProvedoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Provider::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$provedor = new Provider;
		$provedor->nombre = Input::get('nombre');
		$provedor->telefono = Input::get('telefono');
		$provedor->contacto = Input::get('contacto');
		$provedor->email = Input::get('correo');
		$provedor->direccion = Input::get('direccion');
		$provedor->descripcion = Input::get('descripcion');
		$provedor->user_id =  Auth::id();
		$provedor->save();

		$provedor_id = $provedor->id;

	    if ($provedor_id != NULL) {
	        $response["error"] = false;
	        $response["message"] = "Proveedor guardado correctamente";
	        $response["provedor_id"] = $provedor_id;
	    } else {
	        $response["error"] = true;
	        $response["message"] = "Fallo el intento de guardar proveedor, Intente nuevmanete";
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$provedor = Provider::find($id);

		$provedor->nombre = Input::get('nombre');
		$provedor->telefono = Input::get('telefono');
		$provedor->contacto = Input::get('contacto');
		$provedor->email = Input::get('correo');
		$provedor->direccion = Input::get('direccion');
		$provedor->descripcion = Input::get('descripcion');
		$provedor->activated = Input::get('activo');
		$provedor->user_id =  Auth::id();
		$provedor->save();

		$provedor_id = $provedor->id;

	    if ($provedor_id != NULL) {
	        $response["error"] = false;
        	$response["message"] = "Proveedor actualizado correctamente";
	    } else {
	        $response["error"] = true;
        	$response["message"] = "Fallo actualizar proveedor, intentalo nuevmanete";
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
