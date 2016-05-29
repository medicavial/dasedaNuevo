<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

	@include('includes.header')

	@include('includes.carrito')
	
	<section>
		@yield('content')
	</section>

	<footer id="footer">
	    @include('includes.footer')
	</footer>

	@include('includes.scripts')
    
</body>
</html>