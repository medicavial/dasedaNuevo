@extends('layouts.default')
@section('content')
	
	<nav>
		<div class="row nav-wrapper indigo">
			<div class="col s12">
				<a href="#!" class="breadcrumb">Inicio</a>
				<a href="#!" class="breadcrumb">Productos</a>
				<a href="#!" class="breadcrumb">Carrito</a>
			</div>
		</div>
	</nav>

	<section class="container">
		<h1 class="titulo-producto">Carrito de compras</h1>
		<div class="divider"></div>
		<br>
		<!-- <div class="row card-panel">
			<div class="col m12">
				<table class="centered responsive-table">
			        <thead>
						<tr>
							<th></th>
							<th data-field="id">Producto</th>
							<th data-field="name">Cantidad</th>
							<th data-field="price">Precio</th>
						</tr>
			        </thead>

			        <tbody>
						<tr>
							<td>								
								<img src="http://www.walmart.com.mx/images/products/img_large/00822248632411l.jpg" alt="" class="circle responsive-img item">
							</td>
							<td>								
								Funda con Teclado DGL Negra para Tablet de 7 pulgadas
							</td>
							<td>
								<button class="btn-flat waves-effect "><i class="material-icons">remove</i></button> 2 <button class="btn-flat waves-effect "><i class="material-icons">add</i></button>
							</td>
							<td>
								$119
							</td>
						</tr>
						<tr>
							<td>
								<img src="http://www.walmart.com.mx/images/products/img_large/00088590978843l.jpg" alt="" class="circle responsive-img item">
							</td>
							<td>
								Smart Cover para iPad Mini Mod. MF059ZM/A 
							</td>
							<td>
								<button class="btn-flat waves-effect "><i class="material-icons">remove</i></button> 3 <button class="btn-flat waves-effect "><i class="material-icons">add</i></button>
							</td>
							<td>
								$600
							</td>
						</tr>
						<tr>
							<td>
								<img src="http://www.walmart.com.mx/images/products/img_large/00081698301005l.jpg" alt="" class="circle responsive-img item">
							</td>
							<td>
								Adaptador HDMI Retráctil Retrak para mini y micro HDMI y DVI 
							</td>
							<td>
								<button class="btn-flat waves-effect "><i class="material-icons">remove</i></button> 3 <button class="btn-flat waves-effect "><i class="material-icons">add</i></button>
							</td>
							<td>
								$489
							</td>
						</tr>
			        </tbody>
			        <tfoot>
			        	<tr>
			        		<td></td>
			        		<td colspan="3" class="right-align"> <strong class="total">Total : $1208 </strong>  </td>
			        	</tr>
			        </tfoot>
			    </table>				
			</div>
			<div class="center-align">
				<button class="waves-effect waves-light btn indigo"><i class="material-icons right">keyboard_arrow_right</i>Comprar Ahora</button>				
			</div>
			
		</div> -->
		<div class="row card-panel">
			<div class="col m12 center-align">
				<h3>Tu Carrito Esta Vacio =(</h3>
				<p>Recuerda que tenemos los mejores productos al mejor precio, <strong>y si no lo tenemos te lo conseguimos</strong> </p>
				<br>
				<div class="center-align">
					<button class="waves-effect waves-light btn indigo"><i class="material-icons right">shopping_cart</i>Mirar Productos</button>				
					<button class="waves-effect waves-light btn indigo"><i class="material-icons right">question_answer</i>Preguntar por un producto</button>				
				</div>
			</div>
		</div>
	</section>





@stop
