$(document).ready(function() {
    var sliderMain = new Swiper ("#slider-main", {
        direction: 'horizontal',
        loop: true
    });

    var videoCarousel = new Swiper ("#video .video-carousel", {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 4,
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next'
    });

    var sliderProduct = new Swiper ("#slider-photos", {
        direction: 'horizontal',
        loop: true,
        pagination: '.swiper-pagination'
    });

    var sliderService = new Swiper ("#slider-service", {
        direction: 'horizontal',
        loop: true,
        nextButton: '.button-next',
        prevButton: '.button-prev'
    });

    var sliderSafety = new Swiper ("#slider-safety", {
        direction: 'horizontal',
        loop: true,
        nextButton: '.button-next',
        prevButton: '.button-prev'
    });

    $("#product-card .right .specifications li .line").each(function(i, elem) {
        $(this).width($(this).parents("li").width() - $(this).siblings(".title").width() - $(this).siblings(".value").width());
    });
});

$(document).resize(function() {
    $("#product-card .right .specifications li .line").each(function(i, elem) {
        $(this).width($(this).parents("li").width() - $(this).siblings(".title").width() - $(this).siblings(".value").width());
    });
});
