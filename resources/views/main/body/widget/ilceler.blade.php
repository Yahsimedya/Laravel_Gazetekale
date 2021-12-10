
    <script>
        @foreach($ilceler as $ilce)
        $(document).ready(function () {
            tns({
                container: "#583",
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
        @endforeach
    </script>

<section class="ilceler container-fluid  bg-light mt-2 mb-2 pb-4">


    <div class="container padding-left pt-2">
        <div class="card-header float-left ilceler__baslik">İLÇE HABERLERİ</div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @php
                $i=0;
            @endphp
            @foreach($ilceler as $ilce)
                <li class="nav-item ilceler__nav-item">

                    <a class="ilceler__nav-link  @if($i==0)active @endif" id="pills-{{$ilce->id}}-tab"
                       data-toggle="pill"
                       href="#pills-{{$ilce->id}}" role="tab" aria-controls="pills-{{$ilce->id}}"
                       aria-selected="false">{{$ilce->subdistrict_tr}}</a>
                </li>
                @php
                    $i++;
                @endphp
            @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
            @foreach($ilceler as $ilce)
                @php
                    $k=0;
                @endphp
            @endforeach

            @foreach($ilceler as $ilce)

                <div class="tab-pane fade @if($k==0) show active @endif" id="pills-{{$ilce->id}}" role="tabpanel"
                     aria-labelledby="pills-profile-tab">
                    @php
                        $Ilcehaberleri=\App\Models\Post::limit(8)->where('subdistrict_id',$ilce->id)->get();

                    @endphp
                    @foreach($Ilcehaberleri as $haber)
                        <div >
                            <a href="">
                                <div class="card d-inline-block  ">
                                    <img class="card-img-top tns-lazy-img lazyload"
                                         data-src="{{$haber->image}}" alt="{{asset($haber->image)}}">
                                    <div class="card-body align-middle d-table-cell">
                                        <p class="card-baslik text-center d-table-cell"><b
                                                class="card-kisalt">{{$haber->title_tr}}</b></p>
                                        <span
                                            class="card__kategori position-absolute">{{ \Carbon\Carbon::parse($haber->created_at)->isoFormat('DD MMMM YYYY') }} {{ Carbon\Carbon::parse($haber->created_at)->isoFormat('HH:mm') }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>


                @php
                    $k++;
                @endphp
            @endforeach
        </div>


    </div>
</section>

