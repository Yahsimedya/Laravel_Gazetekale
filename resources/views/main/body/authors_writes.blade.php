@foreach($yazi as $yazilar)

    @section('title',$yazilar->title)
@section('meta_keywords',$yazilar->title)
@section('meta_description',$yazilar->title)
@extends('main.home_master')

@section('content')
    @endforeach
    <section>

        <div class="container bg-light mt-4 mb-4 rounded shadow">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="detay__baslik"><h1>{{$yazilar->title}}</h1></div>

                    <ul class="detay__kategori list-unstyled">
                        <li class="float-left mr-2"><i
                                class="far fa-calendar-alt detay__icon"></i>{{date('d-m-Y', strtotime($yazilar->created_at))}}
                        </li>
                        <li class="float-left mr-2"><i
                                class="far fa-clock detay__icon"></i>{{date('H:i:s', strtotime($yazilar->created_at))}}
                        </li>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 mt-0 mb-4">
                    <div class="float-left mr-0 m-2 position-relative mt-3 col-md-12">

                    </div>


                    <p class="detay__icerik mt-4">@php
                            echo  $yazilar->text;
                        @endphp</p>
                    <!------------------728x90 İÇERİK ALTI REKLAM ALANI -------------------->


                    <div class="reklam-alani mt-3 mb-3 text-center">
                        <a target="_blank" href="#"><img src="" class="img-fluid" alt="Reklam"></a>
                    </div>

                    <div class="reklam-alani mt-3 text-center">


                    </div>


                    <!----------------728x90 İÇERİK ALTI ALANI -------------------->


                    <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->

                    <!-----------------Diğer Yazarlarımız------------------>
                    <div class="card bg-light mb-2 mt-2">
                        <div class="card-header"><h3 class="text-secondary"><i class="fa fa-commenting mr-2"></i>Diğer
                                Yazarlarımız</h3></div>
                    </div>
                    <div class="row">

                        @foreach($otherauthos as $other)
                            <div class="col-md-4 col-md-6 col-sm-12">
                                <div class="row  m-2 padding-left p-0 rounded border">
                                    <div class="col-lg-4  col-md-4 col-sm-4 col-4  p-0 border-right">
                                        <img src="{{asset($other->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';" class="img-fluid" alt="">
                                    </div>

                                    <div class="col-lg-8  col-md-8 col-sm-8 col-8">
                                        <p class="mt-3 mb-0 text-muted">{{$other->title}}</p>
                                        <p class="text-info pb-1 mb-0 border-muted border-bottom">{{$other->name}}</p>
                                        <a href="{{route('authors.yazilar',[str_slug($other->title),$other->id])}}" class=" position-relative text-secondary"><i
                                                class=" fa fa-caret-right mr-1"></i>Son Makaleyi Oku</a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-----------------Diğer Yazarlarımız------------------>

                </div>

                <div class="col-md-4 mb-4  detay__sidebar">
                    <div class="detay col-12 p-0  border shadow">
                        <div class="detay-slider">
                            @php
                                $yazardes=DB::table('authors')->where('id','=',$yazilar->authors_id)->get();
                            @endphp
                            @foreach($yazardes as $yazars)
                            <div class="position-relative align-middle col-lg-12" style="width: 100%;">

                                <div class="kapsayici position-relative">
                                    <div class="kartlar__effect position-absolute">
                                    </div>
                                    <img src="{{asset($yazars->image)}}" onerror="this.onerror=null;this.src='{{$webSiteSetting->defaultImage}}';"
                                         class="detay-image" style="width: 100%;
    max-height: 250px;
    object-fit: contain;" alt="">
                                </div>

                                <div class="position-relative bg-dark text-dark">
                                    <p class=" detay-text text-center text-light align-middle" style="height: auto;">
                                        <b>{{$yazars->name}}</b></p>
                                    <div class="row text-center p-2">
                                        <div class="col-md-3 p-1">
                                            <a target="_blank" href="{{$yazars->facebook}}"><i
                                                    class="fa fa-facebook-square text-light p-2  border border-primary rounded-circle"
                                                    style="font-size:25px;"></i>
                                                <p class="text-light">Facebook</p></a>
                                        </div>
                                        <div class="col-md-3 p-1">
                                            <a target="_blank" href="{{$yazars->twitter}}"><i
                                                    class="fa fa-twitter-square text-light p-2  border border-primary rounded-circle"
                                                    style="font-size:25px;"></i>
                                                <p class="text-light">Twitter</p></a>

                                        </div>
                                        <div class="col-md-3 p-1"><a target="_blank"
                                                                     href="#"><i
                                                    class="fa fa-instagram text-light p-2  border border-info rounded-circle"
                                                    style="font-size:25px;"></i>
                                                <p class="text-light">İnstagram</p></a>

                                        </div>
                                        <div class="col-md-3 p-1"><a target="_blank"
                                                                     href="{{$yazars->youtube}}"><i
                                                    class="fa fa-youtube-square text-light p-2  border border-danger rounded-circle"
                                                    style="font-size:25px;"></i>
                                                <p class="text-light">Youtube</p></a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>

                    <div class="position-relative">
                        <p class="detay__sidebar-baslik mt-3"><b>SIRADAKİ</b> <span>Yazıları</span></p>
                    </div>
                    <div class="list-group detay__liste mt-4">
                        @php
                            $i=0;
                        @endphp
                        @foreach ($nextauthors_posts as $row )
                            @php
                                $i++;
                            @endphp
                        <a href="{{route('authors.yazilar',[str_slug($row->title),$row->id])}}"
                           class="list-group-item list-group-item-action detay__liste-item ">
                            <i class="detay__liste-rakam d-table-cell align-middle"><?php echo $i; ?></i>
                            <span class="d-table-cell">  {{ Str::ucFirst($row->title) }}</span>
                        </a>

                            @endforeach

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!------------------336x280 REKLAM ALANI -------------------->

                            <div class="reklam-alani mt-3 mb-3 text-center">
                                <a target="_blank" href=""><img
                                        src=""
                                        class="img-fluid" alt="Reklam"></a>
                            </div>

                            <div class="reklam-alani mt-3 text-center">

                            </div>

                        <!----------------336x280 REKLAM ALANI -------------------->
                        </div>
                    </div>


                </div>


            </div>

        </div>
        <!-- <div id="load_data"></div>
     <div id="load_data_message"></div> -->
        </div>


    </section>









@endsection
























