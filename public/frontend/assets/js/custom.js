// $(document).ready(function(){$("#owl__yanslider").owlCarousel({loop:!0,margin:30,nav:!1,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],dots:!0,dotsData:!0,animateOut:!1,animateIn:!1,slideTransition:"",items:1});$(".owl-dot ").on("mouseover",function(){$(this).trigger("to.owl.carousel",[$(this).index()])})});var nt_example2=$("#nt-example2").newsTicker({row_height:60,max_rows:1,speed:300,duration:3e3,stopButton:$("#nt-example2 li i"),startButton:$("#nt-example2 li i"),hasMoved:function(){$("#nt-example2-infos-container").fadeOut(200,function(){$("#nt-example2-infos .infos-hour").text($("#nt-example2 li:first span").text()),$("#nt-example2-infos .infos-text").text($("#nt-example2 li:first").data("infos")),$(this).fadeIn(400)})},pause:function(){$("#nt-example2 li i").removeClass("fa-play").addClass("fa-pause pause")},unpause:function(){$("#nt-example2 li i").removeClass("fa-pause").addClass("fa-play")}});$("#nt-example2-infos").click(function(){nt_example2.newsTicker("pause")},function(){nt_example2.newsTicker("unpause")}),$(document).ready(function(){tns({container:".ilce-slider",items:3,slideBy:"page",nav:!0,navPosition:"bottom",autoplay:!0,controls:!1,autoplayButton:!1,mouseDrag:!0,autoplayTimeout:3e5,autoplayButtonOutput:!1,gutter:10,responsive:{0:{items:1},640:{items:2},700:{gutter:14},900:{items:3}}})}),$(document).ready(function(){tns({container:".ikinci-slider",items:3,slideBy:"page",nav:!0,navPosition:"bottom",autoplay:!0,controls:!1,autoplayButton:!1,mouseDrag:!0,autoplayTimeout:3e5,autoplayButtonOutput:!1,gutter:14,responsive:{0:{items:1},640:{items:2},700:{gutter:14},900:{items:3}}})}),$(document).ready(function(){$(".video-slider").slick({autoplay:!0,dots:!0,autoplaySpeed:5e5,customPaging:function(t,e){$(t.$slides[e]).data();return'<a class="dot">'+e+"</a>"},responsive:[{breakpoint:500,settings:{dots:!1,arrows:!0,infinite:!1,slidesToShow:1,slidesToScroll:1}}]})}),$(document).ready(function(){$("#search").on("click",function(t){$(".form-group").addClass("sb-search-open"),t.stopPropagation()}),$(document).on("click",function(t){!1===$(t.target).is("#search")&&0==$(".form-control").val().length&&$(".form-group").removeClass("sb-search-open")}),$(".form-control-submit").click(function(t){$(".form-control").each(function(){0==$(".form-control").val().length&&(t.preventDefault(),$(this).css("border","2px solid red"))})})}),$("img").on("error",function(){$(this).attr("src","img/resimyok.png")});
$(document).ready(function () {
    var nt_example2 = $('#nt-example2').newsTicker({
        row_height: 60,
        max_rows: 1,
        speed: 300,
        duration: 3000,

        stopButton: $('#nt-example2 li i'),
        startButton: $('#nt-example2 li i'),

        hasMoved: function () {
            $('#nt-example2-infos-container').fadeOut(200, function () {
                $('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
                $('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
                $(this).fadeIn(400);
            });
        },
        pause: function () {
            $('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause pause');
        },
        unpause: function () {
            $('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
        }
    });
    $('#nt-example2-infos').click(function () {
        nt_example2.newsTicker('pause');
    }, function () {
        nt_example2.newsTicker('unpause');
    });
});
$(document).ready(function () {
    $(".video-slider").slick({
        autoplay: !0,
        dots: !0,
        autoplaySpeed: 5e5,
        customPaging: function (t, o) {
            return $(t.$slides[o]).data(), '<a class="dot">' + (o + 1) + "</a>"
        },
        responsive: [{
            breakpoint: 500,
            settings: {dots: !1, arrows: !0, infinite: !1, slidesToShow: 1, slidesToScroll: 1}
        }]
    })
});
$(document).ready(function () {

let owl = $(".anaslider").owlCarousel({

    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    dots: true,
    dotsData: true,
    animateOut: false,
    animateIn: false,
    slideTransition: '',
    lazyLoad: true,
    items: 1,
    responsive:{
        0:{
            items:1,
            nav:true,
            dots:false
        },
        600:{
            items:1,
            nav:true,
            dots:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
});

//             $('.owl-dot ').on('mouseover', function() {
//      owl.trigger('to.owl.carousel', 1); //virgülden sonra gelecek değer slider geçişini düzneler

//  });
$('.owl-dot ').on('mouseover', function () {
    $(this).trigger('to.owl.carousel', [$(this).index(),]); //virgülden sonra gelecek değer slider geçişini düzneler

});
});
$(document).ready(function () {
    $('#search').on("click", (function (e) {
        $(".form-group").addClass("sb-search-open");
        e.stopPropagation()
    }));
    $(document).on("click", function (e) {
        if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
            $(".form-group").removeClass("sb-search-open");
        }
    });
    $(".form-control-submit").click(function (e) {
        $(".form-control").each(function () {
            if ($(".form-control").val().length == 0) {
                e.preventDefault();
                $(this).css('border', '2px solid red');
            }
        })
    })
})
document.addEventListener("DOMContentLoaded", function (event) {

    $(".kategori-slider").slick({
        autoplay: !0,
        dots: !0,
        arrows: !0,
        speed: 75,
        infinite: !0,
        autoplaySpeed: 5e3,
        customPaging: function (e, s) {
            $(e.$slides[s]).data();
            return '<a class="dot" >' + (s + 1) + "</a>"
        },
        responsive: [{
            breakpoint: 500,
            settings: {dots: !0, arrows: !1, speed: 75, infinite: !0, slidesToShow: 1, slidesToScroll: 1}
        }]
    }), jQuery(".slick-dots li").on("mouseover", function () {
        jQuery(this).trigger("click")
    })
});
$(document).ready(function () {
    $(".detay-slider").slick({
        autoplay: true,
        dots: true,
        arrows: false,

        autoplaySpeed: 500000,

        customPaging: function (slider, i) {
            var thumb = $(slider.$slides[i]).data();
            return '<a class="dot" style="bottom: 10%!important;">' + (i + 1) + '</a>';
        },
        responsive: [{
            breakpoint: 500,
            settings: {
                dots: true,
                arrows: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
});
// $(document).ready(function () {
//     $("#owl__yanslider").owlCarousel({
//         loop: !0,
//         margin: 30,
//         nav: !1,
//         navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
//         dots: !0,
//         dotsData: !0,
//         animateOut: !1,
//         animateIn: !1,
//         slideTransition: "",
//         items: 1
//     }), $(".owl-dot ").on("mouseover", function () {
//         $(this).trigger("to.owl.carousel", [$(this).index()])
//     })
// });
var nt_example2 = $("#nt-example2").newsTicker({
    row_height: 60,
    max_rows: 1,
    speed: 300,
    duration: 3e3,
    stopButton: $("#nt-example2 li i"),
    startButton: $("#nt-example2 li i"),
    hasMoved: function () {
        $("#nt-example2-infos-container").fadeOut(200, function () {
            $("#nt-example2-infos .infos-hour").text($("#nt-example2 li:first span").text()), $("#nt-example2-infos .infos-text").text($("#nt-example2 li:first").data("infos")), $(this).fadeIn(400)
        })
    },
    pause: function () {
        $("#nt-example2 li i").removeClass("fa-play").addClass("fa-pause pause")
    },
    unpause: function () {
        $("#nt-example2 li i").removeClass("fa-pause").addClass("fa-play")
    }
});
$("#nt-example2-infos").click(function () {
    nt_example2.newsTicker("pause")
}, function () {
    nt_example2.newsTicker("unpause")
}), $(document).ready(function () {
    tns({
        container: ".BALIŞEYH",
        items: 3,
        slideBy: "page",
        nav: !0,
        lazyload: !0,
        navPosition: "bottom",
        autoplay: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 10,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    tns({
        container: ".KESKİN",
        items: 3,
        slideBy: "page",
        nav: !0,
        navPosition: "bottom",
        autoplay: !0,
        lazyload: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 14,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    tns({
        container: ".BAHŞİLİ",
        items: 3,
        slideBy: "page",
        nav: !0,
        lazyload: !0,
        navPosition: "bottom",
        autoplay: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 14,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    tns({
        container: ".ÇELEBİ",
        items: 3,
        slideBy: "page",
        nav: !0,
        lazyload: !0,
        navPosition: "bottom",
        autoplay: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 14,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    tns({
        container: ".DELİCE",
        items: 3,
        slideBy: "page",
        nav: !0,
        lazyload: !0,
        navPosition: "bottom",
        autoplay: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 14,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    tns({
        container: ".KARAKEÇİLİ",
        items: 3,
        slideBy: "page",
        nav: !0,
        navPosition: "bottom",
        autoplay: !0,
        lazyload: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 14,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    tns({
        container: ".SULAKYURT",
        items: 3,
        slideBy: "page",
        nav: !0,
        navPosition: "bottom",
        autoplay: !0,
        lazyload: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 14,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    tns({
        container: ".YAHŞİHAN",
        items: 3,
        slideBy: "page",
        lazyload: !0,
        nav: !0,
        navPosition: "bottom",
        autoplay: !0,
        controls: !1,
        autoplayButton: !1,
        mouseDrag: !0,
        autoplayTimeout: 3e5,
        autoplayButtonOutput: !1,
        gutter: 14,
        responsive: {0: {items: 1}, 640: {items: 2}, 700: {gutter: 14}, 900: {items: 3}}
    })
}), $(document).ready(function () {
    $(".video-slider").slick({
        autoplay: !0,
        dots: !0,
        autoplaySpeed: 5e5,
        customPaging: function (t, o) {
            return $(t.$slides[o]).data(), '<a class="dot">' + (o + 1) + "</a>"
        },
        responsive: [{
            breakpoint: 500,
            settings: {dots: !1, arrows: !0, infinite: !1, slidesToShow: 1, slidesToScroll: 1}
        }]
    })
}), $(document).ready(function () {
    $("#search").on("click", function (t) {
        $(".form-group").addClass("sb-search-open"), t.stopPropagation()
    }), $(document).on("click", function (t) {
        !1 === $(t.target).is("#search") && 0 == $(".form-control").val().length && $(".form-group").removeClass("sb-search-open")
    }), $(".form-control-submit").click(function (t) {
        $(".form-control").each(function () {
            0 == $(".form-control").val().length && (t.preventDefault(), $(this).css("border", "2px solid red"))
        })
    })
});

