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

//===== Prealoder
window.addEventListener ? window.addEventListener("load", preload, false) : window.attachEvent && window.attachEvent("onload", preload);

function preload() {
    $(".loader-container").fadeOut(1000);
}