$(document).ready(function(){
	var offset = $('.caronabottom').offset().top;
	var $meuMenu = $('#topis'); // guardar o elemento na memoria para melhorar performance
	$("a").mouseenter(function(){
		$(this).addClass("sombra");
	});
	$("a").mouseleave(function(){
		$(this).removeClass("sombra");
	});
	
	$(document).on('scroll', function () {
	
		if (offset <= $(window).scrollTop()) {
			$(".hidden").css("display", "inline");
			$("#final").css('margin-right', "100px;")
		} else {
			$(".hidden").css("display", "none");
			$("#final").css('margin-right', "250px;")
		
		}
	
	
	});
});