var mainSlider = "#carrosel-main";
var swiperinstalations = new Swiper(mainSlider, {
    slidesPerView: 1,    
	speed: 600,
    pagination: {
    el: mainSlider + ' .swiper-pagination',
        clickable: true,
    }
});

$('#navbar-site .navbar-nav a, #footer .footer-nav a').click(function (e) {
    e.preventDefault();
    var idSection = $(this).attr('href');
    var offset = $(idSection).offset().top;

    $('html, body').animate({
        scrollTop: (offset - 85)
    }, 800);
});
