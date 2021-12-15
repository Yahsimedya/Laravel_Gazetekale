@extends('main.home_master')

{{--@section('title',$category->category_tr." Haberleri")--}}
{{--@section('meta_keywords',$category->category_keywords)--}}
{{--@section('meta_description',$category->category_description)--}}
@section('content')
    @php
        $webSiteSetting=\App\Models\WebsiteSetting::first();
    @endphp
<script>





    document.addEventListener("DOMContentLoaded", function (event) {

        $(".kategori-slider").slick({
            autoplay: !0,
            dots: !0,
            arrows: !0,
            speed: 75,
            infinite: !0,
            autoplaySpeed: 5e3,
            customPaging: function (e, s) {
                $(e.$slides[s]).data();
                return '<a class="dot">' + (s + 1) + "</a>"
            },
            responsive: [{
                breakpoint: 500,
                settings: {dots: !0, arrows: !1, speed: 75, infinite: !0, slidesToShow: 1, slidesToScroll: 1}
            }]
        }), jQuery(".slick-dots li").on("mouseover", function () {
            jQuery(this).trigger("click")
        })
    });

</script>



    <div class="container mt-3">

        @if($count!=0)




            <section class="">
                <div class="container bg-light mt-3 mb-3 shadow rounded">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" bg-light mt-3 border-bottom pb-3 pt-3">
                                <div class=" "><h3 class="text-secondary">

                                        <i class="fa fa-align-left mr-2 text-danger"></i>{{$category->category_tr}} Haberleri</h3>
                                    <p>{{$category->category_description}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 kategori mt-3">
                            <div class="kategori-slider">

                                @foreach($manset as $row)
                                <div class="position-relative">

                                    <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                                        <div class="kategori-text position-absolute"></div>
                                        <div class="kartlar__effect position-absolute">
                                            <div class="kategori-overlay"></div>
                                        </div>
                                        <img data-lazy="" src="{{asset($row->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" class="kategori-image w-100" alt=""
                                             style="max-height: 460px !important;">
                                    </a>

                                </div>
                                @endforeach



                            </div>
                            <!------------------728x90 REKLAM ALANI -------------------->

                            <div class="reklam-alani mt-3 mb-3 text-center">
                                <a target="_blank" href=""><img src="" class="img-fluid reklam" alt=""></a>
                            </div>

                            <div class="reklam-alani mt-3 text-center">
                            </div>

                            <!----------------728x90 REKLAM ALANI -------------------->
                            <div class="card bg-light mt-3 shadow">
                                <div class="card-header "><h3 class="text-secondary"><i
                                            class="fa fa-align-left mr-2"></i> Diğer
                                        Haberleri</h3></div>
                            </div>
                            <div class="row mt-3 padding-left">
                                @foreach($catpost as $row)
                                    <div class="col-md-6 padding-left">

                                        <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}">
                                            <div
                                                class="card shadow border-top-0 border-right-0 border-left-0 border-bottom-1 border-danger  d-inline-block  ">
                                                <div class="position-relative">
                                                    <div class="kartlar__effect position-absolute">
                                                    </div>
                                                    <img class="card-img-top" src="{{asset($row->image)}}" onerror="this.onerror=null;this.src='{{asset($webSiteSetting->defaultImage)}}';" alt="img">
                                                </div>
                                                <div class="card-body align-middle d-table-cell">
                                                    <p class="card-baslik text-center d-table-cell"><b class="card-kisalt">{{$row->title_tr}}</b>
                                                    </p>
                                                    <span class="card__kategori position-absolute">{{$category->category_tr}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                @endforeach

                            </div>

                            <!--REKLAM ALANI-->
                            <div class="reklam-alani mb-2 col-md-4 mt-1 padding-left text-center">
                                <!------------------250x250  KATEGORİ LİSTELEME REKLAM ALANI -------------------->
                                <!------------------728x90 REKLAM ALANI -------------------->

                                <div class="reklam-alani mt-3 mb-3 text-center">
                                    <a target="_blank" href="bbbb"><img src="./img/reklamlar/" class="img-fluid reklam"
                                                                        alt="Reklam"></a>
                                </div>


                                <!----------------728x90 REKLAM ALANI -------------------->
                                <!----------------250x250 KATEGORİ LİSTELEME ALANI -------------------->
                            </div>
                            <!--REKLAM ALANI-->





                        <div class="container pb-2">
                            <div class="pagination">
                                <?php
                                /* echo '<a href="?hareket=' . ($sayfa < $toplamsayfa ? $sayfa- 1 : 1) . '">&raquo;</a>';

                                 for ($i = $sol ; $i <= $sag; $i++){
                                     if ($i > 0 && $i <= $toplamsayfa){
                                         echo '<a ' . ($i == $sayfa ? ' class="active"' : '') . ' href="?hareket=' . $i . '">' . $i . '</a>';
                                     }
                                 }
                                 echo '<a href="?hareket=' . ($sayfa < $toplamsayfa ? $sayfa + 1 : $toplamsayfa) . '">&raquo;</a>';


 */


                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <!------------------336x280 REKLAM ALANI -------------------->

                        <div class="reklam-alani mt-3 mb-3 text-center">
                            <a target="_blank" href=""><img src="" class="img-fluid reklam" alt=""></a>
                        </div>

                        <div class="reklam-alani mt-3 text-center">

                        </div>

                        <div class="position-relative">
                            <p class="detay__sidebar-baslik mt-3"><b>SIRADAKİ</b> <span>HABERLER</span></p>
                        </div>
                        <div class="list-group detay__liste mt-4">
                            @php
                            $i=0;
                            @endphp
@foreach($nextnews as $news)
                                @php
                                    $i++;
                                @endphp
                            <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)}}" class="list-group-item list-group-item-action detay__liste-item ">
                                <i class="detay__liste-rakam d-table-cell align-middle">{{$i}}</i>
                                <span class="d-table-cell">{{$news->title_tr}}</span>
                            </a>
                            @endforeach

                        </div>

                        <div class="col-md-12 padding-left position-relative">
                            <div class="card-header card-yazarlar position-relative ">


                                <div class="card-yazarlar__link text-left pad"><b>Köşe</b> Yazarlarımız</div>
                                <a href="{{route('author')}}">
                                    <div class="card-yazarlar__tum position-absolute ">Tümü</div>
                                </a>
                            </div>
                            @foreach($authors as $author)
                                <a href="">
                                    <div class="row  mt-2">

                                        <div class="col-md-4 col-4 col-sm-4">
                                            <img src="{{asset($author->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" class="rounded card-yazarlar__image" alt="">
                                        </div>
                                        <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                                            <div class="d-inline-block align-middle">
                                                <div class="card-yazarlar__isim d-inline-block">{{Str::limit($author->name,17)}}</div>
                                                <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt">{{$author->title}}</p></div>
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            @endforeach





                        </div>
                        </div>
                        </div>

            </section>






        @else
            <div class="container">
                <div class="row">
                    <div class="col-md-12  bg-light shadow d-flex w-100 mb-5" style="min-height: 400px;">
                        <h3 class="text-secondary text-center mx-auto my-auto">Kategoride Haber Bulunamadı</h3>
                    </div>

                </div>
            </div>
        @endif


    </div>

@endsection
