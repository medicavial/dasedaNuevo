@extends('layouts.error')
@section('content')

    <div class="container text-center">
        <div class="logo-404">
            <a href="/"><img src="images/home/logo.png" alt="" /></a>
        </div>
        <div class="content-404">
            <img src="images/404/404.png" class="img-responsive" alt="" />
            <h1><b>OPPS!</b> no pudimos encontrar la pagina</h1>
            <p>Uh... parece que paso algo. La pagina que buscabas no existe o esta fuera de servicio.</p>
            <h2><a href="/">Regresame al inicio</a></h2>
        </div>
    </div>

@stop
