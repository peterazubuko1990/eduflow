// jQuery for page nav navber scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top -50
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


$(window).scroll(function(){
    if ($(window).scrollTop() >= 50) {
       $('nav').addClass('fixed-header');
    }
    else {
       $('nav').removeClass('fixed-header');
    }
});

 $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 80) {
                $('#back-to-top').fadeIn();
                 $('#back-to-top').tooltip('hide');
            } else {
                $('#back-to-top').fadeOut();
                 
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 0);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
		
		

});

// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#carousel-testimonial').carousel({
    pause: true,
    interval: 4000,
  });
});

