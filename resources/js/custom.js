(function($) {

    "use strict";

    // HERO SLIDE
    $('.hero-slide').backstretch([
        "images/slideshow/white-wall-living-room-have-sofa-decoration-3d-rendering.jpg",
        "images/slideshow/interior-wall-mockup-with-sofa-cabinet-living-room-with-empty-white-wall-background-3d-rendering.jpg",
        "images/slideshow/wood-sideboard-living-room-interior-with-copy-space.jpg"
    ], { duration: 2000, fade: 750 });

    // REVIEWS CAROUSEL
    $('.reviews-carousel').owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        nav: true,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })

    // CUSTOM LINK
    $('.smoothscroll').click(function() {
        var el = $(this).attr('href');
        var elWrapped = $(el);
        var header_height = $('.navbar').height();

        scrollToDiv(elWrapped, header_height);
        return false;

        function scrollToDiv(element, navheight) {
            var offset = element.offset();
            var offsetTop = offset.top;
            var totalScroll = offsetTop - navheight;

            $('body,html').animate({
                scrollTop: totalScroll
            }, 300);
        }
    });

})(window.jQuery);


//dashboard JS
document.querySelector(".jsFilter").addEventListener("click", function() {
    document.querySelector(".filter-menu").classList.toggle("active");
});

document.querySelector(".grid").addEventListener("click", function() {
    document.querySelector(".list").classList.remove("active");
    document.querySelector(".grid").classList.add("active");
    document.querySelector(".products-area-wrapper").classList.add("gridView");
    document
        .querySelector(".products-area-wrapper")
        .classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function() {
    document.querySelector(".list").classList.add("active");
    document.querySelector(".grid").classList.remove("active");
    document.querySelector(".products-area-wrapper").classList.remove("gridView");
    document.querySelector(".products-area-wrapper").classList.add("tableView");
});

var modeSwitch = document.querySelector('.mode-switch');
modeSwitch.addEventListener('click', function() {
    document.documentElement.classList.toggle('light');
    modeSwitch.classList.toggle('active');
});