$(document).ready(function(){

    $('.slick-slide').slick({
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        speed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        vertical: false,
        prevArrow: '<i class="fas fa-caret-left up_arrow"></i>',
        nextArrow: '<i class="fas fa-caret-right bottom_arrow"></i>',
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
              }
            }
          ]
    });


	$('.navbar-nav .nav-link').on('click', function() {
		var toggle = $('.navbar-toggler').is(':visible');
		if (toggle) {
			$('.navbar-collapse').collapse('hide');
		}
    });
	

	$('.noover').mousemove(function(event){
	  var moveX = (($(window).width() / 2) - event.pageX) * 0.1;
	  var moveY = (($(window).height() / 2) - event.pageY) * 0.1;
	  $('.move').css('margin-left', moveX + 'px');
	  $('.move').css('margin-top', moveY + 'px');
	});
	

	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 50) {
			$('.top-header').addClass('fixed-header');
		} else {
			$('.top-header').removeClass('fixed-header');
		}
	});
	
    $(".img-class").mouseover(function () {
        $('.img-id-1').attr('src', $('.img-id-1').data("src"));
        $('.img-id-2').attr('src', $('.img-id-2').data("src"));
        $('.img-id-3').attr('src', $('.img-id-3').data("src"));
        $('.img-id-4').attr('src', $('.img-id-4').data("src"));

        $(this).attr('src', $(this).data("hover"));

        $('.img-1').css('display', 'none');
        $('.img-2').css('display', 'none');
        $('.img-3').css('display', 'none');
        $('.img-4').css('display', 'none');

        $('.' + $(this).data("id")).css('display', 'block');
    });
	
    $(".accordion-item").click(function () {
        $('.faq-title').removeClass('collapsed');
        $('.collapse').removeClass('show');
        $(this).toggleClass('collapsed');
        $(this).closest('.card').find('.collapse').toggleClass('show');
    });


	$('a[href*="#"]:not([href="#"])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
		  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top - 65,
				  }, 1000);
				  return false;
			  }
		}
	});	
    
});