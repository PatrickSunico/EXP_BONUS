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

var galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    autoplay: 2500,
    autoplayDisableOnInteraction: false,
    spaceBetween: 10,
});
var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true
});
galleryTop.params.control = galleryThumbs;
galleryThumbs.params.control = galleryTop;

var swiper = new Swiper('.review-carousel', {
    pagination: '.swiper-pagination',
    slidesPerView: 3,
    paginationClickable: true,
    spaceBetween: 30
});