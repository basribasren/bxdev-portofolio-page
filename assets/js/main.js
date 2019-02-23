$(function(){

//Remove loading-wrapper class before window load
setTimeout(function() {
    $('.loading-wrapper').removeClass('loading-wrapper-hide');
    return false;
}, 10);

//Begin - Window Load
$(window).on('load', function(){

    // :: 1.0 Loader
    $('#loader-name').addClass('loader-up');
    $('#loader-job').addClass('loader-up');
    $('#loader-animation').addClass('loader-up');

    setTimeout(function() {
        $('#page-loader').addClass('loader-out');
        return false;
    }, 400);

    $('#page-loader').delay(1000).fadeOut(10);

    // :: 2.0 Hero -Typed
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        typeSpeed: 100,
        loop:true
    });

    // :: 6.0 Header - Fixed Menu
    $('#hero1').waypoint(function(direction) {
        if (direction === 'down') {
            $('#header').addClass('header-stick');
        } else {
            $('#header').removeClass('header-stick');
        }
    }, {
        offset: '-2px'
    });

    //Viewport
    var windowHeight = $(window).height();

    function adjustViewport() {
        $('.viewport').css('min-height', windowHeight);
        return false;
    }
    adjustViewport();
});

//Begin - Document Ready
$(document).ready(function(){

    // :: 3.0 Testimonial - Owl Carousel
    $("#testimonial-carousel").owlCarousel({
        items: 1,
        loop:true,
        center:true,
        autoplay:true,
        autoplayHoverPause : true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        navigationText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
    });

    // :: 4.0 Clients - Owl Carousel
    $("#clients-carousel").owlCarousel({
        loop:true,
        center:true,
        autoplay:true,
        items: 5,
        autoplayHoverPause : true,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        navigationText: ["<span class='fa fa-chevron-left'></span>","<span class='fa fa-chevron-right'></span>"],     
    });

    // :: 5.0 Portofolio - Filter
    var catActive = '';

    $('#filter-header .category-item').on('click', function(event) {
        var catActive = $(this).attr('data-filter');
        $('#filter-header .category-item').removeClass('category-item-active');
        $(this).addClass('category-item-active');
        $("#filter-container .filter-item").removeClass('project-item-disabled');
        $("#filter-container .filter-item:not(." + catActive + ")").addClass('project-item-disabled');
        event.preventDefault();
    });
    
    // :: 8.0 Portofolio - Fancy Box
    $(".fancybox").fancybox({

    });

    // :: 9.0 Header - Mobile Friendly SubMenus
    $('.navbar-nav li:has(ul)').doubleTapToGo();

    // :: 10.0 Map - Maps iframe Overlay
    var map = $('#map');
    map.on('click', function() {
        $('#map iframe').css("pointer-events", "auto");
        return false;
    });

    map.on('mouseleave', function() {
        $('#map iframe').css("pointer-events", "none");
        return false;
    });

    // :: 11.0 Scroll - Anchor Smooth Scroll
    $('a[href*=\\#]:not([href=\\#])').on('click', function () {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });    
});

});