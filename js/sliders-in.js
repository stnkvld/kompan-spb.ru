$(document).ready(function() {
    var sliderRealizedInTop = new Swiper("#slider-realized-in-top", {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10
    });

    var sliderRealizedInBottom = new Swiper("#slider-realized-in-bottom", {
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true,
        simulateTouch: false
    });
    sliderRealizedInTop.params.control = sliderRealizedInBottom;
    sliderRealizedInBottom.params.control = sliderRealizedInTop;
});
