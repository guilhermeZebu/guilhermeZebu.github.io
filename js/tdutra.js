$(document).ready(function(){

	$('.know-more').click(function(){

		window.open('/halitose','_self');
	});
    
    $(".main-slide-info .glyphicon-chevron-down").click(function() {
    $('html,body').animate({
        scrollTop: $(".about-us").offset().top - 70},
        'slow');
});

    if(window.location.hash) {
    	var target = $(window.location.hash);
    	$('html, body').animate({scrollTop: target.offset().top - 70}, 100);
    }

	$('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top - 70
	        }, 700);
	        return false;
	      }
	    }
	  });

	$( "#cont-form" ).submit(function( event ) {

	  $('#modalSucess').on('hidden.bs.modal', function () {
  			location.reload();
		});	

	  $('.overlay').fadeIn();
	  var name = $('input#name').val();
	  var mail = $('input#mail').val();
	  var phone = $('input#phone').val();
	  var address = $('input#address').val();
	  var prospection = $('input#prospection').val();
	  var message = $('textarea#message').val();
	  emailjs.send("gmail", "form_contato",
	  	{ "name" : name,
	  	   "mail" : mail,
	  	   "phone" : phone,
	  	   "address" : address,
	  	   "prospection":  prospection,
	  	   "message" : message
	  }).then((function(response){
	  	$('.overlay').fadeOut();
	  	$("#modalSucess").modal('show');
	  }
	));
	  event.preventDefault();
	});

});