if ($.fn.magnificPopup) {
    $('.video_btn').magnificPopup({
        disableOn: 0,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: true,
        fixedContentPos: false
    });
}
$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".btn-menu span").addClass("dark-menu");
        $(".h-sticky").addClass("h-sticky-down");
        $(".hidden-menu").addClass("hidden-menu-light");
        $(".h-logo").addClass("h-logo-scroll");
    } else {
        $(".btn-menu span").removeClass("dark-menu");
        $(".h-sticky").removeClass("h-sticky-down");
        $(".hidden-menu").removeClass("hidden-menu-light");
        $(".h-logo").removeClass("h-logo-scroll");
    }
});