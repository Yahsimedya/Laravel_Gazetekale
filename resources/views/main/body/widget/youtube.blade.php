<section class="video mt-3 pt-3 pb-3 bg-dark">
    <div class="container padding-left">
        <div class="row">
            <div @if(count($egazete)>0 && $themeSetting->gazetesayisi==1) class="col-md-10" @else class="col-md-12"@endif >
                <div class="card-header card-youtube position-relative ">
                    <div class="d-flex justify-content-between">
                        <div class="col-md-9 col-8"><img class="img-fluid lazyload" width="180"
                                                         data-src="{{asset('icon/gazetekaletv.png')}} ">
                            <div class="card-kutu__link">
                            </div>
                        </div>
                        <div class="col-md-3 col-4">
                            <div class="ytube">
                                <img src="{{asset('icon/icon-youtube-white.svg')}}" class="lazyload img-fluid"
                                     style="color: white" alt="youtube" width="75" height="21">
                                <a href="https://www.youtube.com/channel/UCUUeGmpEvlPFjRSeOYevzag" target="_blank"
                                   rel="nofollow" class="ytube-subscriber" title="Haberler.com Youtube">
                                    <span>Abone Ol</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  padding-left">
                    <div class="col-md-12 mt-2 padding-left">
                        <div class="keskin">
                            @foreach ($youtube as $row)
                                <div>
                                    <a target="_blank" href="https://www.youtube.com/watch?v={{$row->posts_video}}">
                                        <div class="card   d-inline-block  ">
                                            <img data-src="{{asset('icon/icon-youtube.png')}}"
                                                 class="lazyload position-absolute ytube-icon img-fluid "
                                                 alt="youtube" width="70" height="45">
                                            <img class="card-img-top tns-lazy-img lazyload img-fluid"
                                                 data-src="{{$row->image}}"
                                                 onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                                                 alt="{{$row->title_tr}}">
                                            <div class="card-body align-middle d-table-cell">
                                                <p class="card-baslik text-center d-table-cell"><b
                                                        class="card-kisalt">{{$row->title_tr}}</b></p>
                                                <img data-src="{{asset('icon/icon-youtube.svg')}}"
                                                     class="lazyload float-right img-fluid position-absolute"
                                                     alt="youtube" width="75" height="21"
                                                     style="top: 50%;right: 0;transform: translate(0%, 220%);">
                                                <span class="card__tv position-absolute text-dark">Gazetekale TV
</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @if(count($egazete)>=1 && $themeSetting->gazetesayisi==1)
                <div class="col-md-2"  >
                    <div class="card-header card-egazete position-relative d-flex">
                        <h5 class="card-title text-light my-auto">E-Gazete</h5>
                    </div>
                    <div class="e-gazete" >
                        @foreach($egazete as $row)
                            <div>
                                <a class="example-image-link lb-number" target="_blank" href="{{$row->image}}"
                                   data-lightbox="example-set" data-title="{{$row->title_tr}}">
                                    <div class="card   d-inline-block  " >
                                        <img class="card-img-top tns-lazy-img lazyload img-fluid example-image"
                                             data-src="{{$row->image}}"
                                             alt="{{$row->title_tr}}">
                                        {{$row->title_tr}}
                                        <script>
                                            lightbox.option({
                                                'albumLabel': "",
                                                //   'disableScrolling':true,
                                            })
                                        </script>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        tns({
            container: ".keskin",
            items: 3,
            slideBy: "page",
            nav: !0,
            navPosition: "bottom",
            autoplay: !0,
            lazyload: true,
            controls: !1,
            autoplayButton: !1,
            mouseDrag: !0,
            autoplayTimeout: 3e5,
            autoplayButtonOutput: !1,
            gutter: 14,
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
        })
    })
</script>
<script>
    $(document).ready(function () {
        tns({
            container: ".e-gazete",
            items: 3,
            slideBy: "page",
            nav: !0,
            navPosition: "bottom",
            autoplay: !0,
            lazyload: true,
            controls: !1,
            autoplayButton: !1,
            mouseDrag: !0,
            autoplayTimeout: 3e5,
            autoplayButtonOutput: !1,
            gutter: 14,
            responsive: {
                0: {
                    items: 1
                },
                640: {
                    items: 1
                },
                700: {
                    gutter: 14
                },
                900: {
                    items: 1
                }
            }
        })
    })
</script>
