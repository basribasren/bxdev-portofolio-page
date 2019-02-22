//Use Strict Mode
(function($) {
  "use strict";

//Remove loading-wrapper class before window load
setTimeout(function() {
    $('.loading-wrapper').removeClass('loading-wrapper-hide');
    return false;
}, 10);



//Begin - Window Load
$(window).load(function(){

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
    Typed.new("#typed", {
        stringsElement: document.getElementById('typed-strings'),
        typeSpeed: 80,
        startDelay: 1000,
        backDelay: 1000,
        loop: true,
        contentType: 'html', // or text
    });


    // $("body").niceScroll({ 
    //     cursorcolor: "#09afad", 
    //     cursorwidth:"16px",
    //     background:"rgba(20,20,20,0.3)"
    // });


    // :: 3.0 Testimonial - Owl Carousel
    $("#testimonial-carousel").owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        responsiveRefreshRate: 200,
        responsiveBaseWidth: window,
        pagination: true,
        singleItem: true,
        navigationText: ["<span class='fa fa-chevron-left'></span>", "<span class='fa fa-chevron-right'></span>"],
    });

    // :: 4.0 Clients - Owl Carousel
    $("#clients-carousel").owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        lazyLoad : true,
        paginationSpeed: 400,
        items: 5,
        itemsCustom: false,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
        pagination: true,
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

    // :: 7.0 Skill - Counter Up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
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
    $('a[href*=#]:not([href=#])').on('click', function () {
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

    // :: 12.0 Hero - Ripple
    $('#hero1').ripples({
        resolution: 712,
        dropRadius: 20,
        perturbance: 0.04,
    });

    // :: 13.0 Footer - Footer Reveal
    $('footer').footerReveal({
        shadow: true,
        shadowOpacity: 0.3,
        zIndex: -101
    });

//     // :: 7.0 COntact - Form Validation\
//     $("#contactForm").validate({
//         submitHandler: function(form) {
//             $.ajax({
//                 type: "POST",
//                 url: "php/contact-form.php",
//                 data: {
//                     "name": $("#contactForm #name").val(),
//                     "email": $("#contactForm #email").val(),
//                     "subject": $("#contactForm #subject").val(),
//                     "message": $("#contactForm #message").val()
//                 },
//                 dataType: "json",
//                 success: function(data) {
//                     if (data.response == "success") {
//                         $("#contactSuccess").fadeIn(300);
//                         $("#contactError").addClass("hidden");

//                         $("#contactForm #name, #contactForm #email, #contactForm #subject, #contactForm #message")
//                             .val("")
//                             .blur()
//                             .closest(".control-group")
//                             .removeClass("success")
//                             .removeClass("error");
//                     } else {
//                         $("#contactError").fadeIn(300);
//                         $("#contactSuccess").addClass("hidden");
//                     }
//                 }
//             });
//         }
//     });
//     
    
});

})(jQuery);