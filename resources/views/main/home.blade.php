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
    <!--SONDAKİKA HABER BANDI-->
    <!--AÇILIP KAPANABİLİR REKLAM ALANI-->

    <!--AÇILIP KAPANABİLİR REKLAM ALANI-->

    <!--SÜRMENŞET BAŞLAR-->

    <!--SÜRMENŞET BİTER-->



    <!--SLİDER BAŞLAR-->

    <!--DÖVİZ KURLARI BAŞLANGIÇ-->
    <!--DÖVİZ KURLARI BİTİŞ-->

    <!--NAMAZ VAKİTLERİ BAŞLAR-->
    <!--NAMAZ VAKİTLERİ BİTER-->


    <!--Youutube BAŞLAR-->
    <!--Youutube BİTER-->


    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->

    <!--VİDEO GALERİ ÜSTÜ REKLAM Biter-->


    <!--SLİDER ALT KARTLAR-->
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->


    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->


    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->
@endsection
