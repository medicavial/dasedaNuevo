@extends('layouts.falta')
@section('content')

	<div class="container text-center">
		<div class="logo logo-404">
			<a href="{{ route('home') }}"><img src="images/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="{{ route('home') }}">Bring me back Home</a></h2>
			<img src="images/404/404.png" class="img-responsive" alt="" />
		</div>
	</div>

@stop
