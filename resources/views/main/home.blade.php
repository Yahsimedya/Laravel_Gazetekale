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
    @if (!empty($sondakika[0]->headline))

        <div id="nt-example2-container position-relative" class="container mt-1 padding-left">
            <ul id="nt-example2" class="p-0" style="height: 60px; overflow: hidden;">
                <div class="float-left h-100 d-inline" style="background-color: #f9df26;">
                    <span class="p-2 align-middle" style="color:#262e62; line-height: 60px; font-weight: 500;">Son Dakika</span>
                </div>
                @foreach ($sondakika as $row)
                    @if(($row->headline==1) )
                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                            <li>
                                <i class="fa fa-fw state fa-play"></i>
                                <span class="hour">13:00</span> {{ $row->title_tr }}
                            </li>
                        </a>

                    @endif
                @endforeach
            </ul>
        </div>

    @endif
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
    <div class="container mt-2 ">
        <div class="row">
            @foreach($surmanset as $row)
                <div class="col-lg-3 col-md-6 col-sm-12 d-none d-md-block padding-left kartlar">

                    <div class="card shadow  d-inline-block  ">
                        <img class="card-img-top" src="{{asset($row->image)}}" alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt">{{$row->title_tr}}</b></p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <!--SÜRMENŞET BİTER-->



    <!--SLİDER BAŞLAR-->
    <section class="w-100">
        <div class="container">
            <div class="row">


                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-8 d-none d-md-block padding-left">
                    <div class="owl-carousel owl-theme  shadow anaslider" id="">
                        @php
                            $k=1;
                        @endphp
                        @for($i=0;$i<=18;$i++)
                            <div class="item owl-anaitem " data-dot="<span>{{$k}}</span>">

                                <a href="{{URL::to('/haber-'.str_slug($home[$i]->title_tr).'-'.$home[$i]->id)}}"><img
                                        class="img-fluid "
                                        src="{{asset($home[$i]->image)}}"
                                        alt=""></a>
                                @php
                                    $k++;
                                @endphp
                            </div>
                        @endfor


                    </div>
                    <div class="item d-inline">
                        <span class="slider_span"><a href="#" class="mx-auto text-center align-middle text-white"><i
                                    class="fa fa-th-large"></i></a></span>

                    </div>

                </div>

                <!--YAN SLİDER ALANI BAŞLAR-->
