(function (){
	/**
	* daseda Module
	*
	* Description
	*/
	angular.module('daseda', [])
	.run(function ($rootScope){

		$rootScope.muestrabusqueda = muestrabusqueda;
		$rootScope.buscaResultados = buscaResultados;


		function muestrabusqueda(){
			$rootScope.busqueda = !$rootScope.busqueda;
			$rootScope.resultadosExpress = false;
		}

		function buscaResultados(){
			$rootScope.resultadosExpress = true;
		}

	});
	
})();