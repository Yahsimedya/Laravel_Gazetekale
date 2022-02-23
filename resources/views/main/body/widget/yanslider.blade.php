<div
    class="col-md-12 col-sm-12 col-xs-12 col-lg-4 d-none d-md-block text-center position-relative yanslider padding-left">

    <ul class="nav nav-tabs yan__kategori">
        <li class="active yan__kategori-li"><a class="yan__kategori-li-link"
                                               data-toggle="tab" href="#home">Siyaset</a></li>
        <li class="yan__kategori-li"><a class="yan__kategori-li-link" style="" data-toggle="tab"
                                        href="#menu1">Spor</a></li>
        <li class="yan__kategori-li"><a class="yan__kategori-li-link" data-toggle="tab"
                                        href="#menu2">3.Sayfa</a></li>
        <li class="yan__kategori-li"><a class="yan__kategori-li-link" data-toggle="tab"
                                        href="#menu3">Özel</a></li>
    </ul>


    <div class="tab-content">
        <div id="home" class="tab-pane  active  in">

            <div class="owl-carousel owl-theme  shadow anaslider">
                @php
                    $k=1;
                @endphp
                @foreach ($siyaset as $row )


                    <div class="item yanslider__yanitem position-relative" data-dot="<span>{{$k}}</span>">
                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                            @if($webSiteSetting->slider_title==1)
                                @if($webSiteSetting->slider_title==1)
                                    <div class="yanslider__effect position-absolute"></div>
                                @endif
                            @endif
                            <img data-src="{{$row->image}}"
                                 onerror="this.onerror=null;this.src='{{asset($webSiteSetting->defaultImage)}}';"
                                 class="img-fluid owl-lazy" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class="yanslider-link align-middle card-kisalt">
                                    @if($webSiteSetting->slider_title==1) {{$row->title_tr}} @endif
                                </a>
                            </div>
                        </a>

                    </div>
                    @php
                        $k++;
                    @endphp

                @endforeach

            </div>
        </div>
        <div id="menu1" class="tab-pane ">
            <div class="owl-carousel owl-theme  shadow anaslider" id="">
                @php
                    $k=1;
                @endphp
                @foreach ($spor as $row )


                    <div class="item yanslider__yanitem position-relative" data-dot="<span>{{$k}}</span>">
                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                            @if($webSiteSetting->slider_title==1)
                                <div class="yanslider__effect position-absolute"></div>
                            @endif
                            <img src="{{$row->image}}"
                                 onerror="this.onerror=null;this.src='{{asset($webSiteSetting->defaultImage)}}';"
                                 class="img-fluid" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class=" yanslider-link align-middle card-kisalt">
                                    @if($webSiteSetting->slider_title==1) {{$row->title_tr}} @endif
                                </a>
                            </div>
                    </div>
                    </a>
                    @php
                        $k++;
                    @endphp

                @endforeach


            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="owl-carousel owl-theme  shadow anaslider" id="">
                @php
                    $k=1;
                @endphp
                @foreach ($ucuncuSayfa as $row )

                    <div class="item yanslider__yanitem position-relative" data-dot="<span>{{$k}}</span>">
                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                            @if($webSiteSetting->slider_title==1)
                                <div class="yanslider__effect position-absolute"></div>
                            @endif
                            <img src="{{$row->image}}"
                                 onerror="this.onerror=null;this.src='{{asset($webSiteSetting->defaultImage)}}';"
                                 class="img-fluid" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class=" yanslider-link align-middle card-kisalt">
                                    @if($webSiteSetting->slider_title==1) {{$row->title_tr}} @endif
                                </a>
                            </div>
                    </div>
                    </a>
                    @php
                        $k++;
                    @endphp

                @endforeach


            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <div class="owl-carousel owl-theme  shadow anaslider" id="">
                @php
                    $k=1;
                @endphp
                @foreach ($ozel as $row )

                    <div class="item yanslider__yanitem position-relative" data-dot="<span>{{$k}}</span>">
                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">

                            @if($webSiteSetting->slider_title==1)
                                <div class="yanslider__effect position-absolute"></div>
                            @endif
                            <img src="{{$row->image}}"
                                 onerror="this.onerror=null;this.src='{{asset($webSiteSetting->defaultImage)}}';"
                                 class="img-fluid" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class="yanslider-link align-middle card-kisalt">
                                    @if($webSiteSetting->slider_title==1) {{$row->title_tr}} @endif
                                </a>
                            </div>
                        </a>
                    </div>
                    @php
                        $k++;
                    @endphp

                @endforeach


            </div>
        </div>
    </div>
    @foreach($ads as $ad)
        @if($ad->type==1 && $ad->category_id==17)
            <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload"
                                         onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                                         data-src="{{asset($ad->ads)}}"></a>
        @elseif($ad->type==2 && $ad->category_id==17)
            <div class="w-100">{!!$ad->ad_code!!}</div>
        @endif
    @endforeach

</div>
