@php
    use App\Models\Category;
use App\Models\WebsiteSetting;
    $category=Category::limit(11)->get();
    $websetting=WebsiteSetting::first();
    $themeSetting=DB::table('themes')->get();
$themeSetting=DB::table('themes')->get();
$vakitler=Session::get('vakitler');
$kurlar=Session::get('kurlar');
$veri=Session::get('havadurumu');
$icon=Session::get('icon');
$gelenil=Session::get('gelenil');
@endphp
<header class="border-top border-dark bg-light shadow-sm">

    <div class="container p-3">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand " href="{{URL::to('/')}}"><img class="logo" src="{{asset($websetting->logo)}}"
                                                                  alt=""></a>

            <div class="navbar__havadurumu ml-5 d-none d-sm-block">


                <div class="navbar__il float-left pr-3"><b>{{$gelenil}}</b>

                    <span class="float-right pl-3">{{$veri}}&deg;</span>
                </div>
                <br/>
                {!!$icon!!}

                <span class="">  </span>
            </div>


            <div class="clearfix"></div>

            <!-- Arama Butonu Alanı -->
            <div class="navbar-right">

                <form class="search-form" role="search">
                    <div class="form-group pull-right" id="search">
                        <input type="text" class="form-control" placeholder="Ara">
                        <button type="submit" class="form-control form-control-submit">Submit</button>
                        <span class="search-label"><i class="fa fa-search"></i></span>
                    </div>
                </form>
                <div class="header__top-bilgi mt-4 position-absolute d-none d-lg-block">
                    <ul class="list-unstyled">
                        <li class="float-left ml-1 border-right text-scondary  pr-1"><i
                                class="fa fa-pencil color-fume pr-1"></i><a class="color-fume" href="#">Yazarlar</a>
                        </li>
                        <li class="float-left ml-1 border-right  pr-1"><i class="fa fa-stethoscope color-fume pr-1"></i>Nöbetçi
                            Eczane
                        </li>
                        <li class="float-left ml-1 border-right  pr-1"><i class="fa fa-briefcase color-fume pr-1"></i>İş
                            İlanları
                        </li>
                        <a href="{{URL::to('/sayfa/3')}}" style="color:black ">
                            <li class="float-left ml-1 border-right  pr-1"><i
                                    class="fa fa-map-marker color-fume pr-1"></i>Künye
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- Arama Butonu Alanı -->
        </nav>
    </div>

    <div class="container-fluid bg-bordo shadow-sm">

        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <!-- <a class="navbar-brand mx-a" href="#">Menü</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        @foreach($category as $categories)
                            <li class="nav-item active position-relative">
                                <div class="nav-item-hover position-absolute"></div>
                                <a class="nav-link " href="#">{{$categories->category_tr}} <span class="sr-only">(current)</span></a>
                            </li>
                        @endforeach

                        <li class="nav-item active position-relative">
                            <div class="nav-item-hover position-absolute"></div>
                            <a class="nav-link " href="#">Yerel <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</header>
