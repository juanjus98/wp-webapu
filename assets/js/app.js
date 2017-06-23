/**
 * Variables globales
 */

new WOW().init();
$(function() {
    /**
     * Nobes
     */
    var element = $('.topwa')[0];
    var panning = new Motio(element, {
        fps: 30,
        speedX: -30,
        bgWidth: 1024,
        gHeight: 1024
    });
    panning.play();


    /**
     * Slider Home
     */
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