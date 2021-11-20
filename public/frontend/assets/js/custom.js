// $(document).ready(function(){$("#owl__yanslider").owlCarousel({loop:!0,margin:30,nav:!1,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],dots:!0,dotsData:!0,animateOut:!1,animateIn:!1,slideTransition:"",items:1});$(".owl-dot ").on("mouseover",function(){$(this).trigger("to.owl.carousel",[$(this).index()])})});var nt_example2=$("#nt-example2").newsTicker({row_height:60,max_rows:1,speed:300,duration:3e3,stopButton:$("#nt-example2 li i"),startButton:$("#nt-example2 li i"),hasMoved:function(){$("#nt-example2-infos-container").fadeOut(200,function(){$("#nt-example2-infos .infos-hour").text($("#nt-example2 li:first span").text()),$("#nt-example2-infos .infos-text").text($("#nt-example2 li:first").data("infos")),$(this).fadeIn(400)})},pause:function(){$("#nt-example2 li i").removeClass("fa-play").addClass("fa-pause pause")},unpause:function(){$("#nt-example2 li i").removeClass("fa-pause").addClass("fa-play")}});$("#nt-example2-infos").click(function(){nt_example2.newsTicker("pause")},function(){nt_example2.newsTicker("unpause")}),$(document).ready(function(){tns({container:".ilce-slider",items:3,slideBy:"page",nav:!0,navPosition:"bottom",autoplay:!0,controls:!1,autoplayButton:!1,mouseDrag:!0,autoplayTimeout:3e5,autoplayButtonOutput:!1,gutter:10,responsive:{0:{items:1},640:{items:2},700:{gutter:14},900:{items:3}}})}),$(document).ready(function(){tns({container:".ikinci-slider",items:3,slideBy:"page",nav:!0,navPosition:"bottom",autoplay:!0,controls:!1,autoplayButton:!1,mouseDrag:!0,autoplayTimeout:3e5,autoplayButtonOutput:!1,gutter:14,responsive:{0:{items:1},640:{items:2},700:{gutter:14},900:{items:3}}})}),$(document).ready(function(){$(".video-slider").slick({autoplay:!0,dots:!0,autoplaySpeed:5e5,customPaging:function(t,e){$(t.$slides[e]).data();return'<a class="dot">'+e+"</a>"},responsive:[{breakpoint:500,settings:{dots:!1,arrows:!0,infinite:!1,slidesToShow:1,slidesToScroll:1}}]})}),$(document).ready(function(){$("#search").on("click",function(t){$(".form-group").addClass("sb-search-open"),t.stopPropagation()}),$(document).on("click",function(t){!1===$(t.target).is("#search")&&0==$(".form-control").val().length&&$(".form-group").removeClass("sb-search-open")}),$(".form-control-submit").click(function(t){$(".form-control").each(function(){0==$(".form-control").val().length&&(t.preventDefault(),$(this).css("border","2px solid red"))})})}),$("img").on("error",function(){$(this).attr("src","img/resimyok.png")});
$(document).ready(function () {
    $("#owl__yanslider").owlCarousel({
        loop: !0,
        margin: 30,
        nav: !1,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: !0,
        dotsData: !0,
        animateOut: !1,
        animateIn: !1,
        slideTransition: "",
        items: 1
    }), $(".owl-dot ").on("mouseover", function () {
        $(this).trigger("to.owl.carousel", [$(this).index()])
    })
});
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
        container: ".baliseyh",
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
        container: ".keskin",
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
        container: ".bahsili",
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
        container: ".celebi",
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
        container: ".delice",
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
        container: ".karakecili",
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
        container: ".sulakyurt",
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
        container: ".yahsihan",
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
// $(document).ready(function() {
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
//     });
//     $(".owl-dot ").on("mouseover", function() {
//         $(this).trigger("to.owl.carousel", [$(this).index()])
//     })
// });
// var nt_example2 = $("#nt-example2").newsTicker({
//     row_height: 60,
//     max_rows: 1,
//     speed: 300,
//     duration: 3e3,
//     stopButton: $("#nt-example2 li i"),
//     startButton: $("#nt-example2 li i"),
//     hasMoved: function() {
//         $("#nt-example2-infos-container").fadeOut(200, function() {
//             $("#nt-example2-infos .infos-hour").text($("#nt-example2 li:first span").text()), $("#nt-example2-infos .infos-text").text($("#nt-example2 li:first").data("infos")), $(this).fadeIn(400)
//         })
//     },
//     pause: function() {
//         $("#nt-example2 li i").removeClass("fa-play").addClass("fa-pause pause")
//     },
//     unpause: function() {
//         $("#nt-example2 li i").removeClass("fa-pause").addClass("fa-play")
//     }
// });
// $("#nt-example2-infos").click(function() {
//     nt_example2.newsTicker("pause")
// }, function() {
//     nt_example2.newsTicker("unpause")
// }), $(document).ready(function() {
//     tns({
//         container: ".baliseyh",
//         items: 3,
//         slideBy: "page",
//         nav: !0,
//         lazyload:true,
//         navPosition: "bottom",
//         autoplay: !0,
//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 10,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }), $(document).ready(function() {
//     tns({
//         container: ".keskin",
//         items: 3,
//         slideBy: "page",
//         nav: !0,
//         navPosition: "bottom",
//         autoplay: !0,
//         lazyload:true,
//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 14,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }), $(document).ready(function() {
//     tns({
//         container: ".bahsili",
//         items: 3,
//         slideBy: "page",
//         nav: !0,
//         lazyload:true,
//         navPosition: "bottom",
//         autoplay: !0,
//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 14,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }),
// $(document).ready(function() {
//     tns({
//         container: ".celebi",
//         items: 3,
//         slideBy: "page",
//         nav: !0,
//         lazyload:true,
//         navPosition: "bottom",
//         autoplay: !0,
//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 14,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }),
// $(document).ready(function() {
//     tns({
//         container: ".delice",
//         items: 3,
//         slideBy: "page",
//         nav: !0,
//         lazyload:true,
//         navPosition: "bottom",
//         autoplay: !0,
//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 14,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }),$(document).ready(function() {
//     tns({
//         container: ".karakecili",
//         items: 3,
//         slideBy: "page",
//         nav: !0,
//         navPosition: "bottom",
//         autoplay: !0,
//         lazyload:true,

