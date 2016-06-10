@extends('layouts.default')
@section('content')
	<!-- <div style="
	    position: absolute;
	    background: #1A237E;
	    width: 100%;
	    height: 200px;
	    top: 64px;
	    z-index: 0;">
	</div> -->
	<section class="container" ng-controller="contactoCtrl as vm">
		<div class="card">
		    <div class="card-image">
		      	<img class="activator" src="http://www.leodan.com.mx/img/bannercontacto.jpg">
		      	<span class="card-title">CONTACTANOS</span>
		    </div>
		  
		    <div class="card-content">
		    	<div class="row">
		    		<div class="col m6">		    			
				    	<span class="card-title grey-text text-darken-4">¿Donde estamos?</span>
				    	<div class="divider"></div>
				    	<p>
				    		Eje Central Lazaro Cardenas 54 Local 303 Segundo Piso,México D.F.
						</p>
		    		</div>
		    		<div class="col m6">
		  
					  		<ng-map center="19.4305963,-99.1409636" zoom="17">
					  			<marker position="Lázaro Cárdenas 54, Centro, 06000 Ciudad de México" title="Daseda" centered="true"></marker>
					  		</ng-map>
						
		    		</div>
		    	</div>
				<br>
				<br>
				<div class="row">
					<div class="col m6 center-align">
		    			<i class="zmdi zmdi-phone imagen-icon"></i>						
					</div>
					<div class="col m6">
						<span class="card-title grey-text text-darken-4">Contactanos</span>
						<div class="divider"></div>
						<br>
						<p>
					    	Telefono: 55-18-17-47 <br>
							Whats App: 55-18-00-42-82 / 55-32-24-34-59 <br>
							Email: info@daseda.net							
						</p>
					</div>
				</div>
				
				<br>
				<br>
				<br>

				<div class="row">
					<div class="col m6">
						<span class="card-title grey-text text-darken-4">Nuestras Redes Sociales</span>
						<div class="divider"></div>
						<br>
						<div class="center-align">
					    	<a class="btn-large red btn-floating waves-effect waves-light btn-flat"><i class="zmdi zmdi-facebook"></i></a>
					    	<a class="btn-large red btn-floating waves-effect waves-light btn-flat"><i class="zmdi zmdi-twitter"></i></a>
					    	<a class="btn-large red btn-floating waves-effect waves-light btn-flat"><i class="zmdi zmdi-google-plus"></i></a>							
						</div>
					</div>
		    		<div class="col m6 center-align">
		    			<i class="zmdi zmdi-share imagen-icon"></i>						
					</div>
				</div>

				<br>
				<br>
				<br>

				<div class="row">
					<div class="col m12">
						<div class="center-align">
							<span class="card-title grey-text text-darken-4">¿Tienes Dudas o Algun Comentario?...Escribenos</span>							
						</div>
						<div class="divider"></div>
						<br>
				    	<div class="row">
						    <form class="col s12">
						      <div class="row">
						        <div class="input-field col s12">
						          <input id="nombre" type="text" class="validate">
						          <label for="nombre">Tu Nombre *</label>
						        </div>
						      </div>						   
						      <div class="row">
						        <div class="input-field col s12">
						          <input id="mail" type="email" class="validate">
						          <label for="mail">Tu E-mail *</label>
						        </div>
						      </div>
						      <div class="row">
						        <div class="input-field col s12">
						          <textarea id="textarea1" class="materialize-textarea"></textarea>
						          <label for="textarea1">Tu Mensaje *</label>
						        </div>
						      </div>
						    </form>
							<div class="center-align">
								<button class="btn waves-effect waves-light red" type="submit" name="action">Enviar
								    <i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</div>
				</div>
		    </div>
		    
		</div>
	</section>

@stop
