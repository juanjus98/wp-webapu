new WOW().init();
jQuery(document).ready(function($){
    console.log("Hello!");

        // ==========================================================================
    //   Header nubes
    // ==========================================================================
    
    var windowSpy = new $.Espy(window);
    
    (function () {
        var header = $('.topwa')[0];
        var headerClouds = new Motio(header, {
            fps: 30,
            speedX: 60,
            bgWidth: 1024,
            bgHeight: 1024
        });

        // Play only when in the viewport
        windowSpy.add(header, function (entered) {
            headerClouds[entered ? 'play' : 'pause']();
        });
    }());

/**
 * [mainHeader description]
 * @type {[type]}
 */
    var mainHeader = $('.cd-auto-hide-header'), secondaryNavigation = $('.cd-secondary-nav'), belowNavHeroContent = $('.sub-nav-hero'), headerHeight = mainHeader.height();

    //set scrolling variables
    var scrolling = false, previousTop = 0, currentTop = 0, scrollDelta = 10, scrollOffset = 150;

    mainHeader.on('click', '.nav-trigger', function(event){
        // open primary navigation on mobile
        event.preventDefault();
        mainHeader.toggleClass('nav-open');
    });

    $(window).on('scroll', function(){
        if(!scrolling) {
            scrolling = true;
            (!window.requestAnimationFrame) ? setTimeout(autoHideHeader, 250) : requestAnimationFrame(autoHideHeader);
        }
    });

    $(window).on('resize', function(){
        headerHeight = mainHeader.height();
    });  


    //Slider Home
    $("#content-slider").lightSlider({
        item:1,
        auto:true,
        pauseOnHover: true,
        slideMargin:0,
        adaptiveHeight:true,
        speed: 600,
        pause: 4000,
        pager:false,
        loop:true
    });

});