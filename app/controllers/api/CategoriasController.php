<?php

class CategoriasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Category::all();
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
		$categoria = new Category;
		$categoria->nombre = Input::get('nombre');
		$categoria->user_id =  Auth::id();
		$categoria->save();

		$categoria_id = $categoria->id;

	    if ($categoria_id != NULL) {
	        $response["error"] = false;
	        $response["message"] = "Categoria guardada correctamente";
	        $response["categoria_id"] = $categoria_id;
	    } else {
	        $response["error"] = true;
	        $response["message"] = "Fallo el intento de guardar categoria, Intente nuevmanete";
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
		return Category::find($id);
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
		$cliente = Category::find($id);

		$cliente->nombre = Input::get('nombre');
		$cliente->activated = Input::get('activo');
		$cliente->user_id =  Auth::id();
		$cliente->save();

		$cliente_id = $cliente->id;

	    if ($cliente_id != NULL) {
	        $response["error"] = false;
        	$response["message"] = "Categoria actualizada correctamente";
	    } else {
	        $response["error"] = true;
        	$response["message"] = "Fallo actualizar categoria, intentalo nuevmanete";
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
