$( document ).ready(function() {
$('.ourClients .slider').slick({
    speed: 9000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite:true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
    ]
});
$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $("header .menu").addClass('scroll');
    }
    if  (scroll <= 10) {
        $("header .menu").removeClass('scroll');
    }
});
    $('.brgBtn').click(function() {
        $('header nav').toggleClass('active');
        $('.brgBtn').toggleClass('active');
        // $('header .logo').toggleClass('active');
    });
});
