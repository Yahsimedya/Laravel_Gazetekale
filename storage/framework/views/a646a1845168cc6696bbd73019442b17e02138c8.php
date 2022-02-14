<?php
    use App\Models\Category;
use App\Models\WebsiteSetting;
use Carbon\Carbon;

          $category = Cache()->remember("home-category", Carbon::now()->addYear(), function () {
            return category::where('category_status',1)->where('category_menu',1)->limit(11)->orderBy('category_order')->get();
        });
                  $Fullcategory = Cache()->remember("home-category", Carbon::now()->addYear(), function () {
            return category::where('category_status',1)->where('category_menu',1)->orderBy('category_order')->get();
        });
    $websetting = Cache()->remember("home-websitesetting", Carbon::now()->addYear(), function () {

            return WebsiteSetting::first();
        });
    $themeSetting = Cache()->remember("home-themeSetting", Carbon::now()->addYear(), function () {
return DB::table('themes')->get();
        });
  $vakitler = Cache()->remember("home-vakitler", Carbon::now()->addYear(), function () {

            return Session::get('vakitler');
        });
$kurlar=Session::get('kurlar');
$veri=Session::get('havadurumu');
$icon=Session::get('icon');
$gelenil=Session::get('gelenil');
if(!empty(Session::get('kurlar'))) {
$vakitler=Session::get('vakitler');
} else {
$vakitler = array(
            "imsak" => '0',
            "gunes" => '0',
            "ogle" => '0',
            "ikindi" => '0',
            "aksam" => '0',
            "yatsi" => '0',
        );
}
if(!empty(Session::get('kurlar'))) {
$kurlar=Session::get('kurlar');
} else{
    $kurlar=[
         'DOLAR' => [
                'oran' => '0',
                'oranyonu' => 0,00,
                'satis' => '0'

            ],
            'EURO' => [
                'oran' => '0',
                'oranyonu' => 0,00,
                'satis' => '0'
            ],
            'ALTIN' => [
                'oran' => '0',
                'oranyonu' => 0,00,
                'satis' => '0'

            ],
            'ceyrekaltin' => [
                'oran' => '0',
                'oranyonu' => 0,00,
                'satis' => '0'
            ]

];
}
?>
<style>

    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 220px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        left: 220px;
        width: 0;
        height: 100%;
        margin-left: -220px;
        overflow-y: auto;
        overflow-x: hidden;
        background: #1a1a1a;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #sidebar-wrapper::-webkit-scrollbar {
        display: none;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 220px;
    }

    #page-content-wrapper {
        width: 100%;
        padding-top: 70px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -220px;
    }

    /*-------------------------------*/
    /*     Sidebar nav styles        */
    /*-------------------------------*/
    .navbar {
        padding: 0;
    }

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 220px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        position: relative;
        line-height: 20px;
        display: inline-block;
        width: 100%;
    }

    .sidebar-nav li:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        height: 100%;
        width: 3px;
        background-color: #1c1c1c;
        -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
        -ms-transition:  width .2s ease-in;
        transition: width .2s ease-in;

    }
    .sidebar-nav li:first-child a {
        color: #fff;
        background-color: #1a1a1a;
    }
    .sidebar-nav li:nth-child(5n+1):before {
        background-color: #ec1b5a;
    }
    .sidebar-nav li:nth-child(5n+2):before {
        background-color: #79aefe;
    }
    .sidebar-nav li:nth-child(5n+3):before {
        background-color: #314190;
    }
    .sidebar-nav li:nth-child(5n+4):before {
        background-color: #279636;
    }
    .sidebar-nav li:nth-child(5n+5):before {
        background-color: #7d5d81;
    }

    .sidebar-nav li:hover:before,
    .sidebar-nav li.open:hover:before {
        width: 100%;
        -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
        -ms-transition:  width .2s ease-in;
        transition: width .2s ease-in;

    }

    .sidebar-nav li a {
        display: block;
        color: #ddd !important;
        text-decoration: none;
        padding: 10px 15px 10px 30px;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus,
    .sidebar-nav li.open a:hover,
    .sidebar-nav li.open a:active,
    .sidebar-nav li.open a:focus{
        color: #fff;
        text-decoration: none;
        background-color: transparent;
    }
    .sidebar-header {
        text-align: center;
        font-size: 20px;
        position: relative;
        width: 100%;
        display: inline-block;
    }
    .sidebar-brand {
        height: 65px;
        position: relative;
        background:#212531;
        background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
        padding-top: 1em;
    }
    .sidebar-brand a {
        color: #ddd;
    }
    .sidebar-brand a:hover {
        color: #fff;
        text-decoration: none;
    }
    .dropdown-header {
        text-align: center;
        font-size: 1em;
        color: #ddd;
        background:#212531;
        background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
    }
    .sidebar-nav .dropdown-menu {
        position: relative;
        width: 100%;
        padding: 0;
        margin: 0;
        border-radius: 0;
        border: none;
        background-color: #222;
        box-shadow: none;
    }
    .dropdown-menu.show {
        top: 0;
    }
    /*Fontawesome icons*/
    .nav.sidebar-nav li a::before {
        font-family: fontawesome;
        content: "\f12e";
        vertical-align: baseline;
        display: inline-block;
        padding-right: 5px;
    }
    a[href*="#home"]::before {
        content: "\f015" !important;
    }
    a[href*="#about"]::before {
        content: "\f129" !important;
    }
    a[href*="#events"]::before {
        content: "\f073" !important;
    }
    a[href*="#events"]::before {
        content: "\f073" !important;
    }
    a[href*="#team"]::before {
        content: "\f0c0" !important;
    }
    a[href*="#works"]::before {
        content: "\f0b1" !important;
    }
    a[href*="#pictures"]::before {
        content: "\f03e" !important;
    }
    a[href*="#videos"]::before {
        content: "\f03d" !important;
    }
    a[href*="#books"]::before {
        content: "\f02d" !important;
    }
    a[href*="#art"]::before {
        content: "\f1fc" !important;
    }
    a[href*="#awards"]::before {
        content: "\f02e" !important;
    }
    a[href*="#services"]::before {
        content: "\f013" !important;
    }
    a[href*="#contact"]::before {
        content: "\f086" !important;
    }
    a[href*="#followme"]::before {
        content: "\f099" !important;
        color: #0084b4;
    }
    /*-------------------------------*/
    /*       Hamburger-Cross         */
    /*-------------------------------*/

    .hamburger {
        position: absolute;
        top: 20px;
        z-index: 999;
        display: block;
        width: 32px;
        height: 32px;
        margin-left: 15px;
        background: transparent;
        border: none;
    }
    .hamburger:hover,
    .hamburger:focus,
    .hamburger:active {
        outline: none;
    }
    .hamburger.is-closed:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom,
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        position: absolute;
        left: 0;
        height: 4px;
        width: 100%;
    }
    .hamburger.is-closed .hamb-top,
    .hamburger.is-closed .hamb-middle,
    .hamburger.is-closed .hamb-bottom {
        background-color: #1a1a1a;
    }
    .hamburger.is-closed .hamb-top {
        top: 5px;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed .hamb-middle {
        top: 50%;
        margin-top: -2px;
    }
    .hamburger.is-closed .hamb-bottom {
        bottom: 5px;
        -webkit-transition: all .35s ease-in-out;
    }

    .hamburger.is-closed:hover .hamb-top {
        top: 0;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-closed:hover .hamb-bottom {
        bottom: 0;
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-middle,
    .hamburger.is-open .hamb-bottom {
        background-color: #1a1a1a;
    }
    .hamburger.is-open .hamb-top,
    .hamburger.is-open .hamb-bottom {
        top: 50%;
        margin-top: -2px;
    }
    .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    }
    .hamburger.is-open .hamb-middle { display: none; }
    .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
    }
    .hamburger.is-open:before {
        content: '';
        display: block;
        width: 100px;
        font-size: 14px;
        color: #fff;
        line-height: 32px;
        text-align: center;
        opacity: 0;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transition: all .35s ease-in-out;
    }
    .hamburger.is-open:hover:before {
        opacity: 1;
        display: block;
        -webkit-transform: translate3d(-100px,0,0);
        -webkit-transition: all .35s ease-in-out;
    }

    /*-------------------------------*/
    /*            Overlay            */
    /*-------------------------------*/

    .overlay {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(250,250,250,.8);
        z-index: 1;
    }
</style>








<header class="border-top border-dark bg-light shadow-sm">

    <div class="container position-relative">
        <div class="row">

            <div id="wrapper">
                <div class="overlay"></div>

                <!-- Sidebar -->
                <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">

                    <ul class="nav sidebar-nav">
                        <div class="sidebar-header">
                            <div class="sidebar-brand">
                                <a href="#"><img class=" img-fluid" src="<?php echo e(asset($websetting->logo)); ?>"
                                                 alt=""></a></div></div>
                        <form class="search-form" action="<?php echo e(route('search')); ?>" method="POST" role="search">
                            <?php echo csrf_field(); ?>

                            <div class="form-outline">
                                <input type="search" id="form1" class="form-control" placeholder="arama yap" aria-label="Search" />
                            </div>
                        </form>
                        <li><a href="#home">Ana Sayfa</a></li>

                    <?php $__currentLoopData = $Fullcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item active position-relative">
                                <div class="nav-item-hover position-absolute"></div>
                                <a class="nav-link " href="<?php echo e(URL::to('/category/' . str_slug($categories->category_tr) .'/'. $categories->id)); ?>"><?php echo e($categories->category_tr); ?> <span class="sr-only">(current)</span></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item active position-relative">
                            <div class="nav-item-hover position-absolute"></div>
                            <a class="nav-link " href="#">Yerel <span class="sr-only">(current)</span></a>

                        </li>
                        <li class="list-group-item active position-relative">
                            <div class="nav-item-hover position-absolute"></div>
                            <a class="nav-link " href="<?php echo e(route('yerelhaberler')); ?>">İller <span class="sr-only">(current)</span></a>
                        </li>

                    </ul>
                </nav>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->


<a class="navbar-brand p-2" href="<?php echo e(URL::to('/')); ?>"><img class="logo img-fluid" src="<?php echo e(asset($websetting->logo)); ?>"
                                                                            alt=""></a>

                    <button type="button" class="hamburger animated fadeInLeft is-closed d-block d-sm-none" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>




                <span class="">  </span>
            </div>
            <div class="clearfix"></div>
            <!-- Arama Butonu Alanı -->
            <div class=" mx-auto my-auto">
                <ul class="list-group list-group-horizontal my-auto" style="font-size: 15px;">
                    <li class="list-group-item font-weight-bold border-0 pr-1 pl-1"><?php echo e($gelenil); ?><span class="float-right pl-3"><?php echo e($veri); ?>&deg;<?php echo $icon; ?></span></li>
                    <li class="list-group-item  border-right text-scondary  pr-1 pl-1 border-0 border-0 d-none d-sm-block "><i
                            class="fa fa-pencil color-fume pr-1 pl-1 "></i><a class="color-fume" href="<?php echo e(route('author')); ?>">Yazarlar</a>
                    </li>
                    <li class="list-group-item float-left border-right  pr-1 pl-1 border-0"><i class="fa fa-stethoscope color-fume pr-1"></i><a class="color-fume" href="<?php echo e(route('nobetciEczane')); ?>">Nöbetçi
                            Eczane</a>
                    </li>
                    <li class="list-group-item float-left border-right pr-1 pl-1 border-0"><i class="fa fa-briefcase color-fume pr-1"></i><a class="color-fume" href="<?php echo e(route('cenazeilanlari')); ?>">Cenaze
                            İlanları</a>
                    </li>
                    
                    
                </ul>

            </div>

            <div class="navbar-right position-absolute">
                <form class="search-form" action="<?php echo e(route('search')); ?>" method="POST" role="search">
                    <?php echo csrf_field(); ?>
                    <div class="form-group pull-right" id="search">
                        <input type="text" name="searchtext" class="form-control" placeholder="Ara">
                        <button type="submit" class="form-control form-control-submit">Submit</button>
                        <span class="search-label"><i class="fa fa-search"></i></span>
                    </div>
                </form>
            </div>















































                <!-- /#page-content-wrapper -->



            <!-- /#wrapper -->
                <script>
                    $(document).ready(function () {
                        var trigger = $('.hamburger'),
                            overlay = $('.overlay'),
                            isClosed = false;

                        trigger.click(function () {
                            hamburger_cross();
                        });

                        function hamburger_cross() {

                            if (isClosed == true) {
                                overlay.hide();
                                trigger.removeClass('is-open');
                                trigger.addClass('is-closed');
                                isClosed = false;
                            } else {
                                overlay.show();
                                trigger.removeClass('is-closed');
                                trigger.addClass('is-open');
                                isClosed = true;
                            }
                        }

                        $('[data-toggle="offcanvas"]').click(function () {
                            $('#wrapper').toggleClass('toggled');
                        });
                    });
                </script>

        </div>
    </div>
    <div class="container-fluid "  style="background-color: <?php echo e($themeSetting[0]->siteColorTheme); ?>">

        <div class="container">


                <!-- <a class="navbar-brand mx-a" href="#">Menü</a> -->






    <nav class="navbar navbar-expand-lg navbar-dark p-0 d-none d-lg-block">

                    <ul class="navbar-nav"  style="background-color: <?php echo e($themeSetting[0]->siteColorTheme); ?>">
                        <li class="nav-item active position-relative float-left">
                            <div class="nav-item-hover position-absolute"></div>
                            <a class="nav-link " href="#">Ana Sayfa </a>
                        </li>
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item active position-relative float-left">
                                <div class="nav-item-hover position-absolute"></div>
                                <a class="nav-link " href="<?php echo e(URL::to('/category/' . str_slug($categories->category_tr) .'/'. $categories->id)); ?>"><?php echo e($categories->category_tr); ?> <span class="sr-only">(current)</span></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
    </nav>

    


        </div>
    </div>

</header>
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/header.blade.php ENDPATH**/ ?>