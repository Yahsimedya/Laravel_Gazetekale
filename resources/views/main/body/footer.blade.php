@php
    use App\Models\WebsiteSetting;
use App\Models\Theme;
        $websetting=WebsiteSetting::first();
        $themeSetting=Theme::get();
        $fixedPages = DB::table('fixedpage')->where('status','=',1)->limit(5)->latest('id')->get();
@endphp

<footer class=" footer bg-dark">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-5 col-12 position-relative p-3">
                <img src="{{$websetting->logo}}" class="footer-logo img-fluid " alt="">

                <div class="row">
                    <div class="">
                        <div class="row text-center">
                            @if($themeSetting[0]->apps==1)

                                <div class="col-md-3  pr-0 text-center">
                                    <a href="https://play.google.com/store/apps/details?id=com.uygulama.gazetekale"
                                       target="_blank"><img src="{{asset('image/google-play.png')}}"
                                                            data-original="{{asset('image/google-play.png')}}"
                                                            class="footer-logo mt-4 img-fluid lazyload " alt=""></a>
                                </div>
                                <div class="col-md-3  pr-0 text-center">
                                    <a href="https://apps.apple.com/us/app/gazetekale/id1495158560?l=tr&ls=1"
                                       target="_blank"><img src="{{asset('image/app-store.png')}}"
                                                            data-original="{{asset('image/app-store.png')}}"
                                                            class="footer-logo mt-4 img-fluid lazyload " alt=""></a>

                                </div>
                            @endif
                            @if($themeSetting[0]->subscription==1)

                                <div class="col-md-3 text-center">
                                    <img src="{{asset('image/aa.png')}}" width="100"
                                         data-original="{{asset('image/aa.png')}}"
                                         class="footer-logo mt-4 img-fluid lazyload text-center " alt="">
                                </div>
                                <div class="col-md-3 text-center">
                                    <img src="{{asset('image/iha.png')}}" width="100"
                                         data-original="{{asset('image/iha.png')}}"
                                         class="footer-logo mt-4 img-fluid lazyload text-center " alt="">
                                </div>
                                <p class="text-white mt-2">Gazetekale.com, Anadolu Ajansı ve İhlas Haber Ajansı
                                    abonesidir.</p>
                            @endif
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-2 col-6">


                <ul class="list-unstyled">
                    <div class="footer-baslik"><h3>Kurumsal </h3></div>

                    @foreach($fixedPages as $pages)
                        <li><a href="{{route('Open.fixedPage',$pages->id)}}" style="max-height: 20px;color:white!important;"
                               class="footer-link">{{$pages->title}}</a></li>

                    @endforeach</ul>

            </div>
            <div class="col-md-5 col-12">
                <div class="footer-baslik"><h3>Hakkımızda </h3></div>
                <p>
                    {{$websetting->about}}
                    <br>
                    Adres: {{$websetting->adress}}
                    <br>
                    E-Posta: {{$websetting->email}}
                    <br>
                    Telefon: {{$websetting->phone}}
                    <br></p>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center text-light py-3">© 2021 Copyright:
       <img width="85" class="img-fluid lazyload" data-src="{{asset('images/yahsi-logo.png')}}">
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script
        src="{{asset('frontend/assets/node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/jquery.newsTicker.js')}}"></script>
    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    <script>
        new WOW().init();
    </script>
    <script>
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
    </script>
    <script type="text/javascript">
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


    </script>
    <script type="text/javascript">
        $(document).ready(function () {

            var yan = $("#owl__yanslider").owlCarousel({

                loop: true,
                margin: 30,
                nav: false,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: true,
                dotsData: true,
                animateOut: false,
                animateIn: false,
                slideTransition: '',
                lazyLoad: true,
                items: 1

            });

            $('.owl-dot ').on('mouseover', function () {
                $(this).trigger('to.owl.carousel', [$(this).index(),]); //virgülden sonra gelecek değer slider geçişini düzneler

            });
        });


    </script>
    <script>
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
    </script>

    <script>
        $(document).ready(function () {
            if ( $('.ilce-slider').length > 0 ) {

            var slider = tns({
                container: '.ilce-slider',
                items: 3,
                slideBy: 'page',
                nav: true,
                navPosition: "bottom",
                autoplay: true,
                controls: false,
                // controlsPosition: "bottom",
                // controlsText: ["&#60;	", "&#62;"],
                autoplayButton: false,
                mouseDrag: true,
                autoplayTimeout: 300000,
                autoplayButtonOutput: false,
                "gutter": 10,
                responsive: {
                    0: {

                        items: 1
                    },
                    640: {

                        items: 2
                    },
                    700: {
                        gutter: 14
                    },
                    900: {
                        items: 3
                    }
                }

            });
        }
        });

    </script>
    <script>
        $(document).ready(function () {
            if ( $('.ilce-slider').length > 0 ) {

                var slider = tns({
                    container: '.ikinci-slider',
                    items: 3,
                    slideBy: 'page',
                    nav: true,
                    navPosition: "bottom",
                    autoplay: true,
                    controls: false,
                    // controlsPosition: "bottom",
                    // controlsText: ["&#60;	", "&#62;"],
                    autoplayButton: false,
                    mouseDrag: true,
                    autoplayTimeout: 300000,
                    autoplayButtonOutput: false,
                    "gutter": 14,
                    responsive: {
                        0: {

                            items: 1
                        },
                        640: {

                            items: 2
                        },
                        700: {
                            gutter: 14
                        },
                        900: {
                            items: 3
                        }
                    }

                });
            }
        });

    </script>
    <script>


        $(document).ready(function () {
            $(".video-slider").not('.slick-initialized').slick({
                autoplay: true,
                dots: true,
                autoplaySpeed: 500000,
                customPaging: function (slider, i) {
                    var thumb = $(slider.$slides[i]).data();
                    return '<a class="dot">' + i + '</a>';
                },
                responsive: [{
                    breakpoint: 500,
                    settings: {
                        dots: false,
                        arrows: true,
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });


//   $('.video-slider').slick({
//       centerMode: true,
//       centerPadding: '60px',
//       slidesToShow: 1,
//       dots:true,
//       prevArrow: $('.prev'),
//       nextArrow: $('.next'),

// });
        });

    </script>

</footer>
