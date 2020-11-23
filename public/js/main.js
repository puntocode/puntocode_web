$(document).ready(function() {
    $('.portfolio-item').isotope({
        itemSelector: '.item',
        // percentPosition: true,
        layoutMode: 'fitRows'
    });

    $(".loader-container").fadeOut(1000);

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

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll < 100) {
        $('#navbar').removeClass('background-scroll-down');
    } else {
        $('#navbar').addClass('background-scroll-down');
    }
});

$(".card").hover(
    function() {
        $(this).addClass('shadow-lg').css('cursor', 'pointer');
    },
    function() {
        $(this).removeClass('shadow-lg');
    }
);

$('.count').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});