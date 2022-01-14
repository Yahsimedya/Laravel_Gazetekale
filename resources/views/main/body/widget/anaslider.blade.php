<div class="col-md-12 col-sm-12 col-xs-12 col-lg-8  padding-left">
    <div class="owl-carousel owl-theme  shadow anaslider" id="">
        @php
            $k=1;
        @endphp
        @for($i=0;$i<=18;$i++)
            <div class="item owl-anaitem " data-dot="<span>{{$k}}</span>">


                <a href="{{URL::to('/haber-'.str_slug($home[$i]->title_tr).'-'.$home[$i]->id)}}">
                    <img
                        class="img-fluid owl-lazy"
                        data-src="{{asset($home[$i]->image)}}"
                        onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
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
