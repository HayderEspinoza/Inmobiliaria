$(window).on('load', init);

function init(e) {
	$(".scroll").on("click", scroll);
	$('.cerrar').on('click', cerrar);
	$('.toggle').on('click', cerrar);
	$(window).on('scroll', showArrow);
}
function scroll(event){
	event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
}
function cerrar(e) {
	e.preventDefault();
	$('.menu').toggleClass('menu-hidden');
}
function showArrow(e) {
	var y = $(this).scrollTop();
	if (y > $(window).height()) {
		console.log('prueba')
		$('.scrollUp').fadeIn();
	} else {
		$('.scrollUp').fadeOut();
	}
}