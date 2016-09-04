$(function(){

	$('.video-slide-content').css('height',$(window).height());
	$('.video-slide-content').css('width',$(window).width());	
	$('.sub-slide-content,.image-container, .eye').css('height',$(window).height());

	var nav = $("#nav");
	var offset = nav.offset().top;
	
	$('.arrow-down').click(function(){
		$('html, body').animate({
    		scrollTop: nav.offset().top
		});
	});

	$(document).scroll(function(){
		if($(window).scrollTop() > offset){
			nav.addClass('fixed-top');
		}
		else {
			nav.removeClass('fixed-top');
		}
		if($('.sub-slide-content')){
			var bl = $(window).scrollTop()/$(window).height();
			$('.image-container img').css('-webkit-filter','blur('+bl*10+'px)');
			$('.image-container img').css('filter','blur('+bl*10+'px)');
		}

	});

});