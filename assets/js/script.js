$(document).ready(function () {
    slickSliders();
    Accordian();
    tabs()
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

    $(".js-slick-slider-2").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        arrows: false,
        Infinity: true,
        autoplaySpeed: 2000,
    });

    $('.js-slick-6').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        Infinity: true,
        arrows: false,
    })
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


function tabs() {
    $('.tab:first').show()
    $('.tabs ul li:first').addClass('active')

    $(".tabs ul li").click(function(){
        index = $(this).index()
        $('.tabs ul li').removeClass('active') 
        $(this).addClass('active') 
        $('.tab').hide()
        $('.tab').eq(index).show()

    })
}