<div class="navbar-fixed">
  <nav class="indigo darken-4">
      <div class="nav-wrapper">
      <div class="brand-logo">
        <img src="http://www.daseda.net/img/logo.png" alt="daseda"  class="brand-logo">
      </div>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right">
        <li><a href="" class="waves-effect waves-light"><i class="material-icons">search</i></a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ URL::route('home') }}" class="waves-effect waves-light">Inicio</a></li>
        <li><a href="{{ URL::route('nosotros') }}" class="waves-effect waves-light">Nosotros</a></li>
        <li><a href="{{ URL::route('productos') }}" class="waves-effect waves-light">Productos</a></li>
        <li><a href="{{ URL::route('productos') }}" class="waves-effect waves-light">Servicios</a></li>
        <li><a href="{{ URL::route('contacto') }}" class="waves-effect waves-light">Contacto</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ URL::route('home') }}" class="waves-effect waves-light">Inicio</a></li>
        <li><a href="{{ URL::route('nosotros') }}" class="waves-effect waves-light">Nosotros</a></li>
        <li><a href="{{ URL::route('productos') }}" class="waves-effect waves-light">Productos</a></li>
        <li><a href="{{ URL::route('productos') }}" class="waves-effect waves-light">Servicios</a></li>
        <li><a href="{{ URL::route('contacto') }}" class="waves-effect waves-light">Contacto</a></li>
      </ul>
      </div>
  </nav>
  <nav class="indigo darken-4">
      <div class="nav-wrapper">
      
      </div>
  </nav>
</div>