@include('main.body.yanslider')

            </div>
    </section>
    <!--DÖVİZ KURLARI BAŞLANGIÇ-->
    <section class="">
        <div class="container padding-left mt-1 ">
            <div
                class="row kurlar text-center font-weight-bold  text-secondary mx-auto bg-gradient-light light border-top border-bottom p-0 position-relative">
                <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                    <div class="mt-2">
                        <i class="fa fa-dollar-sign text-danger"></i><span class="text-danger ml-1">Dolar</span>
                        <div
                            class="kurfiyat">{{ number_format($kurlar['DOLAR']['satis'],3) }}   @if(number_format($kurlar['DOLAR']['oranyonu'],2)>0)
                                <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                            @else
                                <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                            @endif</div>
                    </div>
                </div>
                <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                    <div class="mt-2">
                        <i class="fas fa-euro-sign text-danger"></i><span class="text-danger ml-1">Euro</span>
                        <div
                            class="kurfiyat">{{number_format($kurlar['EURO']['satis'],3) }}  @if(number_format($kurlar['EURO']['oranyonu'],2)>0)
                                <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                            @else
                                <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                            @endif</div>
                    </div>
                </div>
                <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                    <div class="mt-2">
                        <i class="fas fa-coins text-danger"></i><span class="text-danger ml-1">Ç.Altın</span>
                        <div
                            class="ku
                            rfiyat">{{ number_format((float)$kurlar['ceyrekaltin']['satis'],3) }}  @if(isset($kurlar['ceyrekaltin']['oranyonu'])>0)
                                <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                            @else
                                <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                            @endif</div>
                    </div>
                </div>
                <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                    <div class="mt-2">
                        <i class="fas fa-chart-line text-danger"></i><span class="text-danger ml-1">Altın</span>
                        <div
                            class="kurfiyat">{{ number_format($kurlar['ALTIN']['satis'],3) }}@if(isset($kurlar['ALTIN']['oranyonu'])>0)
                                <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                            @else
                                <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                            @endif</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-sm-6 col-6 border-top p-2">Sosyal Medyadan Bizi Takip Edin!</div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 position-relative bg-light border-top">
                    <div class="row position-absolute kurlar__sosyal mx-auto ">

                        @foreach($socials as $social)
                        <div class="col-3 col-md-3 col-lg-3 border-right border-left p-0"><a href="{{$social->facebook}}"
                                                                                             class="kurlar__sosyal-link "><i
                                    class="fa fa-facebook kurlar__sosyal-link-i-1"></i></a></div>
                        <div class="col-3 col-md-3 col-lg-3 border-right p-0"><a href="{{$social->twitter}}" class="kurlar__sosyal-link "><i
                                    class="fa fa-twitter kurlar__sosyal-link-i-2"></i></a></div>
                        <div class="col-3 col-md-3 col-lg-3 border-right p-0"><a href="{{$social->instagram}}" class="kurlar__sosyal-link "><i
                                    class="fa fa-instagram kurlar__sosyal-link-i-3"></i> </a>
                        </div>
                        <div class="col-3 col-md-3 col-lg-3 border-right p-0"><a href="{{$social->youtube}}" class="kurlar__sosyal-link "><i
                                    class="fa fa-youtube kurlar__sosyal-link-i-4"></i> </a></div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--DÖVİZ KURLARI BAŞLANGIÇ-->
    <!--NAMAZ VAKİTLERİ BAŞLAR-->
    <section class="">
        <div class="container padding-left">
            <div class="namaz rounded shadow ">

                <div class="row padding-left mb-2 mt-2">
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold"><span
                            class="text-light mb-0  namaz__kolon-text">
      <select class="form-control form-control-sm namaz__select mb-1 ml-4">
      <option>Kırıkkale</option>
      <option>Ankara</option>
      <option>Çankırı</option>
      <option>Çorum</option>

    </select></span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/imsak.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İmsak 05:45</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/ogle.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">öğle 12:45</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/ikindi.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">İkindi 15:45</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/aksam.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Akşam 16:45</span></div>
                    <div
                        class="col-lg-2 col-md-2 col-sm-2 col-6  padding-left mt-1 namaz__kolon text-center font-weight-bold">
                        <img src="img/yatsi.png" width="30" class="img-fluid mr-2" alt=""><span
                            class="text-light mb-0  namaz__kolon-text">Yatsı 20:00</span></div>
                    <!-- <div class="col-md-2"><i class="fas fa-mosque p-2 text-light "></i><span class="text-light mb-0  namaz__kolon-text">Namaz Vakitleri <br/>5 Ekim 2019</span></div>
                    <div class="col-md-2">asdasd</div>
                    <div class="col-md-2">asasd</div>
                    <div class="col-md-2">asd</div>
                    <div class="col-md-2">asd</div>
                    <div class="col-md-2">asd</div> -->
                </div>
            </div>
        </div>
    </section>
    <!--NAMAZ VAKİTLERİ BAŞLAR-->
    <!--SLİDER ALT KARTLAR-->
    <section class="ilceler container-fluid  bg-light mt-2 mb-2 pb-4">
        <div class="container padding-left pt-2">
            <ul class="nav nav-pills ilceler__nav mb-3" id="pills-tab" role="tablist">
                <div class="card-header float-left ilceler__baslik">İLÇE HABERLERİ</div>


                <li class="nav-item ilceler__nav-item ">
                    <a class="ilceler__nav-link active " id="pills-profile-tab  " data-toggle="pill" href="#baliseyh"
                       role="tab" aria-controls="pills-profile" aria-selected="false">Balışeyh</a>
                </li>
                <li class="nav-item ilceler__nav-item ">
                    <a class="ilceler__nav-link" id="pills-contact-tab" data-toggle="pill" href="#keskin" role="tab"
                       aria-controls="pills-contact" aria-selected="false">Keskin</a>
                </li>
                <li class="nav-item ilceler__nav-item ">
                    <a class="ilceler__nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                       role="tab" aria-controls="pills-contact" aria-selected="false">Bahşılı</a>
                </li>
                <li class="nav-item ilceler__nav-item">
                    <a class="ilceler__nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                       role="tab" aria-controls="pills-contact" aria-selected="false">Delice</a>
                </li>
                <li class="nav-item ilceler__nav-item">
                    <a class="ilceler__nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                       role="tab" aria-controls="pills-contact" aria-selected="false">Yahşihan</a>
                </li>
                <li class="nav-item ilceler__nav-item">
                    <a class="ilceler__nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                       role="tab" aria-controls="pills-contact" aria-selected="false">Çelebi</a>
                </li>
                <li class="nav-item ilceler__nav-item">
                    <a class="ilceler__nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                       role="tab" aria-controls="pills-contact" aria-selected="false">Karakeçili</a>
                </li>
                <li class="nav-item ilceler__nav-item">
                    <a class="ilceler__nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                       role="tab" aria-controls="pills-contact" aria-selected="false">Sulakyurt</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="baliseyh" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="ilce-slider">
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="keskin" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="ikinci-slider">
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
            </div>

        </div>
    </section>
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="reklam-alani mb-3 mt-3 text-center">
        <img src="img/970x90.jpg" alt="">
    </div>
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="container mt-3 kartlar">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 padding-left ">
                <div class="card font-weight-light shadow">
                    <h5 class="card-header kartlar__header bg-white">Gündem</h5>

                    <div class="position-relative">
                        <img class="card-img-top position-relative rounded-0" src="img/asure.png" alt="Card image cap">
                        <div class="kartlar__effect position-absolute"></div>
                    </div>
                    <div class="card-body kartlar__body position-absolute">
                        <h5 class="card-title">Card title</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/asure.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Yahşihan Aşure Şenliği Şenliği </p>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/trafik-kazasi.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Kirikkale'de Trafik Kazasi</p>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/asure.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Öğretmenler, okulun 300 metrelik duvarı
                                        Boyadı metrelik duvarı Boyadı</p>
                                </div>
                            </li>
                        </a>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 padding-left">
                <div class="card font-weight-bold shadow">
                    <h5 class="card-header kartlar__header bg-white">Siyaset</h5>

                    <div class="position-relative">
                        <img class="card-img-top position-relative rounded-0" src="img/asure.png" alt="Card image cap">
                        <div class="kartlar__effect position-absolute"></div>
                    </div>
                    <div class="card-body kartlar__body position-absolute">
                        <h5 class="card-title">Card title</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/asure.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Yahşihan Aşure Şenliği Şenliği </p>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/trafik-kazasi.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Kirikkale'de Trafik Kazasi</p>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/asure.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Öğretmenler, okulun 300 metrelik duvarı
                                        Boyadı metrelik duvarı Boyadı</p>
                                </div>
                            </li>
                        </a>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 padding-left">
                <div class="card font-weight-bold shadow">
                    <h5 class="card-header kartlar__header bg-white">Ekonomi</h5>

                    <div class="position-relative">
                        <img class="card-img-top position-relative rounded-0" src="img/asure.png" alt="Card image cap">
                        <div class="kartlar__effect position-absolute"></div>
                    </div>
                    <div class="card-body kartlar__body position-absolute">
                        <h5 class="card-title">Card title</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/asure.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Yahşihan Aşure Şenliği Şenliği </p>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/trafik-kazasi.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Kirikkale'de Trafik Kazasi</p>
                                </div>
                            </li>
                        </a>
                        <a href="#" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="img/asure.png" width="150" class="float-left p-2" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">Öğretmenler, okulun 300 metrelik duvarı
                                        Boyadı metrelik duvarı Boyadı</p>
                                </div>
                            </li>
                        </a>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--SLİDER ALT KARTLAR-->
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="reklam-alani mb-3 mt-3 text-center">
        <img src="img/970x90.jpg" alt="">
    </div>
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->

    <section class="video mt-3 pt-3 pb-3 bg-dark">

        <div class="container padding-left">
            <div class="card-header card-video position-relative">
                <div class="card-kutu__link"><i class="fa fa-video mr-2 "></i>Video Galeri</div>
                <a href="#">
                    <div class="card-kutu__tum position-absolute ">Tümü</div>
                </a>
            </div>

            <div class="row  padding-left">

                <div class="col-md-6 mt-2 padding-left">
                    <div class="video-slider">
                        <div class="position-relative">
                            <div class="video-text position-absolute">asdasd</div>
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt="">
                        </div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>
                        <div class="position-relative">
                            <div class="kartlar__effect position-absolute">
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                            </div>
                            <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>

                    </div>


                    <!-- <div class="video-slider">
                <div class="video-slider__item"><span>1</span><img src="img/arnavutkoy.jpg" class="video-image"  alt=""></div>
                <div class="video-slider__item"><span>2</span><img src="img/arnavutkoy.jpg" class="video-image"  alt=""></div>
                </div> -->
                </div>
                <div class="col-md-6 ">
                    <div class="row ">
                        <div class="col-md-6 mt-2 padding-left">
                            <div class="position-relative">
                                <div class="video-text__kucuk position-absolute">asdasd</div>
                                <div class="kartlar__effect position-absolute">
                                    <div class="video-overlay__kucuk"><i class="fa fa-play-circle"></i></div>
                                </div>
                                <img src="img/cansu.jpg" class="video-image" alt=""></div>

                        </div>
                        <div class="col-md-6 mt-2 padding-left">
                            <div class="position-relative">
                                <div class="video-text__kucuk position-absolute">asdasd</div>
                                <div class="kartlar__effect position-absolute">
                                    <div class="video-overlay__kucuk"><i class="fa fa-play-circle"></i></div>
                                </div>
                                <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>

                        </div>
                        <div class="col-md-6 mt-2 padding-left">
                            <div class="position-relative">
                                <div class="video-text__kucuk position-absolute">asdasd</div>
                                <div class="kartlar__effect position-absolute">
                                    <div class="video-overlay__kucuk"><i class="fa fa-play-circle"></i></div>
                                </div>
                                <img src="img/cansu.jpg" class="video-image" alt=""></div>

                        </div>
                        <div class="col-md-6 mt-2 padding-left">
                            <div class="position-relative">
                                <div class="video-text__kucuk position-absolute">asdasd</div>
                                <div class="kartlar__effect position-absolute">
                                    <div class="video-overlay__kucuk"><i class="fa fa-play-circle"></i></div>
                                </div>
                                <img src="img/arnavutkoy.jpg" class="video-image" alt=""></div>

                        </div>
                    </div>
                </div>


            </div>


        </div>
    </section>

    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->

    <section class="">
        <div class="container mt-3">
            <div class="row ">
                <div class="col-md-8 padding-left mx-auto">

                    <div class="card-header card-kutu position-relative">
                        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>Günün Manşetleri</div>
                        <a href="#">
                            <div class="card-kutu__tum position-absolute ">Tümü</div>
                        </a>
                    </div>
                    <div class="row padding-left mt-2">
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center  d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı</b>
                                    </p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center  d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı</b>
                                    </p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center  d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı</b>
                                    </p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                        <!--REKLAM ALANI-->
                        <div class="col-md-6 col-12 mt-2 text-center ">
                            <div class="reklam-alani ">
                                <img src="img/336x280.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2 text-center ">
                            <div class="reklam-alani ">
                                <img src="img/336x280.png" alt="">
                            </div>
                        </div>
                        <!--REKLAM ALANI-->
                    </div>


                    <div class="card-header card-kutu position-relative mt-2">
                        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>Günün Manşetleri</div>
                        <a href="#">
                            <div class="card-kutu__tum position-absolute ">Tümü</div>
                        </a>
                    </div>
                    <div class="row padding-left mt-2">
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı</b></p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center  d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı</b>
                                    </p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center  d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı</b>
                                    </p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 padding-left mt-1">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top" src="img/duvar.png" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center  d-table-cell"><b class="card-kisalt">Kirikkale'de
                                            Trafik Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı Kazasi 4 Yaralı</b>
                                    </p>
                                    <span class="card__kategori position-absolute">Falan Fistık</span>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->
                <div class="col-md-4 padding-left position-relative">
                    <div class="card-header card-yazarlar position-relative ">
                        <div class="card-yazarlar__link text-left pad"><b>Köşe</b> Yazarlarımız</div>
                        <a href="#">
                            <div class="card-yazarlar__tum position-absolute ">Tümü</div>
                        </a>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-4 col-4 col-sm-4">
                            <img src="img/nihal.jpg" class="rounded card-yazarlar__image" alt="">
                        </div>
                        <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                            <div class="d-inline-block align-middle">
                                <div class="card-yazarlar__isim d-inline-block">Alaaddin Güneşer</div>
                                <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt">Kazasi 4
                                        YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 Yaralı</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-4 col-4 col-sm-4">
                            <img src="img/nihal.jpg" class="rounded card-yazarlar__image" alt="">
                        </div>
                        <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                            <div class="d-inline-block align-middle">
                                <div class="card-yazarlar__isim d-inline-block">Alaaddin Güneşer</div>
                                <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt">Kazasi 4
                                        YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 Yaralı</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-4 col-4 col-sm-4">
                            <img src="img/nihal.jpg" class="rounded card-yazarlar__image" alt="">
                        </div>
                        <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                            <div class="d-inline-block align-middle">
                                <div class="card-yazarlar__isim d-inline-block">Alaaddin Güneşer</div>
                                <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt">Kazasi 4
                                        YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 Yaralı</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row  mt-2">
                        <div class="col-md-4 col-4 col-sm-4">
                            <img src="img/nihal.jpg" class="rounded card-yazarlar__image" alt="">
                        </div>
                        <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                            <div class="d-inline-block align-middle">
                                <div class="card-yazarlar__isim d-inline-block">Alaaddin Güneşer</div>
                                <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt">Kazasi 4
                                        YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 YaralıKazasi 4 Yaralı</p></div>
                            </div>
                        </div>
                    </div>
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
