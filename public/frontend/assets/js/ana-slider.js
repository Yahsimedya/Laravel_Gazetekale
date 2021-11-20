let owl = $(".anaslider").owlCarousel({
    loop: !0,
    margin: 30,
    nav: !0,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    dots: !0,
    dotsData: !0,
    animateOut: !1,
    animateIn: !1,
    lazyLoad: !0,
    slideTransition: "",
    items: 1,
    responsive: {0: {dots: !0, dotsData: !1, lazyLoad: !0, nav: !0}, 1000: {dots: !0, lazyLoad: !0}}
});
$(".owl-dot ").on("mouseover", function () {
    $(this).trigger("to.owl.carousel", [$(this).index()])
});

//   let owl = $(".anaslider").owlCarousel({

//                loop: true,
//        margin: 30,
//        nav: true,
//        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
//        dots:true,
//        dotsData:true,
// animateOut:false,
// animateIn:false,
// lazyLoad : true,
// slideTransition:'',

//        items:1,
//        responsive: {
//         0: {

//             dots:true,
//             dotsData:false,
//             lazyLoad : true,
//             nav:true


//         },
//         1000: {
//             dots:true,
// lazyLoad : true

//         }
//     }
//                   });
//   $('.owl-dot ').on('mouseover', function() {
//                 $(this).trigger('to.owl.carousel', [$(this).index(),]); //virgülden sonra gelecek değer slider geçişini düzneler

//    });
// let owl=$(".anaslider").owlCarousel({loop:!0,margin:30,nav:!0,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],dots:!0,dotsData:!0,animateOut:!1,animateIn:!1,slideTransition:"",items:1});$(".owl-dot ").on("mouseover",function(){$(this).trigger("to.owl.carousel",[$(this).index()])});
