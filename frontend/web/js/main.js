$(document).ready(function () {
    $('#index2').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
            }
        }
    })
    $('.owl-menu').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    })
    $('.owl-bar').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 2
            }
        }
    })

})