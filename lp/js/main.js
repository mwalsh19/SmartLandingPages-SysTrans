$(document).ready(function(){
	var formContainerDesktop = $('.form-desktop'),
		formContainerMobile = $('.form-mobile'),
		form = $('.container-form'),
		window_width  = $(window).width(),
		window_height = $(window).height();
	
	function moveForm(){
		window_width  = $(window).width(),
		window_height = $(window).height();
		
		if(window_width < 768){
			formContainerMobile.append(form);
		}else{
			formContainerDesktop.append(form);
		}
	}
	
	$(window).resize(moveForm);
	$(window).trigger('resize');
	
});