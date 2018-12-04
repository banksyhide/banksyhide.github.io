//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    var section1Height = $('#main').height()-63;
    var winTop = $(window).scrollTop();
    
    if (winTop >= section1Height && winTop) {
        $(".navbar").addClass("navbar-fixed-top");
        $(".navbar").addClass("top-nav-collapse");
        $(".navbar").removeClass("absolute-nav");
    } else {
        $(".navbar").removeClass("navbar-fixed-top");
        $(".navbar").removeClass("top-nav-collapse");
        $(".navbar").addClass("absolute-nav");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top-62
        }, 700, 'easeInOutExpo');
        event.preventDefault();
    });
});

if ($(window).width() > 769) {
    
    $('.dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(200);
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
    });
    
}

$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa-chevron-right").removeClass("fa-chevron-right").addClass("fa-chevron-down");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa-chevron-down").removeClass("fa-chevron-down").addClass("fa-chevron-right");
});

jQuery(document).ready(function($){
    new WOW().init();

	//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
	var MQL = 1170;

	//primary navigation slide-in effect
	if($(window).width() > MQL) {
		var headerHeight = $('.cd-header').height();
		$(window).on('scroll',
		{
	        previousTop: 0
	    }, 
	    function () {
		    var currentTop = $(window).scrollTop();
		    //check if user is scrolling up
		    if (currentTop < this.previousTop ) {
		    	//if scrolling up...
		    	if (currentTop > 0 && $('.cd-header').hasClass('is-fixed')) {
		    		$('.cd-header').addClass('is-visible');
		    	} else {
		    		$('.cd-header').removeClass('is-visible is-fixed');
		    	}
		    } else {
		    	//if scrolling down...
		    	$('.cd-header').removeClass('is-visible');
		    	if( currentTop > headerHeight && !$('.cd-header').hasClass('is-fixed')) $('.cd-header').addClass('is-fixed');
		    }
		    this.previousTop = currentTop;
		});
	}

	//open/close primary navigation
	$('.cd-primary-nav-trigger').on('click', function(){
		$('.cd-menu-icon').toggleClass('is-clicked'); 
		$('.cd-header').toggleClass('menu-is-open');
		
		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('.cd-primary-nav').hasClass('is-visible') ) {
			$('.cd-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('.cd-primary-nav').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
				$('body').addClass('overflow-hidden');
			});	
		}
	});

        //$('.cd-primary-nav li').on('click', function(){

                $('.cd-menu-icon').removeClass('is-clicked'); 

                $('.cd-header').removeClass('menu-is-open');

                $('.cd-primary-nav').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){

                        $('body').removeClass('overflow-hidden');

                });

        //});

});

$(".rotate").textrotator({
    animation: "flipUp",
    separator: ",",
    speed: 2000
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip({
        html:'true'
    });
});

$(document).ready(function() {

    $("#owl-demo").owlCarousel({

        autoPlay: 3000,

        items : 6,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });
    
    $("#owl-demo-second").owlCarousel({

        autoPlay: 3000,

        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });
    
    $("#owl-demo-third").owlCarousel({

        autoPlay: 3000,

        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });
    
    $("#owl-demo-fourth").owlCarousel({

        autoPlay: 3000,

        items : 1,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });

});

$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});

$(document).ready(function(){
    $("#full-form").submit(function(){
        if ($('input:checkbox').filter(':checked').length < 1){
            alert("Check at least one type of income!");
            return false;
        }
    });
});