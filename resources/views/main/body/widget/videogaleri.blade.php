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
                    @foreach($videogaleri as $row)

                        <div class="position-relative">

                            <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                                <!-- <div class="kartlar__effect position-absolute"> -->
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                                <!-- </div> -->
                                <img data-src="{{$row->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" height="" style="object-fit: cover;"
                                     class="video-image-slider lazyload" alt="{{$row->image}}"></a>
                        </div>
                    @endforeach


                </div>


                <!-- <div class="video-slider">
            <div class="video-slider__item"><span>1</span><img data-src="img/arnavutkoy.jpg" class="video-image"  alt=""></div>
            <div class="video-slider__item"><span>2</span><img data-src="img/arnavutkoy.jpg" class="video-image"  alt=""></div>
            </div> -->
            </div>

            <div class="col-md-6 d-none d-md-block">
                <div class="row ">

                    @for($i=0;$i<=3;$i++)
                        @if($videogaleri[$i]->featured==1 && count($videogaleri)>4)

                            <div class="col-md-6 mt-2 padding-left">
                                <a href="{{$videogaleri[$i]->image}}">

                                    <div class="position-relative">

                                        <div class="video-overlay__kucuk">
                                            <i class="fa fa-play-circle"></i>
                                        </div>

                                        <img data-src="{{$videogaleri[$i]->image}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" height=""
                                             class="video-image lazyload" alt="{{$videogaleri[$i]->image}}">

                                    </div>
                                </a>
                            </div>

                        @endif
                    @endfor


                </div>
            </div>


        </div>


    </div>
</section>


<script>$(document).ready(function () {
        $(".video-slider").slick({
            autoplay: !0,
            dots: !0,
            autoplaySpeed: 5e5,
            customPaging: function (t, o) {
                return $(t.$slides[o]).data(), '<a class="dot">' + (o + 1) + "</a>"
            },
            responsive: [{
                breakpoint: 500,
                settings: {dots: !1, arrows: !0, infinite: !1, slidesToShow: 1, slidesToScroll: 1}
            }]
        })
    })</script>











