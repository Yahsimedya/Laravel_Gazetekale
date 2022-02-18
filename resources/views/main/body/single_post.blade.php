@extends('main.home_master')
@section('title',$post->title_tr)
@section('meta_keywords',$post->keywords_tr)
@section('meta_description',$post->description_tr)
@section('google_analytics',$seoset->google_analytics)
@section('og:site_name',$seoset->meta_title)
@section('og:title',$post->title_tr)
@section('og:description',$post->title_tr)
@section('og:image',asset($post->image))
@section('og:url',url()->current())
@section('twitter:url',url()->current())
@section('twitter:domain',Request::root())
@section('twitter:site',$seoset->meta_title)
@section('twitter:title',$post->title_tr)
@section('content')
    @php
        $webSiteSetting=\App\Models\WebsiteSetting::first();
    $themeSetting=DB::table('themes')->get();

    @endphp
    <style>
        .detay__icon::before {
            color: {{$themeSetting[0]->siteColorTheme}}    !important;
        }

        .detay__liste-rakam {
            color: {{$themeSetting[0]->siteColorTheme}}    !important;

        }

        .slick-active, .slick li {
            background-image: radial-gradient(farthest-side at 102% 2%, {{$themeSetting[0]->siteColorTheme}}, {{$themeSetting[0]->siteColorTheme}});
        }

        .detay li {
            border: 1px solid {{$themeSetting[0]->siteColorTheme}}    !important;
        }
    </style>
    <div class="container bg-light mt-4 mb-4 rounded shadow">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="detay__baslik"><h1>{{$post->title_tr}}</h1></div>
                <p class="detay__spot">{{$post->subtitle_tr}}</p>
                <ul class="detay__kategori list-unstyled">
                    <li class="float-left mr-2"><i
                            class="far fa-circle detay__icon"></i>{{$post->category->category_tr}}
                    </li>
                    <li class="float-left mr-2"><i
                            class="far fa-calendar-alt detay__icon"></i>{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('DD MMMM YYYY') }}
                    </li>
                    <li class="float-left mr-2"><i
                            class="far fa-clock detay__icon"></i>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('HH:mm') }}
                    </li>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-2 mb-4">
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                @if (!empty($post->posts_video))
                    <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/{{$post->posts_video }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                @else
                    <img src="{{$post->image}}"
                         onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                         class="img-fluid w-100" alt="{{$post->title_tr}}">
                @endif

                @foreach($ads as $ad)
                    @if($ad->type==1 && $ad->category_id==23)
                        <a href="{{$ad->link}}"> <img class="img-fluid pb-1 pt-2 lazyload float-left mr-2 " width="728"
                                                      height="90"
                                                      src="{{asset($ad->ads)}}"></a>
                    @elseif($ad->type==2 && $ad->category_id==23)
                        <div class="float-left mr-2" style="width: 728px;height: 90px;">{!!$ad->ad_code!!}</div>
                    @endif
                @endforeach
            <!--BU ALANA PHP SORGUSU İLE ÇOKLU RESİMLERDE SLİDER GÖSTERİLECEK-->
                <p class="detay__icerik mt-4">
{{--                    @foreach($ads as $ad)--}}
{{--                        @if($ad->type==1 && $ad->category_id==22)--}}
{{--                            <a href="{{$ad->link}}"> <img class="img-fluid pb-1 pt-2 lazyload float-left mr-2 "--}}
{{--                                                          width="200"--}}
{{--                                                          height="200"--}}
{{--                                                          src="{{asset($ad->ads)}}"></a>--}}
{{--                @elseif($ad->type==2 && $ad->category_id==22)--}}
{{--                    <div class="float-left mr-2" style="width: 200px;height: 200px;">{!!$ad->ad_code!!}</div>--}}
{{--                    @endif--}}
{{--                    @endforeach--}}

                    {!!$post->details_tr!!}
                    </p>
                    <div class="reklam-alani mb-2 text-center">
                        @foreach($ads as $ad)
                            @if($ad->type==1 && $ad->category_id==12)
                                <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                             height="280"
                                                             data-src="{{asset($ad->ads)}}"></a>
                            @elseif($ad->type==2 && $ad->category_id==12)
                                <div class="w-100">{!!$ad->ad_code!!}</div>
                            @endif
                        @endforeach
                    </div>
                    <p class="detay__icerik mt-4">
                        @foreach($orderImages as $Images)
                            <a class="example-image-link lb-number" target="_blank" href="{{$Images->image}}"
                               data-lightbox="example-set" data-title="">
                                <img src="{{asset($Images->image)}}"
                                 onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                                 class="img-fluid w-100 mb-3">
                            </a>
                            <script>
                                lightbox.option({
                                    'albumLabel': "{{$post->title_tr}}",
                                    //   'disableScrolling':true,
                                })
                            </script>

                        @endforeach
                    </p>


                    <div class="wrapper">

                        <div class="navbar-social">
                            <a href="https://twitter.com/share?url={{URL::to('/haber-'.str_slug($post->title_tr).'-'.$post->id)}}"
                               class="icon-button twitter"><i class="icon-twitter fa fa-twitter"></i><span></span></a>
                            <a href="https://www.facebook.com/sharer.php?u={{URL::to('/haber-'.str_slug($post->title_tr).'-'.$post->id)}}"
                               class="icon-button facebook"><i
                                    class="icon-facebook fa fa-facebook"></i><span></span></a>
                            <a href="https://youtube.com/gazetekale" target="_blank" class="icon-button google-plus"><i
                                    class="icon-youtube fa fa-youtube"></i><span></span></a>
                        </div>
                    </div>
                    {{--                <div class="row p-3">--}}
                    {{--                    @foreach($tagName as $relate)--}}
                    {{--                        --}}{{--    {{dd($relate)}}--}}

                    {{--                        <a href="{{ URL::to('/etiket/'.str_slug($relate->name).'/'.$relate->id) }}">--}}
                    {{--                            <div class="btn btn-sm btn-secondary  d-inline-block float-left ml-1 mb-2">{{$relate->name}}--}}
                    {{--                            </div>--}}
                    {{--                        </a>--}}
                    {{--                    @endforeach--}}
                    {{--                </div>--}}
                    @if ($tagCount>=1)

                        @foreach($maybeRelated as $row)
                            <a href="{{URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->post_id)}}">
                                <div class="row p-3 border-top">
                                    <div class="col-md-5"><img height="200" class="img-fluid lazyload"
                                                               src="{{asset($row->image)}}"></div>
                                    <div class="col-md-7 my-auto">
                                        <small class="font-weight-bold text-secondary">İlginizi Çekebilir</small>
                                        <p class="card-kisalt font-weight-bold">{{$row->title_tr}}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->

                    @foreach($comments as $comment)
                        <div class="col-md-12 bg-light  border-bottom">

                            <p class="">
                                <i class="fa fa-user"></i> {{$comment->name}}<br/>


                                <i class="fa fa-envelope"></i> {{$comment->details}}<br/></p>

                        </div>
                    @endforeach

                    <div class="card bg-light mb-2" style="min-height:0;">
                        <div class="card-header">
                            <h3 class="text-secondary"><i class="fa fa-commenting mr-2"></i>YORUM EKLE</h3>
                        </div>
                    </div>


                    <form action="{{route('add.comments',$post->id)}}" method="post">
                        @csrf
                        <div class="form-group w-100">
                            <input type="hidden" name="posts_id" value="{{$post->id}}">
                            <input type="Text" class="form-control" aria-describedby="emailHelp"
                                   placeholder="İsim Soyisim" name="name">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group w-100 h-100">
                        <textarea class="form-control" name="details" placeholder="Yorumunuzu Giriniz"
                                  rows="3"></textarea>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2 col-6">
                                @php
                                    $guvenlikkodu= rand(10000,99999);
                                @endphp
                                <p class="btn btn-success">{{$guvenlikkodu}}</p>


                            </div>
                            <div class="col-md-10 col-6">
                                <input class="form-control" name="guvenlik" placeholder="Güvenlik Kodu"
                                       type="text">


                            </div>
                        </div>

                        <input type="hidden" name="posts_id" value="{{$post->id}}" id="haber_id">
                        <input type="hidden" name="guvenlikkodu" value="{{$guvenlikkodu}}">
                        <input type="hidden" name="yorumicerik" id="yorumicerik" class="form-control"
                               aria-describedby="emailHelp" value="">


                        <button type="submit" class="button button--green btn-lg">Gönder</button>
                    </form>


                    <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->

            </div>

            <div class="col-md-4 mb-4 detay__sidebar">
                <div class="detay col-12 p-0 mt-2 border shadow">

                    <div class="detay-slider" style="background-color: white!important;">
                        @php
                            $k=1;
                        @endphp
                        @foreach($slider as $sliders)

                            <div class="position-relative d-table-cell align-middle">

                                <div class="kapsayici position-relative">
                                    <a href="{{URL::to('/haber-'.str_slug($sliders->title_tr).'-'.$sliders->id)}}">

                                        <div class="kartlar__effect position-absolute">
                                        </div>
                                        <img src="{{$sliders->image}}"
                                             onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                                             class="detay-image ls-is-cached lazyloaded"
                                             alt="">
                                    </a>

                                </div>

                                <div class="position-relative bg-light text-dark"><p
                                        class=" detay-text d-table-cell align-middle">{{$sliders->title_tr}}</p></div>
                            </div>

                            @php
                                $k++;
                            @endphp
                        @endforeach

                    </div>
                </div>
                <div class="reklam-alani mb-2 text-center">
                    @foreach($ads as $ad)
                        @if($ad->type==1 && $ad->category_id==1)
                            <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                         height="280"
                                                         data-src="{{asset($ad->ads)}}"></a>
                        @elseif($ad->type==2 && $ad->category_id==1)
                            <div class="w-100">{!!$ad->ad_code!!}</div>
                        @endif
                    @endforeach
                </div>
                <div class="position-relative">
                    <p class="detay__sidebar-baslik mt-3"><b>SIRADAKİ</b> <span>HABERLER</span></p>
                </div>
                <div class="list-group detay__liste mt-4">
                    @php
                        $k=1;
                    @endphp
                    @foreach($nextrelated as $siradaki)
                        <a href="{{URL::to('/haber-'.str_slug($siradaki->title_tr).'-'.$siradaki->id)}}"
                           class="list-group-item list-group-item-action detay__liste-item ">
                            <i class="detay__liste-rakam d-table-cell align-middle">{{$k}}</i>
                            <span class="d-table-cell">{{$siradaki->title_tr}}</span>
                        </a>
                        @php
                            $k++;
                        @endphp
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                        <div class="reklam-alani mt-2 text-center">
                            @foreach($ads as $ad)
                                @if($ad->type==1 && $ad->category_id==3)
                                    <a href="{{$ad->link}}"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                                 height="280"
                                                                 data-src="{{asset($ad->ads)}}"></a>
                                @elseif($ad->type==2 && $ad->category_id==3)
                                    <div class="w-100">{!!$ad->ad_code!!}</div>
                                @endif
                            @endforeach
                        </div>
                        <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                    </div>
                </div>


            </div>

        </div>

    </div>


    </div>
    </section>




    <footer class=" footer bg-dark">


        <script>
            new WOW().init();
        </script>


        <script>


        </script>
@endsection
