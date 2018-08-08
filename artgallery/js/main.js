$(document).ready(function () {
    $('.reviews').owlCarousel({
        center: true,
        autoplay: true,
        nav: true,
        dots: true,
        navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: {
                items: 1
            },
        }
    });
});