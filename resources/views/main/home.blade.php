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
    <!--SONDAKİKA HABER BANDI-->
    <!--AÇILIP KAPANABİLİR REKLAM ALANI-->

    <div class="container text-center mt-2 position-relative">
        <div class="row">
            <div class="col-12 padding-left">
                <div class="kapat float-left"><a id="kapat" class="kapat__link rounded" href="">X</a></div>
                <!-- <div class="kapat position-absolute float-right"><a id="ac" class="kapat__link" href="">Reklamı Aç</a></div> -->

                @foreach($ads as $ad)
                    @if($ad->type==1 && $ad->category_id==9)
                        <a target="_blank" href="{{$ad->link}}"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                     height="250"
                                                                     data-src="{{asset($ad->ads)}}"></a>
                    @elseif($ad->type==2 && $ad->category_id==9)
                        <div class="w-100">{!!$ad->ad_code!!}</div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!--AÇILIP KAPANABİLİR REKLAM ALANI-->

    <!--SÜRMENŞET BAŞLAR-->
    @include('main.body.widget.surmanset')

    <!--SÜRMENŞET BİTER-->



    <!--SLİDER BAŞLAR-->
    <section class="w-100">
        <div class="container">
            <div class="row">
            @include('main.body.widget.anaslider')
            <!--YAN SLİDER ALANI BAŞLAR-->
                @include('main.body.widget.yanslider')

            </div>
        </div>
    </section>

    <!--DÖVİZ KURLARI BAŞLANGIÇ-->
    @include('main.body.widget.dovizkurlari')
    <!--DÖVİZ KURLARI BİTİŞ-->

    <!--NAMAZ VAKİTLERİ BAŞLAR-->
    @include('main.body.widget.namazvakitleri')
    <!--NAMAZ VAKİTLERİ BİTER-->


    <!--Youutube BAŞLAR-->
    @include('main.body.widget.youtube')
    <!--Youutube BİTER-->

    @include('main.body.widget.ilceler')

    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="reklam-alani mb-3 mt-3 text-center">
        @foreach($ads as $ad)
            @if($ad->type==1 && $ad->category_id==19)
                <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                             height="280"
                                             data-src="{{asset($ad->ads)}}"></a>
            @elseif($ad->type==2 && $ad->category_id==19)
                <div class="w-100">{!!$ad->ad_code!!}</div>
            @endif
        @endforeach
    </div>

    <!--VİDEO GALERİ ÜSTÜ REKLAM Biter-->
    @include('main.body.widget.uclukart')


    <!--SLİDER ALT KARTLAR-->
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="reklam-alani mb-3 mt-3 text-center">
        @foreach($ads as $ad)
            @if($ad->type==1 && $ad->category_id==15)
                <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                             height="280"
                                             data-src="{{asset($ad->ads)}}"></a>
            @elseif($ad->type==2 && $ad->category_id==15)
                <div class="w-100">{!!$ad->ad_code!!}</div>
            @endif
        @endforeach
    </div>
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->

    @include('main.body.widget.videogaleri')

    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->

    <section class="">
        <div class="container mt-3">
            <div class="row ">
            @include('main.body.widget.egitimkultur')


            @include('main.body.widget.authorsList')
            <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->

                <!--PUAN DURUMU-->
                <!--PUAN DURUMU-->
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
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
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->

                <div class="spor mt-2">
                    <div class="card-header card-spor  position-relative">
                        <div class=" card-spor__link text-left pad"><b>Süper Lig</b> Puan Durumu</div>
                        <!-- <a href="#"><div class=" position-absolute ">Tümü</div></a> -->
                    </div>
            @include('main.body.puan-durumu')
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
                <div class="reklam-alani text-center">

                </div>
            </div>
            <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->
        </div>
        </div>
    </section>

    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->
@endsection
