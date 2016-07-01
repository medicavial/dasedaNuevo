@extends('layouts.default')
@section('content')

	<section class="container" ng-controller="contactoCtrl as vm">
		<div class="card">
		    <div class="card-image">
		      	<img class="activator" src="img/contacto.jpg">
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
							<div class="row">
								<div class="col m6">
					    			<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fdaseda.mexico&width=92&layout=box_count&action=like&size=large&show_faces=true&share=true&height=65&appId" width="92" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> <br>									
								</div>
								<div class="col m6">
					    			<a href="https://twitter.com/dasedaMx" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @dasedaMx</a> <br>									
								</div>
								<div class="col m6">
					    			<div class="g-plusone" data-href="https://plus.google.com/b/115657013177590898074/115657013177590898074?hl=es"></div>									
								</div>
								
							</div>
					    	<!-- <a class="btn-large red btn-floating waves-effect waves-light btn-flat"><i class="zmdi zmdi-facebook"></i></a> -->
					    	<!-- <a class="btn-large red btn-floating waves-effect waves-light btn-flat"><i class="zmdi zmdi-twitter"></i></a> -->
					    	<!-- <a class="btn-large red btn-floating waves-effect waves-light btn-flat"><i class="zmdi zmdi-google-plus"></i></a>-->
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
	
	<!-- Inserta esta etiqueta en la sección "head" o justo antes de la etiqueta "body" de cierre. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'es-419'}
</script>
<!-- Inserta esta etiqueta donde quieras que aparezca Botón +1. -->

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

@stop
