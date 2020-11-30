$(function() {

    "use strict";

    //===== Prealoder
    window.addEventListener ? window.addEventListener("load", preload, false) : window.attachEvent && window.attachEvent("onload", preload);

    function preload() {
        //console.log("cargado");
        $(".loader-container").fadeOut(1000);
    }
    /*$(window).on('load', function(event) {
        $(".loader-container").fadeOut(1000);
    });*/

    //===== Sticky
    $(window).on('scroll', function(event) {
        var scroll = $(window).scrollTop();
        if (scroll < 20) {
            $('#navbar').removeClass('background-scroll-down');
        } else {
            $('#navbar').addClass('background-scroll-down');
        }
    });

    //===== close navbar-collapse when a  clicked
    $(".navbar-nav a").on('click', function() {
        $(".navbar-collapse").removeClass("show");
    });

    //===== Counter Up
    $(window).scroll(testScroll);
    var viewed = false;

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function testScroll() {
        if (isScrolledIntoView($('.contador')) && !viewed) {
            viewed = true;
            $('.customer h5').removeClass('d-none');
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        }
    }

    //===== Isotope Project 1
    $('.portfolio-item').isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });
    $('.portfolio-menu ul li').click(function() {
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.portfolio-item').isotope({
            filter: selector
        });
        return false;
    });

    let wow = new WOW({
        animateClass: 'animate__animated', // animation css class (default is animated)
    });
    wow.init();

});
