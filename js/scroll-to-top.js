	//Check to see if the window is top if not then display button
	$(window).scroll(function() {
    if ($(this).scrollTop() < 425 || $(this).scrollTop() > $(document).height() - $(window).height() - 0) {
        $('.scrollToTop').fadeOut();
    } else {
        $('.scrollToTop').fadeIn();
    }
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});