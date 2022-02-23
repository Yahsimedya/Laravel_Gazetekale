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
                <img src="{{$websetting->logowhite}}" class="footer-logo img-fluid " alt="">

                <div class="d-flex justify-content-center">
                    <div class="">
                        <div class="row text-center">
                            @if($themeSetting[0]->apps==1)
                                <div class="d-flex justify-content-between">
                                    <p class="ml-2 mr-2">
                                        <a class="dark-grey-text"
                                           href="https://apps.apple.com/us/developer/yah%C5%9Fi-medya/id1495158559?l=tr"><img
                                                class="img-fluid lazyload" style="max-width: 120px"
                                                data-src="{{asset('icon/Iphone.png')}}"></a>
                                    </p>
                                    <p class="ml-2 mr-2">
                                        <a class="dark-grey-text"
                                           href="https://play.google.com/store/apps/developer?id=Yah%C5%9Fi+Medya&hl=tr&gl=US"><img
                                                class="img-fluid lazyload" style="max-width: 120px"
                                                data-src="{{asset('icon/Android.png')}}"></a>
                                    </p>
                                    <p class="ml-2 mr-2">
                                        <a class="dark-grey-text"
                                           href="https://appgallery.huawei.com/app/C104177315"><img
                                                class="img-fluid lazyload" style="max-width: 120px"
                                                data-src="{{asset('icon/Huawei.png')}}"></a>
                                    </p>
                                </div>
                            @endif
                            @if($themeSetting[0]->subscription==1)
                                <div class="d-flex justify-content-center">
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
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <ul class="list-unstyled">
                    <div class="footer-baslik"><h3>Kurumsal </h3></div>
                    @foreach($fixedPages as $pages)
                        <li><a href="{{route('Open.fixedPage',$pages->id)}}"
                               style="max-height: 20px;color:white!important;"
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
                    <br>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center text-light py-3">© 2021 Copyright:
       <a href="https://yahsisoft.com/"> <img width="85" class="img-fluid lazyload d-inline-flex" data-src="{{asset('image/yahsisoft.png')}}"></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script
        src="{{asset('frontend/assets/node_modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/jquery.newsTicker.js')}}"></script>
    {{--    <script type="text/javascript"--}}
    {{--            src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>--}}

    <script>
        new WOW().init();
    </script>
</footer>