//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 14,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }),$(document).ready(function() {
//     tns({
//         container: ".sulakyurt",
//         items: 3,
//         slideBy: "page",
//         nav: !0,
//         navPosition: "bottom",
//         autoplay: !0,
//         lazyload:true,

//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 14,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }),
// $(document).ready(function() {
//     tns({
//         container: ".yahsihan",
//         items: 3,
//         slideBy: "page",
//         lazyload:true,
//         nav: !0,
//         navPosition: "bottom",
//         autoplay: !0,
//         controls: !1,
//         autoplayButton: !1,
//         mouseDrag: !0,
//         autoplayTimeout: 3e5,
//         autoplayButtonOutput: !1,
//         gutter: 14,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             640: {
//                 items: 2
//             },
//             700: {
//                 gutter: 14
//             },
//             900: {
//                 items: 3
//             }
//         }
//     })
// }),

// $(document).ready(function() {
//     $(".video-slider").slick({
//         autoplay: !0,
//         dots: !0,
//         autoplaySpeed: 5e5,
//         customPaging: function(t, e) {
//             $(t.$slides[e]).data();
//             return '<a class="dot">' +(e+1)+ "</a>"
//         },
//         responsive: [{
//             breakpoint: 500,
//             settings: {
//                 dots: !1,
//                 arrows: !0,
//                 infinite: !1,
//                 slidesToShow: 1,
//                 slidesToScroll: 1
//             }
//         }]
//     })
// }), $(document).ready(function() {
//     $("#search").on("click", function(t) {
//         $(".form-group").addClass("sb-search-open"), t.stopPropagation()
//     }), $(document).on("click", function(t) {
//         !1 === $(t.target).is("#search") && 0 == $(".form-control").val().length && $(".form-group").removeClass("sb-search-open")
//     }), $(".form-control-submit").click(function(t) {
//         $(".form-control").each(function() {
//             0 == $(".form-control").val().length && (t.preventDefault(), $(this).css("border", "2px solid red"))
//         })
//     })
// });
// , $("img").on("error", function() {
//     $(this).attr("src", "img/resimyok.png")
// });
