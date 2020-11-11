/*Side menu
===================================*/
$(document).ready(function() {
    "use strict";
    $(".icon-bar").click(function() {
        $(".menu-links").toggleClass("in");
    });
});

/*Side Menu
==============================*/
$(document).ready(function() {
    "use strict";
    $(".side-menu-links .sub-menu > a").click(function(e) {
        $(".side-menu-links ul").slideUp(),
        $(this).next().is(":visible") || $(this).next().slideDown(),
            e.stopPropagation()
    })
});

/* Toggle Icon
==============================*/
$(document).ready(function() {
    "use strict";
    $(".toggle-icon").click(function(){
        $(".side-menu").toggleClass("side-menu-move");
        $(".page-content").toggleClass("page-content-move");
    });
});

/* Animation
==============================*/
$(window).on("load", function() {
    $('.login-register').addClass(' animated fadeInDown');
    $('.side-menu').addClass(' animated fadeInLeft');
    $('.top-header').addClass(' animated fadeInDown');
    $('.content').addClass(' animated fadeInUp');
});
/* DataTable
==============================*/
$(document).ready(function() {
    "use strict";
    $('#datatable').DataTable();
    $('#datatableX').DataTable( {
        "scrollX": true
    });
});

/* Timer Counter
===============================*/
var v_count = '0';
$(document).ready(function() {
    'use strict';
    $('.timer').each(function () {
        var imagePos = $(this).offset().top,
            topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 500 && v_count === '0') {
            $(function ($) {
                function count(options) {
                    v_count = '1';
                    options = $.extend({}, options || {}, $(this).data('countToOptions') || {});
                    $(this).countTo(options);
                }
                // start all the timers
                $('.timer').each(count);
            });
        }
    });
});