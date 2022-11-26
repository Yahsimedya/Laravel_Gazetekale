<div class="col-md-8 padding-left mx-auto">

    <div class="card-header card-kutu position-relative"
        style="background-image:linear-gradient(-10deg, {{ $themeSetting->economy }}, {{ $themeSetting->politics }});!important;border-bottom:3px solid {{ $themeSetting->economy }} !important">
        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>
            {{-- {{ dd($category) }} --}}

            @foreach ($education as $educat)
                {{-- {{ dd($educat) }} --}}
                {{-- @if (isset($education[0]->category_id)) --}}
                @if ($educat->category_id == $themeSetting->category1)
                    {{ $educat->category->category_tr }}
                    @php
                        $categoryNameOne = $educat->category->category_tr;
                    @endphp
                @endif
                {{-- @endif --}}
            @endforeach
        </div>
        <a href="{{ URL::to('/Category/' . str_slug($categoryNameOne) . '/' . $themeSetting->category1) }}">
            <div class="card-kutu__tum position-absolute ">Tümü</div>
        </a>
    </div>
    <div class="row padding-left mt-2">
        @foreach ($education as $row)
            <div class="col-md-6 padding-left mt-1">
                <a href="{{ URL::to('/haber-' . str_slug($row->title_tr) . '-' . $row->id) }}">
                    <div class="card   d-inline-block  ">
                        <img class="card-img-top lazyload img-fluid" src="{{ $row->image }}"
                            onerror="this.onerror=null;this.src='{{ $webSiteSetting->defaultImage }}';"
                            alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt">{{ $row->title_tr }}</b></p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        <!--REKLAM ALANI-->
        <div class="col-md-6 col-12 mt-2 text-center ">
            <div class="reklam-alani ">
                @foreach ($ads as $ad)
                    @if ($ad->type == 1 && $ad->category_id == 20)
                        <a href="{{ $ad->link }}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                height="280" data-src="{{ asset($ad->ads) }}"></a>
                    @elseif($ad->type == 2 && $ad->category_id == 20)
                        <div class="w-100">{!! $ad->ad_code !!}</div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-12 mt-2 text-center ">
            <div class="reklam-alani ">
                @foreach ($ads as $ad)
                    @if ($ad->type == 1 && $ad->category_id == 21)
                        <a href="{{ $ad->link }}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                height="280" data-src="{{ asset($ad->ads) }}"></a>
                    @elseif($ad->type == 2 && $ad->category_id == 21)
                        <div class="w-100">{!! $ad->ad_code !!}</div>
                    @endif
                @endforeach
            </div>
        </div>
        <!--REKLAM ALANI-->
    </div>


    <div class="card-header card-kutu position-relative"
        style="background-image:linear-gradient(-10deg, {{ $themeSetting->agenda }}, {{ $themeSetting->sport }});!important;border-bottom:3px solid {{ $themeSetting->agenda }} !important">
        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>

            @foreach ($kultur as $culter)
                {{-- {{ dd($culter->category->category_tr) }} --}}
                @if ($culter->category_id == $themeSetting->category1)
                    {{ $culter->category->category_tr }}
                    @php
                        $categoryName = $culter->category[0]->category_tr;
                    @endphp
                @endif
            @endforeach
        </div>
        {{ dd($categoryName) }}
        <a href="{{ URL::to('/Category/' . str_slug($categoryName) . '/' . $themeSetting->category2) }}">
            <div class="card-kutu__tum position-absolute ">Tümü</div>
        </a>
    </div>
    <div class="row padding-left mt-2">
        @foreach ($kultur as $row)
            <div class="col-md-6 padding-left mt-1">
                <a href="{{ URL::to('/haber-' . str_slug($row->title_tr) . '-' . $row->id) }}">
                    <div class="card   d-inline-block  ">
                        <img class="card-img-top lazyload img-fluid" src="{{ $row->image }}"
                            onerror="this.onerror=null;this.src='{{ $webSiteSetting->defaultImage }}';"
                            alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt">{{ $row->title_tr }}</b></p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>


</div>
