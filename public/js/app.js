(function (){
	/**
	* daseda Module
	*
	* Description
	*/
	angular.module('daseda', ['ngMap','angular-carousel'])
	.run(function ($rootScope){

		$rootScope.resultadosExpress = false;
		$rootScope.resultadosExpress = false;
		$rootScope.muestrabusqueda = muestrabusqueda;
		$rootScope.buscaResultados = buscaResultados;


		function muestrabusqueda(){
			$rootScope.busqueda = !$rootScope.busqueda;
			$rootScope.resultadosExpress = false;
		}

		function buscaResultados(){
			$rootScope.resultadosExpress = true;
		}

	})
	.controller('contactoCtrl',contactoCtrl);

	function contactoCtrl(){

	};
	
})();