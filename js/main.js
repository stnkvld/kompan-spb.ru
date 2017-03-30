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
    
    $("#specifications > .right .positions li .line").each(function(i, elem) {
        $(this).width($(this).parents("li").width() - $(this).siblings(".title").width() - $(this).siblings(".value").width());
    });
});

$(document).resize(function() {
    $("#specifications > .right .positions li .line").each(function(i, elem) {
        $(this).width($(this).parents("li").width() - $(this).siblings(".title").width() - $(this).siblings(".value").width());
    });
});
