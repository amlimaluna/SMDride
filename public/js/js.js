$(document).ready(function(){
	var offset = $('.meuMenu').offset().top;
	var $meuMenu = $('.meuMenu'); // guardar o elemento na memoria para melhorar performance
	$(document).on('scroll', function () {
		if (offset <= $(window).scrollTop()) {
			$meuMenu.addClass('fixar');
			$(".hidden").css("display","inline")
			$(".show").css("display","none")
		} else {
			$meuMenu.removeClass('fixar');
			$(".show").css("display","inline")
			$(".hidden").css("display","none")
		}
	});
});