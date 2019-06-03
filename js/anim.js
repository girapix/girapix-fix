AOS.init();
$(function () {
    $('.sidenav').sidenav();

    $('.scrollspy').scrollSpy({
        scrollOffset: 100
    });

    $('.materialboxed').materialbox();

    $('.sidenav li').click(() => {
        $('.sidenav').sidenav('close');
    });

    $(window).on('scroll', function() {
        if($(window).scrollTop() > 100) {
            $('.navbar').addClass('nav-color');
        } else {
            $('.navbar').removeClass('nav-color');
        }
    });
});

$(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                autoheight: true
            },
            400: {
                items: 1,
                nav: true,
                autoheight: true
            },
            600: {
                items: 1,
                nav: true,
                autoheight: true
            },
            1000: {
                items: 1,
                nav: false,
                loop: true,
                autoplay: true,
                autoplayTimeout: 10000,
                autoplayHoverPause: false,
                autoheight: true
            },
        }
    })
});