(function (){
	/**
	* daseda Module
	*
	* Description
	*/
	angular.module('daseda', ['ngMap'])
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

	})
	.controller('contactoCtrl',contactoCtrl);

	function contactoCtrl(){

	};
	
})();