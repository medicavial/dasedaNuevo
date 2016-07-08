<div class="navbar-fixed">
  <nav class="indigo darken-4" ng-if="!busqueda">
      <div class="nav-wrapper">
      <div class="brand-logo">
        <img src="{{ URL::asset('img/logo.png') }}" alt="daseda"  class="brand-logo">
      </div>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right">
        <li><a class="waves-effect waves-light"><i class="material-icons" ng-click="muestrabusqueda()">search</i></a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ URL::route('home') }}" class="waves-effect waves-light">Inicio</a></li>
        <li><a href="{{ URL::route('nosotros') }}" class="waves-effect waves-light">Nosotros</a></li>
        <li><a href="{{ URL::route('productos') }}" class="waves-effect waves-light">Productos</a></li>
        <li><a href="{{ URL::route('servicios') }}" class="waves-effect waves-light">Servicios</a></li>
        <li><a href="{{ URL::route('contacto') }}" class="waves-effect waves-light">Contacto</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{ URL::route('home') }}" class="waves-effect waves-light">Inicio</a></li>
        <li><a href="{{ URL::route('nosotros') }}" class="waves-effect waves-light">Nosotros</a></li>
        <li><a href="{{ URL::route('productos') }}" class="waves-effect waves-light">Productos</a></li>
        <li><a href="{{ URL::route('servicios') }}" class="waves-effect waves-light">Servicios</a></li>
        <li><a href="{{ URL::route('contacto') }}" class="waves-effect waves-light">Contacto</a></li>
      </ul>
      </div>
  </nav>
  <nav class="white" ng-if="busqueda">
      <div class="nav-wrapper">
        <form class="container">
          <div class="input-field">
            <input id="search" type="search" ng-model="query" ng-change="buscaResultados()">
            <label for="search"><i class="material-icons">search</i></label>
            <i class="material-icons" ng-click="muestrabusqueda()">close</i>
          </div>
        </form>
      </div>
  </nav>

  <div class="container collection results  z-depth-3" ng-if="resultadosExpress">
    <a href="" class="collection-item avatar">
      <img src="https://www.walmart.com.mx/images/products/img_large/00822248632411l.jpg" alt="" class="circle">
      <span class="title">Funda con Teclado DGL Negra para Tablet de 7 pulgadas</span>
      <p>Accesorios</p>
    </a>

    <a href="" class="collection-item avatar">
      <img src="https://www.walmart.com.mx/images/products/img_large/00088590978843l.jpg" alt="" class="circle">
      <span class="title">Smart Cover para iPad Mini Mod. MF059ZM/A</span>
      <p>Accesorios</p>
    </a>

    <a href="" class="collection-item avatar">
      <img src="https://www.walmart.com.mx/images/products/img_large/00693887880785l.jpg" alt="" class="circle">
      <span class="title">Tablet Tech Pad Xtab 785</span>
      <p>Tabletas</p>
    </a>

    <a href="" class="collection-item avatar">
      <img src="https://www.walmart.com.mx/images/products/img_large/00322248585671l.jpg" alt="" class="circle">
      <span class="title">MacBook Air 11.6 Pulgadas Intel Core i5 4GB RAM 256 GB</span>
      <p>Computadoras</p>
    </a>
    
  </div>

</div>


