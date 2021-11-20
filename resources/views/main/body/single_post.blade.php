@extends('main.home_master')
@section('title',$post->title_tr)
@section('meta_keywords',$post->keywords_tr)
@section('meta_description',$post->description_tr)
@section('content')
    <div class="container bg-light mt-4 mb-4 rounded shadow">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="detay__baslik"><h1>{{$post->title_tr}}</h1></div>
                <p class="detay__spot">{{$post->subtitle_tr}}</p>
                <ul class="detay__kategori list-unstyled">
                    <li class="float-left mr-2"><i class="far fa-circle detay__icon"></i>{{$category[0]->category_tr}}
                    </li>
                    <li class="float-left mr-2"><i
                            class="far fa-calendar-alt detay__icon"></i>{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('DD MMMM YYYY') }}
                        16:30
                    </li>
                    <li class="float-left mr-2"><i
                            class="far fa-clock detay__icon"></i>{{ Carbon\Carbon::parse($post->created_at)->isoFormat('HH:mm') }}
                    </li>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-2 mb-4">
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                <div class="reklam-alani mb-2 text-center">
                    <img src="" class="img-fluid" alt="">
                </div>
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                @if (!empty($post->posts_video))
                    <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/{{$post->posts_video }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                @else
                    <img src="{{$post->image}}" class="img-fluid w-100" alt="{{$post->title_tr}}">
                @endif

                <div class="wrapper">
                </div>

                <!--BU ALANA PHP SORGUSU İLE ÇOKLU RESİMLERDE SLİDER GÖSTERİLECEK-->
                <p class="detay__icerik mt-4">
                    {!!$post->details_tr!!}
                </p>
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                <div class="reklam-alani mb-2 text-center">
                    <img src="img/728x90.png" class="img-fluid" alt="reklam">
                </div>
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
                                        <img src="{{$sliders->image}}" class="detay-image ls-is-cached lazyloaded"
                                             alt="">
                                    </a>

                                </div>

                                <div class="position-relative bg-light text-dark" style="height: 60px"><p
                                        class=" detay-text d-table-cell align-middle">{{$sliders->title_tr}}</p></div>
                            </div>

                            @php
                                $k++;
                            @endphp
                        @endforeach

                    </div>
                </div>
                <div class="position-relative">
                    <p class="detay__sidebar-baslik mt-3"><b>SIRADAKİ</b> <span>HABERLER</span></p>
                </div>
                <div class="list-group detay__liste mt-4">
                    @php
                        $k=1;
                    @endphp
                    @foreach($nextrelated as $siradaki)
                        <a href="{{URL::to('/haber-'.str_slug($siradaki->title_tr).'-'.$siradaki->id)}}" class="list-group-item list-group-item-action detay__liste-item ">
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
                            <img src="img/336x280.png" alt="reklam">
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


            $(document).ready(function () {
                $(".detay-slider").slick({
                    autoplay: true,
                    dots: true,
                    arrows: false,

                    autoplaySpeed: 500000,

                    customPaging: function (slider, i) {
                        var thumb = $(slider.$slides[i]).data();
                        return '<a class="dot" style="bottom: 10%!important;">' + (i + 1) + '</a>';
                    },
                    responsive: [{
                        breakpoint: 500,
                        settings: {
                            dots: true,
                            arrows: false,
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }]
                });


            });

        </script>
@endsection
