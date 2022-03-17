<div class="container">

    <div class="reklam-alani mb-3 mt-3 text-center">
        @foreach($ads as $ad)
            @if($ad->type==1 && $ad->category_id==15)
                <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="100%"
                                             data-src="{{asset($ad->ads)}}"></a>
            @elseif($ad->type==2 && $ad->category_id==15)
                <div class="w-100">{!!$ad->ad_code!!}</div>
            @endif
        @endforeach
    </div>

</div>
<section class="video mt-3 pt-3 pb-3 bg-dark">
    <div class="container padding-left">
        <div class="card-header card-video position-relative">
            <div class="card-kutu__link"><i class="fa fa-video mr-2 "></i>Video Galeri</div>
            <a href="{{route('VideoGaleriAll')}}">
                <div class="card-kutu__tum position-absolute ">Tümü</div>
            </a>
        </div>
        <div class="row  padding-left">
            <div class="col-md-6 mt-2 padding-left">
                <div class="video-slider">
                    @foreach($videogaleriSlider as $row)
                        <div class="position-relative">
                            <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                                <!-- <div class="kartlar__effect position-absolute"> -->
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                                <!-- </div> -->
                                <img data-src="{{$row->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" height="" style="object-fit: cover;"
                                     class="video-image-slider lazyload img-fluid" alt="{{$row->image}}"></a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-6 d-none d-md-block">
                <div class="row ">
                    @foreach($videogaleri as $row)

                            <div class="col-md-6 mt-2 padding-left">
                                <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">

                                    <div class="position-relative">

                                        <div class="video-overlay__kucuk">
                                            <i class="fa fa-play-circle"></i>
                                        </div>

                                        <img data-src="{{$row->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" height=""
                                             class="video-image lazyload img-fluid" alt="{{$row->image}}">
                                    </div>
                                </a>
                            </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>











