<div class="col-md-12 col-sm-12 col-xs-12 col-lg-8  padding-left">
    <div class="owl-carousel owl-theme  shadow anaslider" id="">
        @php
            $k = 1;
        @endphp
        @for ($i = 0; $i <= 18; $i++)
            @if (isset($home[$i]))
                <div class="item owl-anaitem "
                    @if ($home[$i] == '1') data-dot="<span>R</span>" @else data-dot="<span>{{ $k }}</span>" @endif>
                    @if ($home[$i] == '1')
                        @foreach ($ads as $ad)
                            @if ($ad->type == 1 && $ad->category_id == 28)
                                <a href="{{ $ad->link }}">
                                    <img class="img-fluid owl-lazy" data-src="{{ asset($ad->ads) }}"></a>
                            @elseif($ad->type == 2 && $ad->category_id == 28)
                                <div class="w-100">{!! $ad->ad_code !!}</div>
                            @endif
                        @endforeach
                    @else
                        <a href="{{ URL::to('/haber-' . str_slug($home[$i]->title_tr) . '-' . $home[$i]->id) }}">
                            <img class="img-fluid owl-lazy" data-src="{{ asset($home[$i]->image) }}"
                                onerror="this.onerror=null;this.src='{{ $webSiteSetting->defaultImage }}';"
                                alt=""></a>
                    @endif
            @endif
    </div>

    @php
        $k++;
    @endphp
</div>
@endfor


<div class="item d-inline">
    <span class="slider_span"><a href="#" class="mx-auto text-center align-middle text-white"><i
                class="fa fa-th-large"></i></a></span>

</div>

</div>
