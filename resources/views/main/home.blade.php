@extends('main.home_master')
@section('title',$seoset->meta_title)
@section('meta_keywords',$seoset->meta_keyword)
@section('meta_description',htmlspecialchars_decode(stripslashes($seoset->meta_description),ENT_QUOTES))
@section('google_analytics',$seoset->google_analytics)
@section('google_verification',$seoset->google_verification)
@section('content')
    @php
        $socials = DB::table('socials')->get();

    $themeSetting=DB::table('themes')->get();
$themeSetting=DB::table('themes')->get();
$vakitler=Session::get('vakitler');
$kurlar=Session::get('kurlar');
$veri=Session::get('havadurumu');
$icon=Session::get('icon');
$gelenil=Session::get('gelenil');

    @endphp


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

                <img src="img/ads.jpg" class="reklam card-img-top" alt="">
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
        <img src="img/970x90.jpg" alt="Reklam">
    </div>

    <!--VİDEO GALERİ ÜSTÜ REKLAM Biter-->
    @include('main.body.widget.uclukart')


    <!--SLİDER ALT KARTLAR-->
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="reklam-alani mb-3 mt-3 text-center">
        <img src="img/970x90.jpg" alt="Reklam">
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
                        <img src="img/336x280.png" alt="Reklam">
                    </div>
                    <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->

                    <div class="spor mt-2">
                        <div class="card-header card-spor  position-relative">
                            <div class=" card-spor__link text-left pad"><b>Süper Lig</b> Puan Durumu</div>
                            <!-- <a href="#"><div class=" position-absolute ">Tümü</div></a> -->
                        </div>
                        @include('main.body.puan-durumu')
                    </div>
                    <div class="reklam-alani text-center">
                        <img src="img/336x280.png" alt="Reklam">
                    </div>
            </div>
                <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->
            </div>
        </div>
    </section>

    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->
@endsection
