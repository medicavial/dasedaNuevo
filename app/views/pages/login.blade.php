@extends('layouts.default')
@section('content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Iniciar sesión con mi cuenta</h2>
						<form action="#">
							<input type="text" placeholder="Nombre" />
							<input type="email" placeholder="Email" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Mantenerme conectado
							</span>
							<button type="submit" class="btn btn-default">Iniciar Sesión</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">O</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Soy usuario nuevo!</h2>
						<form action="#">
							<input type="text" placeholder="Nombre"/>
							<input type="email" placeholder="Email"/>
							<input type="password" placeholder="Contraseña"/>
							<button type="submit" class="btn btn-default">Registrarme</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@stop
