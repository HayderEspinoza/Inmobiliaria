$(window).on('load', init);

function init(e) {
	$(".scroll").on("click", scroll);
	$('.cerrar').on('click', cerrar);
	$('.toggle').on('click', cerrar);
	$('.wrap-servicio a').on('click', tabServicios);
	$('.imagen-detalle img').on('click', showImagen)
	$(window).on('scroll', showArrow);
	$('.flash ,.flash .close').on('click', function(e){
		e.preventDefault();
		$('.flash').fadeOut();
	});
	$('.moneda').number( true, 0);
	$('.image-link').magnificPopup({type:'image'});
	$('.carousel').carousel({
        interval: 4000,
        pause: false
    });
    $('.multiselect').multiselect({
        enableFiltering: true,
        filterBehavior: 'value'
    });
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
		$('.scrollUp').fadeIn();
	} else {
		$('.scrollUp').fadeOut();
	}
}
function tabServicios(e) {
	e.preventDefault();
	$('.wrap-servicio a').removeClass('active');
	$(this).addClass('active');
}
function showImagen() {
	$('#portada').attr('src', this.src);
}