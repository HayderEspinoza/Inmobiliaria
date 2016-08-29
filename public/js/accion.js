$(window).on('load', init);

function init(e) {
	$(".scroll").on("click", scroll);
}
function scroll(event){
	event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
}