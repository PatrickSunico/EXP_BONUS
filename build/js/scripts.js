// javascript here
$('document').ready(function() {
    $('.toggleNav').on('click', function(e) {
        $('.ul-container').toggleClass('open');
        e.preventDefault();
    });
});

$(window).on('resize', function() {
    // remove class on resize
    $('ul').removeClass('open');
});

// Main Carousel
var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    pagination: '.swiper-pagination',
    paginationType: 'progress',

    // autoplay: 2500,
    // autoplayDisableOnInteraction: false,
    spaceBetween: 0,
    effect: 'fade'

});
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 0,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true
});
galleryTop.params.control = galleryThumbs;
galleryThumbs.params.control = galleryTop;

// Featured Games Carousel
var swiper = new Swiper('.feature_carousel', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 5,
    spaceBetween: 30,
    // autoplay: 2500,
    // autoplayDisableOnInteraction: false,
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        }
    }
});

// Upcoming Releases 
var swiper = new Swiper('.releases_carousel', {
    pagination: '.swiper-pagination',
    slidesPerView: 4,
    slidesPerColumn: 2,
    paginationClickable: true,
    spaceBetween: 30,
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        }
    }
});