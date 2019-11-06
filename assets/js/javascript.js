$(document).ready(function (e) {
    // Material Select

    // $('.mdb-select').materialSelect({});

    // carousel owl

    $(".carousel").owlCarousel({
        loop: true,
        margin: 16,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    // scroll navbar
    var menu = $('.navbar-scrollable');
    var origOffsetY = menu.offset().top + 2;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('.navbar').addClass('fixed-top');
            $('.logo-default').show();
            $('.logo-light').hide();
        } else {
            $('.navbar').removeClass('fixed-top');
            $('.logo-default').hide();
            $('.logo-light').show();
        }
    }
    document.onscroll = scroll;


});