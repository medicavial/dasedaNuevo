$( document ).ready(function(){

	//inicializamos el boton para movile
	$(".button-collapse").sideNav();
	
	$('.slider').slider({full_width: false});
	$(".button-cart").sideNav({
		edge: 'right',
		menuWidth: 300
	});
	$('.slider').slider({
		full_width: true,
		height: 400
	});
    $('.tooltipped').tooltip({delay: 50});
})