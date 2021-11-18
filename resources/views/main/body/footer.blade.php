<footer class=" footer bg-dark">
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-5 col-12 position-relative p-3">
                <img src="img/footer-logo.png" class="footer-logo img-fluid " alt="">
            </div>
            <div class="col-md-2 col-12">
                <div class="footer-baslik"><h3>Kurumsal</h3></div>
                <ul class="list-unstyled">
                    <li><a href="" class="footer-link">Künye</a></li>
                    <li><a href=""  class="footer-link">Reklam</a></li>
                    <li><a href="" class="footer-link">İletişim</a></li>
                </ul>
            </div>
            <div class="col-md-5 col-12">
                <div class="footer-baslik"><h3>Hakkımızda </h3></div>
                <p>Kırıkkale'nin En İyi Haber Sitesi %100 yasallık ve %100 tarafsızlık ilkeleriyle yayın hayatına devam ediyor. Gazetekale.com, güncel Kırıkkale haberleri, son dakika Kırıkkale haber ve gelişmeleri, Kırıkkale hava durumu, namaz vakitleri, sinemaları ve Kırıkkalespor haberlerini okuyucuları ile anlık buluşturur.
                    Adres: Ovacık Mahallesi 590. Sokak Gökarık Apartmanı No:5/6 71200 Merkez/Kırıkkale
                    Telefon: Tel: 0.318 333 11 71 Fax: 0.318 333 11 71
                    E-Posta: gazetekale@gmail.com</p>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{asset('frontend/assets/node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/jquery.newsTicker.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $('#search').on("click",(function(e){
                $(".form-group").addClass("sb-search-open");
                e.stopPropagation()
            }));
            $(document).on("click", function(e) {
                if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
                    $(".form-group").removeClass("sb-search-open");
                }
            });
            $(".form-control-submit").click(function(e){
                $(".form-control").each(function(){
                    if($(".form-control").val().length == 0){
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
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            dots:true,
            dotsData:true,
            animateOut:false,
            animateIn:false,
            slideTransition:'',

            items:1

        });

        //             $('.owl-dot ').on('mouseover', function() {
        //      owl.trigger('to.owl.carousel', 1); //virgülden sonra gelecek değer slider geçişini düzneler

        //  });
        $('.owl-dot ').on('mouseover', function() {
            $(this).trigger('to.owl.carousel', [$(this).index(),]); //virgülden sonra gelecek değer slider geçişini düzneler

        });



    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            var yan = $("#owl__yanslider").owlCarousel({

                loop: true,
                margin: 30,
                nav: false,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                dots:true,
                dotsData:true,
                animateOut:false,
                animateIn:false,
                slideTransition:'',

                items:1

            });

            $('.owl-dot ').on('mouseover', function() {
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

            stopButton:  $('#nt-example2 li i'),
            startButton:  $('#nt-example2 li i'),

            hasMoved: function() {
                $('#nt-example2-infos-container').fadeOut(200, function(){
                    $('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
                    $('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
                    $(this).fadeIn(400);
                });
            },
            pause: function() {
                $('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause pause');
            },
            unpause: function() {
                $('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
            }
        });
        $('#nt-example2-infos').click(function() {
            nt_example2.newsTicker('pause');
        }, function() {
            nt_example2.newsTicker('unpause');
        });
    </script>

    <script>
        $(document).ready(function(){

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
        });

    </script>
    <script>
        $(document).ready(function(){

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
        });

    </script>
    <script >


        $(document).ready(function () {
            $(".video-slider").slick({
                autoplay: true,
                dots: true,
                autoplaySpeed:500000,
                customPaging : function(slider, i) {
                    var thumb = $(slider.$slides[i]).data();
                    return '<a class="dot">'+i+'</a>';
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
