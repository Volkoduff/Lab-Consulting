$(function () {

	// Preloader
	$('#myModal').on('shown.bs.modal', function () {
	$('#myInput').trigger('focus')
	})
	    var $preloader = $('#page-preloader'),
	        $spinner   = $preloader.find('.spinner');
	    $spinner.fadeOut();
	    $preloader.delay(350).fadeOut('slow');

	// Прокрутка
	$('.go_to').click( function(){ // ловим клик по ссылке с классом go_to
	var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
	    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
        }
	    return false; // выключаем стандартное действие
    });

	// MenuHamberger
	$('.sandwich').click(function () {
		$('.menu-sandwich').toggleClass('d-none').css('order', '1')
		.addClass('ham-menu').addClass('fadeInDown').addClass('animate');
		$('.nav__menu').addClass('column');
		$('.nav__item').addClass('nav__item_styling');
		$('.nav__link').addClass('nav__link_styling');
	});

	// ParallaxBackground
	var $el = $('.parallax-background');
    $(window).on('scroll', function () {
        var scroll = $(document).scrollTop();
        $el.css({
            'background-position':'50% '+(-.4*scroll)+'px'
        }); 
    });

    // Modal
    $('.modal-button').click(function () {
    	$('#ModalWindow').arcticmodal();
    	e.preventDefault();
    })
	

    // Slider
	$('.slider').slick({
		dots: true,
		prevArrow: '<button type="button" class="slick-prev"> <i class="fa fa-angle-left"></button>',
		nextArrow: '<button type="button" class="slick-next"> <i class="fa fa-angle-right"></button>',
	});


	lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })

});

