@extends('main.home_master')
@section('title',$seoset->meta_title)
@section('meta_keywords',$seoset->meta_keyword)
@section('meta_description',htmlspecialchars_decode(stripslashes($seoset->meta_description),ENT_QUOTES))
@section('google_analytics',$seoset->google_analytics)
@section('google_verification',$seoset->google_verification)
@section('adsense_code',$seoset->adsense_code)

@section('content')
    @php
        $socials = DB::table('socials')->get();
  $vakitler = Cache()->remember("home-vakitler", 60*60*24, function () {
            return Session::get('vakitler');
        });
  $kurlar=Session::get('kurlar');
$veri=Session::get('havadurumu');
$icon=Session::get('icon');
$gelenil=Session::get('gelenil');

    @endphp

    <style>
        .owl-theme .owl-dots .owl-dot.active span {
            background-color: {{$themeSetting->siteColorTheme}}  !important;
        }

        .slider_span {
            background-color: {{$themeSetting->siteColorTheme}}  !important;
        }

        .owl-prev, .anaslider-prev {
            color: {{$themeSetting->siteColorTheme}}  !important;
        }

        .owl-next, .anaslider-prev {
            color: {{$themeSetting->siteColorTheme}}  !important;
        }

        .ilceler__baslik {
            color: {{$themeSetting->siteColorTheme}}  !important;

        }

        .ilceler__nav-link.active {
            color: {{$themeSetting->siteColorTheme}}  !important;
            border: 1px solid {{$themeSetting->siteColorTheme}}  !important;
        }

        .ilceler__nav-link:hover {
            color: {{$themeSetting->siteColorTheme}}  !important;
        }

        .tns-nav-active {
            background-color: {{$themeSetting->siteColorTheme}}  !important;
        }

        .pl-1:hover {
            color: {{$themeSetting->siteColorTheme}}  !important;
        }
        .kartlar__header::before{
            border-left:2px solid {{$themeSetting->siteColorTheme}}  !important;
        }
        .slick-active, .slick li{
            background-image:radial-gradient(farthest-side at 102% 2%, {{$themeSetting->siteColorTheme}}, {{$themeSetting->siteColorTheme}});
        }
        .video li{
            border:1px solid {{$themeSetting->siteColorTheme}} ;
        }
        .slick-prev:before, .slick-next:before{
            color: {{$themeSetting->siteColorTheme}}  !important;

        }


    </style>
    <script>
        $(document).ready(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#havadurum select').on('change', function () {
                e = $('#ilsec').val();
// var str =$(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "{{  route('il.home') }}",
                    headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                    data: {ilsec: $('#ilsec').val()},
                    success: function (donen) {
                        veri = donen;
                        console.log(veri);
                        $('#ilsec').attr("disabled", false);
                        $('#cek').html(veri);
                    },
                })
            });

        });
    </script>
    @include('main.body.widget.headline')
    <!--SONDAK??KA HABER BANDI-->
    <!--A??ILIP KAPANAB??L??R REKLAM ALANI-->

    <div class="container text-center mt-2 position-relative">
        <div class="row">
            <div class="col-12 padding-left">
                <div class="kapat float-left"><a id="kapat" class="kapat__link rounded" href="">X</a></div>
                <!-- <div class="kapat position-absolute float-right"><a id="ac" class="kapat__link" href="">Reklam?? A??</a></div> -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($ads as $ad)
                            @if($ad->type==1 && $ad->category_id==9 && $ad->status==1)
                                <div class="swiper-slide"><a target="_blank" href="{{$ad->link}}"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                             height="250"
                                                                             data-src="{{asset($ad->ads)}}"></a></div>
                                <div class="swiper-slide"><a target="_blank" href="{{$ad->link}}"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                                                       height="250"
                                                                                                       data-src="{{asset($ad->ads1)}}"></a></div>
                                <div class="swiper-slide"><a target="_blank" href="{{$ad->link}}"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                                                       height="250"
                                                                                                       data-src="{{asset($ad->ads2)}}"></a></div>
                            @elseif($ad->type==2 && $ad->category_id==9)
                                <div class="w-100">{!!$ad->ad_code!!}</div>
                            @endif
                        @endforeach

                    </div>
                </div>

                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper(".mySwiper", {
                        loop: true,
                        autoplay: {
                            delay: 4000,
                            disableOnInteraction: false
                        },
                    });
                </script>

            </div>
        </div>
    </div>
    <!--A??ILIP KAPANAB??L??R REKLAM ALANI-->

    <!--S??RMEN??ET BA??LAR-->
    @include('main.body.widget.surmanset')

    <!--S??RMEN??ET B??TER-->



    <!--SL??DER BA??LAR-->
    <section class="w-100">
        <div class="container">
            <div class="row">
            @include('main.body.widget.anaslider')
            <!--YAN SL??DER ALANI BA??LAR-->
                @include('main.body.widget.yanslider')

            </div>
        </div>
    </section>

    <!--D??V??Z KURLARI BA??LANGI??-->
    @include('main.body.widget.dovizkurlari')
    <!--D??V??Z KURLARI B??T????-->

    <!--NAMAZ VAK??TLER?? BA??LAR-->
    @include('main.body.widget.namazvakitleri')
    <!--NAMAZ VAK??TLER?? B??TER-->


    <!--Youutube BA??LAR-->
    @include('main.body.widget.youtube')
    <!--Youutube B??TER-->

    @include('main.body.widget.ilceler')

    <!--V??DEO GALER?? ??ST?? REKLAM ALANI-->
    <div class="container">
        <div class="swiper mySwiper3">
            <div class="swiper-wrapper">
                @foreach($ads as $ad)
                    @if($ad->type==1 && $ad->category_id==19 && $ad->status==1)
                        <div class="swiper-slide"><a target="_blank" href="{{$ad->link}}"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                                               height="250"
                                                                                               data-src="{{asset($ad->ads)}}"></a></div>
                        <div class="swiper-slide"><a target="_blank" href="{{$ad->link}}"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                                               height="250"
                                                                                               data-src="{{asset($ad->ads1)}}"></a></div>
                        <div class="swiper-slide"><a target="_blank" href="{{$ad->link}}"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                                               height="250"
                                                                                               data-src="{{asset($ad->ads2)}}"></a></div>
                    @elseif($ad->type==2 && $ad->category_id==19)
                        <div class="w-100">{!!$ad->ad_code!!}</div>
                    @endif
                @endforeach

            </div>
        </div>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper3", {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                },
            });
        </script>
    </div>

    <!--V??DEO GALER?? ??ST?? REKLAM Biter-->
    @include('main.body.widget.uclukart')


    <!--SL??DER ALT KARTLAR-->
    <!--V??DEO GALER?? ??ST?? REKLAM ALANI-->

    <!--V??DEO GALER?? ??ST?? REKLAM ALANI-->

    @include('main.body.widget.videogaleri')

    <!--KARI??IK HABERLER VE SPOR Ve YAZARLAR-->

    <section class="">
        <div class="container mt-3">
            <div class="row ">
            @include('main.body.widget.egitimkultur')


            @include('main.body.widget.authorsList')
            <!--SA?? TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->

                <!--PUAN DURUMU-->
                <!--PUAN DURUMU-->
                <!--REKLAM ALANI BAL L??G?? ??ST??-->
                <div class="reklam-alani text-center">
                    @foreach($ads as $ad)
                        @if($ad->type==1 && $ad->category_id==18)
                            <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                         height="280"
                                                         data-src="{{asset($ad->ads)}}"></a>
                        @elseif($ad->type==2 && $ad->category_id==18)
                            <div class="w-100">{!!$ad->ad_code!!}</div>
                        @endif
                    @endforeach
                </div>
                <!--REKLAM ALANI BAL L??G?? ??ST??-->

                <div class="spor mt-2">
                    <div class="card-header card-spor  position-relative">
                        <div class=" card-spor__link text-left pad"><b>S??per Lig</b> Puan Durumu</div>
                        <!-- <a href="#"><div class=" position-absolute ">T??m??</div></a> -->
                    </div>
            @include('main.body.puan-durumu')

                </div>
                <div class="reklam-alani text-center mt-4">
                    @foreach($ads as $ad)
                        @if($ad->type==1 && $ad->category_id==22)
                            <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                         height="280"
                                                         data-src="{{asset($ad->ads)}}"></a>
                        @elseif($ad->type==2 && $ad->category_id==22)
                            <div class="w-100">{!!$ad->ad_code!!}</div>
                        @endif
                    @endforeach
                </div>
            </div>
            <!--SA?? TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->
        </div>
    </section>

    <!--KARI??IK HABERLER VE SPOR Ve YAZARLAR-->
@endsection
