<?php

class ProductosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$qry = DB::table('products')
		            ->join('categories', 'categories.id', '=', 'products.category_id')
		            ->join('providers', 'providers.id', '=', 'products.provider_id')
		            ->select('products.id', 'codigo' , 'products.titulo', 'providers.nombre AS provedor','categories.nombre AS categoria','costo','existencia');

		return $qry->get();
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
		$brand_id = Input::get('idmarca');

		if (!$brand_id) {
			$marca = new Brand;
			$marca->nombre = Input::get('marca');
			$marca->save();
			$brand_id = $marca->id;
		}


		$producto = new Product;
		$producto->codigo = Input::get('codigo');
		$producto->codigobarras = Input::get('codigobarras');
		$producto->costo = Input::get('costo');
		$producto->venta = Input::get('venta');
		$producto->existencia = Input::get('cantidad');
		$producto->titulo = Input::get('titulo');
		$producto->descripcion1 = Input::get('descripcion1');
		$producto->descripcion2 = Input::get('descripcion2');
		$producto->category_id = Input::get('categoria');
		$producto->provider_id = Input::get('provedor');
		$producto->brand_id = $brand_id;
		$producto->titulo = Input::get('titulo');
		$producto->user_id =  Auth::id();
		$producto->save();

		$producto_id = $producto->id;

		$imagenes = Input::get('imagenes');


		if (File::makeDirectory('resource/' . $producto_id)) {
		    
			foreach ($imagenes as $imagen) {

				$nombre = $imagen['nombre'];
				$archivo = $imagen['image'];
				$nuevaruta = 'resource/'.$producto_id.'/'.$nombre;


				if (File::move($archivo, $nuevaruta)) {
					$imagen = new Image;
					$imagen->image = $nuevaruta;
					$imagen->nombre = $nombre;
					$imagen->product_id = $id;
					$imagen->save();
				}

			}

		} 


	    if ($producto_id != NULL) {
	        $response["error"] = false;
	        $response["message"] = "Producto guardado correctamente";
	        $response["producto_id"] = $producto_id;
	    } else {
	        $response["error"] = true;
	        $response["message"] = "Fallo el intento de guardar producto, Intente nuevmanete";
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
		$response = array();

		$qry = DB::table('products')
		            ->join('brands', 'brands.id', '=', 'products.brand_id')
		            ->select('products.*', 'brands.nombre AS marca')
		            ->where('products.id','=',$id);

		$response['datos'] = $qry->first();
		$response['imagenes'] = Image::where('product_id','=',$id)->get();

		return Response::json($response);

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
		$brand_id = Input::get('idmarca');

		if (!$brand_id) {
			$marca = new Brand;
			$marca->nombre = Input::get('marca');
			$marca->save();
			$brand_id = $marca->id;
		}


		$producto = Product::find($id);
		$producto->codigo = Input::get('codigo');
		$producto->codigobarras = Input::get('codigobarras');
		$producto->costo = Input::get('costo');
		$producto->venta = Input::get('venta');
		$producto->existencia = Input::get('cantidad');
		$producto->titulo = Input::get('titulo');
		$producto->descripcion1 = Input::get('descripcion1');
		$producto->descripcion2 = Input::get('descripcion2');
		$producto->category_id = Input::get('categoria');
		$producto->provider_id = Input::get('provedor');
		$producto->brand_id = $brand_id;
		$producto->titulo = Input::get('titulo');
		$producto->user_id =  Auth::id();
		$producto->activated = Input::get('activo');
		$producto->save();

		$producto_id = $producto->id;

		$imagenes = Input::get('imagenes');
		$eliminadas = Input::get('eliminadas');


		if (File::isDirectory('resource/' . $id)) {
		    

		    foreach ($eliminadas as $imagen) {

				$id_image = $imagen['id'];
				$archivo = $imagen['image'];

				if (File::delete($archivo)) {
					$imagen = Image::find($id_image);
					$imagen->delete();
				}

			}

			foreach ($imagenes as $imagen) {

				$nombre = $imagen['nombre'];
				$archivo = $imagen['image'];
				$nuevaruta = 'resource/'.$id.'/'.$nombre;

				if (!File::exists($nuevaruta)) {

					if (File::move($archivo, $nuevaruta)) {
						$imagen = new Image;
						$imagen->image = $nuevaruta;
						$imagen->nombre = $nombre;
						$imagen->product_id = $id;
						$imagen->save();
					
					}
				}

			}

		} 


	    if ($producto_id != NULL) {
	        $response["error"] = false;
	        $response["message"] = "Producto actualizado correctamente";
	    } else {
	        $response["error"] = true;
	        $response["message"] = "Fallo el intento de actializar producto, Intente nuevmanete";
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
