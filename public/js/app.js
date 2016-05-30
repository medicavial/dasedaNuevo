(function (){
	/**
	* daseda Module
	*
	* Description
	*/
	angular.module('daseda', [])
	.run(function ($rootScope){
		
		$rootScope.muestrabusqueda = function(){
			$rootScope.busqueda = !$rootScope.busqueda;
		}
	});
	
})();