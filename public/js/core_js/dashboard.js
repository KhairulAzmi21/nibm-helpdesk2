"use strict";

$(document).ready(function () {

    $('#count-box').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 2
    });
    $('#count-box2').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 5
    });
    $('#count-box3').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 7
    });
    $('#count-box4').CountUpCircle({
        duration: 2500,
        opacity_anim: true,
        step_divider: 10
    });


    /*
     Background slideshow
     */
    $('.index-header').backstretch([
        "img/4.jpg", "img/3.jpg", "img/2.jpg"
    ], {duration: 3000, fade: 750});


   





});