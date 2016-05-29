@extends('layouts.default')
@section('content')
	<nav>
		<div class="row nav-wrapper indigo">
			<div class="col s12">
				<a href="#!" class="breadcrumb">Inicio</a>
				<a href="#!" class="breadcrumb">Productos</a>
			</div>
		</div>
	</nav>
	<section class="row">
		<aside class="col m2">
			<ul class="collection with-header z-depth-1">
		        <li class="collection-header"><h3>Marcas</h3></li>
		        <li class="collection-item">Stylos</li>
		        <li class="collection-item">HP</li>
		        <li class="collection-item">Sony</li>
		        <li class="collection-item">Kingston</li>
		    </ul>
		    <br>
		    <ul class="collection with-header z-depth-1">
		        <li class="collection-header"><h3>Categorias</h3></li>
		        <li class="collection-item">CD/DVD</li>
		        <li class="collection-item">Tablets</li>
		        <li class="collection-item">USB</li>
		        <li class="collection-item">Disco Duro</li>
		        <li class="collection-item">Audifonos</li>
		    </ul>
		    <br>
		    <ul class="collection with-header z-depth-1">
		        <li class="collection-header"><h3>Precios</h3></li>
				<li class="collection-item">$10 - $200</li>
		        <li class="collection-item">$210 - $500</li>
		        <li class="collection-item">$510 - $1,000</li>
		        <li class="collection-item">+ $1,000</li>
		    </ul>
		</aside>
		<artcle class="col s12 m10">

			<div class="row" >

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">

					    <div class="card-image waves-effect waves-block waves-light">
					    	<div class="descuento  red darken-4">Oferta</div>
					    	<div class="nuevo  light-blue darken-1">Nuevo</div>
							<img class="activator" src="http://www.walmart.com.mx/images/products/img_large/00822248632411l.jpg">
					    </div>

					    <div class="card-content">
				    		<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>

				    		<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Funda con Teclado DGL Negra para Tablet de 7 pulgadas</span>
								<br>

				    		</div>
							<div class="card-detail">
								<div class="card-price">
									$119.00 
									<div class="left precio-descuento">
										$249.00 
									</div>
								</div>
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>Evita al máximo que tu tablet se maltrate al tiempo que optimizas tu manera de trabajar.</p>
							<p>La manera más fácil de mantener tu equipo como nuevo por mucho más tiempo.</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					    	<div class="nuevo  light-blue darken-1">Nuevo</div>
							<img class="activator" src="http://www.walmart.com.mx/images/products/img_large/00088590978843l.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Smart Cover para iPad Mini Mod. MF059ZM/A</span>
								<br>
							</div>
							<div class="card-detail">
								<div class="card-price">
									$600.00 
								</div>
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>El iPad y la Smart Cover son una pareja realmente inteligente. Los imanes en su interior se alinean para lograr una estructura precisa. Un recubrimiento de microfibra suave mantiene la pantalla limpia. </p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://www.walmart.com.mx/images/products/img_large/00081698301005l.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Adaptador HDMI Retráctil Retrak para mini y micro HDMI y DVI</span>
								<br>
							</div>
							<div class="card-detail">	
								<div class="card-price">
									$489.00
								</div>								
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>Mantén tus dispositivos siempre conectados con este excelente adaptador</p>
							<p>Un adaptador con conexión HDMI ideal para sincronizar diversos dispositivos a una conexión HDMI.</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>


			</div>
			<div class="row" >
				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					      <img class="activator" src="http://www.walmart.com.mx/images/products/img_large/00322248585671l.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">

								<span class="card-title activator grey-text text-darken-4">MacBook Air 11.6 Pulgadas Intel Core i5 4GB RAM 256 GB</span>
								<br>

							</div>
							<div class="card-detail">
								<div class="card-price">
									$17,999.00
								</div>								
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>Todo el poder que quieres. Todo el día. </p>
							<p>s procesadores Intel Core i5 de cuarta generación con gráficos Intel HD Graphics 5000 están listos para todo, desde editar fotos hasta navegar por Internet. Todo de forma ultrarrápida y con menor consumo de energía.</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					    	<div class="descuento  red darken-4">Oferta</div>
							<img class="activator" src="http://www.walmart.com.mx/images/products/img_large/00693887880785l.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Tablet Tech Pad Xtab 785</span>
								<br>

							</div>
							<div class="card-detail">	
								<div class="card-price">
									$599.00 
									<div class="left precio-descuento">
										$799.00
									</div>
								</div>								
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>¡Perfecta para entretenerte después de una larga jornada de trabajo!</p>
							<p>Disfruta de la Tablet PC Tech Pad Xtab785 con pantalla de 7 pulgadas HD.</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					      <img class="activator" src="http://ecx.images-amazon.com/images/I/71K5iaccfXL._SL1500_.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Dell UZ2715H Monitor Ultrasharp Multimedia Full HD, 27"</span>
								<br>
							</div>
							<div class="card-detail">	
								<div class="card-price">
									$6,198.98
								</div>
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>Increible computadora incluye micrófono, cámara web y parlantes integrados</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>


			
			</div>
			<div class="row" >

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					      <img class="activator" src="http://ecx.images-amazon.com/images/I/61K65GMnJnL._SL1100_.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Sandisk SDSDQUAN-064G-G4A MicroSDXC 64GB</span>
								<br>
							</div>
							<div class="card-detail">	
								<div class="card-price">
									$399.00
								</div>								
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>Ideal para grabar video en Full HD (1080p)</p>
							<p>Velocidades de hasta 48MB/s.</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					      <img class="activator" src="http://www.walmart.com.mx/images/products/img_large/00471236696194l.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Disco Duro Externo Adata Classic 1TB</span>
								<br>
							</div>
							<div class="card-detail">	
								<div class="card-price">
									$1,279.00 
								</div>								
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>Lleva tu información importante a donde quiera que vayas.</p>
							<p>El Disco duro externo de ADATA te permitirá portar gran cantidad de información en un dispositivo discreto y fácil de llevar en cualquier bolsa o mochila.</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>

				<div class="col s12 m6 l4 product">
					<div class="card hoverable">
					    <div class="card-image waves-effect waves-block waves-light">
					    	<div class="nuevo  light-blue darken-1">Nuevo</div>
							<img class="activator" src="http://www.walmart.com.mx/images/products/img_large/00081452302582l.jpg">
					    </div>
					    <div class="card-content">
					    	<a class="btn-floating btn-large waves-effect waves-light indigo tooltipped card-add" data-position="top" data-delay="50" data-tooltip="Agregar a carrito"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
					    	<div class="descripcion">
								<span class="card-title activator grey-text text-darken-4">Carcasa para iPhone 4 y 4S Incipio Azul</span>
								<br>
							</div>
							<div class="card-detail">
								<div class="card-price">
									$230.00
								</div>								
							</div>
					    </div>
					    <div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
							<p>Incrementa el tiempo de vida de tu iPhone con las novedosas carcasas Incipio que soportan el impacto de los golpes y rayaduras, al tiempo que lo personalizan.</p>
							<div class="center-align">
								<a class="waves-effect waves-light btn red"><i class="zmdi zmdi-shopping-cart-plus left"></i>Agregar a carrito</a>
								<br>
								<br>
								<a href="{{ URL::route('producto',array('producto' => 'producto-prueba')) }}" class="waves-effect waves-light btn indigo darken-3"><i class="material-icons left">library_books</i>Descubre Más</a>
							</div>
					    </div>
					</div>
				</div>

			</div>

		</artcle>
		
	</section>

@stop
