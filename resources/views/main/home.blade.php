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



                <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->
                <div class="col-md-4 padding-left position-relative">
                    <div class="card-header card-yazarlar position-relative ">
                        <div class="card-yazarlar__link text-left pad"><b>Köşe</b> Yazarlarımız</div>
                        <a href="{{route('author')}}">
                            <div class="card-yazarlar__tum position-absolute ">Tümü</div>
                        </a>
                    </div>
@foreach($authors as $author)
                        <a href="">
                    <div class="row  mt-2">

                        <div class="col-md-4 col-4 col-sm-4">
                            <img src="{{asset($author->image)}}" class="rounded card-yazarlar__image" alt="">
                        </div>
                        <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                            <div class="d-inline-block align-middle">
                                <div class="card-yazarlar__isim d-inline-block">{{Str::limit($author->name,17)}}</div>
                                <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt">{{$author->title}}</p></div>
                            </div>
                        </div>

                    </div>
                        </a>
                @endforeach
                    <!--PUAN DURUMU-->
                    <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                    <div class="reklam-alani text-center">
                        <img src="img/336x280.png" alt="">
                    </div>
                    <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->

                    <div class="spor mt-2">
                        <div class="card-header card-spor  position-relative">
                            <div class=" card-spor__link text-left pad"><b>Bal Ligi</b> Puan Durumu</div>
                            <!-- <a href="#"><div class=" position-absolute ">Tümü</div></a> -->
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-spor">
                                <thead class="table-spor__baslik">
                                <tr align="center">
                                    <th scope="col-2">Takım</th>
                                    <th scope="col">G</th>
                                    <th scope="col">B</th>
                                    <th scope="col">M</th>
                                    <th scope="col">Av</th>
                                    <th scope="col">P</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-puan">
                                    <th scope="row">Kırıkkale Büyük Anadolu Spor</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Akşehir Spor</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">1926 Polatlı Belediye Spor</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Çubukspor Futbol Aş.</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Akşehir Spor</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">1926 Polatlı Belediye Spor</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Çubukspor Futbol Aş.</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Çubukspor Futbol Aş.</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Çubukspor Futbol Aş.</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Çubukspor Futbol Aş.</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Çubukspor Futbol Aş.</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                <tr class="table-puan">
                                    <th scope="row">Çubukspor Futbol Aş.</th>
                                    <td align="center">4</td>
                                    <td align="center">3</td>
                                    <td align="center">0</td>
                                    <td align="center">8</td>
                                    <td align="center">14</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="reklam-alani text-center">
                        <img src="img/336x280.png" alt="">
                    </div>
                </div>
                <!--PUAN DURUMU-->

                <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->
            </div>
        </div>
    </section>

    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->
@endsection
