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
{{--    <script type="text/javascript"--}}
{{--            src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>--}}

    <script>
        new WOW().init();
    </script>
</footer>
