$(document).ready(function() {
    var sliderMain = new Swiper("#slider-main", {
        direction: 'horizontal',
        loop: true
    });

    var videoCarousel = new Swiper("#video .video-carousel", {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 4,
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next'
    });

    var sliderProduct = new Swiper("#slider-photos", {
        direction: 'horizontal',
        loop: true,
        pagination: '.swiper-pagination'
    });

    var sliderService = new Swiper("#slider-service", {
        direction: 'horizontal',
        loop: true,
        nextButton: '.button-next',
        prevButton: '.button-prev',
        effect: "fade",
        fade: { crossFade: true }
    });

    var sliderSafety = new Swiper("#slider-safety", {
        direction: 'horizontal',
        loop: true,
        nextButton: '.button-next',
        prevButton: '.button-prev',
        effect: "fade",
        fade: { crossFade: true }
    });

    var sliderRealized = new Swiper("#slider-realized", {
        direction: 'horizontal',
        loop: true,
        nextButton: '.button-next',
        prevButton: '.button-prev',
        simulateTouch: false
    });

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

    var sliderDesign = new Swiper("#slider-design", {
        direction: 'horizontal',
        loop: true,
        nextButton: '.button-next',
        prevButton: '.button-prev',
        effect: "fade",
        fade: { crossFade: true }
    });

    $("#product-card .right .specifications li .line").each(function(i, elem) {
        $(this).width($(this).parents("li").width() - $(this).siblings(".title").width() - $(this).siblings(".value").width());
    });

    $("#catalog .collapsed .title").on("click", function() {
        if($(this).closest("div").hasClass("active")) {
            $(this).closest("div").removeClass("active");
        } else {
            $(this).closest("div").addClass("active");
        }
    });

    $(".ios-switch + div").on("click", function() {
        $(this).siblings(".ios-switch").click();
    });

    $(".search input").on("focus", function() {
        $(".search .result").css("display", "flex");
    });

    $(".search > input").on("focusout", function() {
        $(".search .result").css("display", "none");
    });

    $(".tabs > div").on("click", function() {
        $(this).siblings("div").removeClass("active");
        $(this).addClass("active");
        if($(this).hasClass("realized")) {
            $(".content.design").animate({opacity: 0}, 300);
            setTimeout(function() {
                $(".content.design").css("display", "none");
                $(".content.realized").css("display", "block");
                $(".content.realized").animate({opacity: 1}, 300);
            }, 400);
        } else {
            $(".content.realized").animate({opacity: 0}, 300);
            setTimeout(function() {
                $(".content.realized").css("display", "none");
                $(".content.design").css("display", "block");
                $(".content.design").animate({opacity: 1}, 300);
            }, 400);
        }
    });

    $("a.clear-filter").on("click", function() {
        $(this).siblings(".checkbox-wrapper").find("input[type='checkbox']").prop("checked", false);
    });

    // $(".age a.clear-filter").on("click", function() {
    //     $(".age .wrapper-1 input").val("0");
    //     $(".age .wrapper-2 input").val("16+");
    //     $(".multirange").val("4,12");
    // });
});

$(document).resize(function() {
    $("#product-card .right .specifications li .line").each(function(i, elem) {
        $(this).width($(this).parents("li").width() - $(this).siblings(".title").width() - $(this).siblings(".value").width());
    });
});
