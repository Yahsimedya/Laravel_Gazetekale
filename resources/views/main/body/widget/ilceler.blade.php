@php
    $Ilcehaberleri=\App\Models\Post::limit(8)->get();
@endphp
<section class="ilceler container-fluid  bg-light mt-2 mb-2 pb-4">
    <div class="container padding-left pt-2">
        <ul class="nav nav-pills ilceler__nav mb-3" id="pills-tab" role="tablist">
            <div class="card-header float-left ilceler__baslik">İLÇE HABERLERİ</div>
            @foreach($ilceler as $ilce)

                <li class="nav-item ilceler__nav-item ">
                    <a class="ilceler__nav-link active " id="pills-profile-tab  " data-toggle="pill"
                       href="#{{$ilce->subdistrict_tr}}" role="tab" aria-controls="pills-profile"
                       aria-selected="false">{{$ilce->subdistrict_tr}}</a>
                </li>
            @endforeach
        </ul>


        <div class="tab-content" id="pills-tabContent">
            @foreach($ilceler as $ilce)
            <div class="tab-pane active" id="{{$ilce->subdistrict_tr}}" role="tabpanel"
                 aria-labelledby="pills-home-tab">
                <div class="{{$ilce->subdistrict_tr}}">
                    <!-------JAVASCRİPT KODLARI CUTSOM.JS DOSYASINDA--------->
                  <!--

                    @foreach($Ilcehaberleri as $haberler)
                    <div>
                        <a href="">
                            <div class="card   d-inline-block  ">
                                <img class="card-img-top tns-lazy-img lazyload"
                                     data-src="{{$haberler->image}}"
                                         alt="{{$haberler->title_tr}}">
                                    <div class="card-body align-middle d-table-cell">
                                        <p class="card-baslik text-center d-table-cell"><b
                                                class="card-kisalt">{{$haberler->title_tr}}</b></p>
                                        <span
                                            class="card__kategori position-absolute">{{$haberler->title_tr}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                  -->

                </div>
            </div>

            @endforeach
        </div>


    </div>
</section>
