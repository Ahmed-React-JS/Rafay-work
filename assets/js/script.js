$(document).ready(function () {
    slickSliders();
    Accordian();
});

function slickSliders() {
    $(".js-slick-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        Infinity: true,
    });

    $(".js-slick-slider-3").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        Infinity: true,
        arrows: true,
    });
}

function Accordian() {
    // Accordian
    $("body").on("click", ".acc-head", function () {
        var $this = $(this);
        var $parent = $this.parents(".acc-card");
        $this.addClass("active");
        $parent.siblings().find(".acc-head").removeClass("active");
        $this.next().slideDown();
        $parent.siblings().find(".acc-body").slideUp();
    });
}
