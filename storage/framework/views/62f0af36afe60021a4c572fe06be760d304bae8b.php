<?php $__env->startSection('title',$seoset->meta_title); ?>
<?php $__env->startSection('meta_keywords',$seoset->meta_keyword); ?>
<?php $__env->startSection('meta_description',htmlspecialchars_decode(stripslashes($seoset->meta_description),ENT_QUOTES)); ?>
<?php $__env->startSection('google_analytics',$seoset->google_analytics); ?>
<?php $__env->startSection('google_verification',$seoset->google_verification); ?>
<?php $__env->startSection('content'); ?>
    <?php

    ?>
    <?php
        $socials = DB::table('socials')->get();


  $vakitler = Cache()->remember("home-vakitler", 60*60*24, function () {

            return Session::get('vakitler');
        });
  $kurlar=Session::get('kurlar');
$veri=Session::get('havadurumu');
$icon=Session::get('icon');
$gelenil=Session::get('gelenil');

    ?>

    <style>
        .owl-theme .owl-dots .owl-dot.active span {
            background-color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }

        .slider_span {
            background-color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }

        .owl-prev, .anaslider-prev {
            color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }

        .owl-next, .anaslider-prev {
            color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }

        .ilceler__baslik {
            color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;

        }

        .ilceler__nav-link.active {
            color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
            border: 1px solid <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }

        .ilceler__nav-link:hover {
            color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }

        .tns-nav-active {
            background-color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }

        .pl-1:hover {
            color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }
        .kartlar__header::before{
            border-left:2px solid <?php echo e($themeSetting->siteColorTheme); ?>  !important;
        }
        .slick-active, .slick li{
            background-image:radial-gradient(farthest-side at 102% 2%, <?php echo e($themeSetting->siteColorTheme); ?>, <?php echo e($themeSetting->siteColorTheme); ?>);
        }
        .video li{
            border:1px solid <?php echo e($themeSetting->siteColorTheme); ?> ;
        }
        .slick-prev:before, .slick-next:before{
            color: <?php echo e($themeSetting->siteColorTheme); ?>  !important;

        }


    </style>
    <script>
        $(document).ready(function (e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#havadurum select').on('change', function () {
                e = $('#ilsec').val();
// var str =$(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('il.home')); ?>",
                    headers: {'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'},
                    data: {ilsec: $('#ilsec').val()},
                    success: function (donen) {
                        veri = donen;
                        console.log(veri);
                        $('#ilsec').attr("disabled", false);
                        $('#cek').html(veri);
                    },
                })
            });

        });
    </script>
    <?php echo $__env->make('main.body.widget.headline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--SONDAKİKA HABER BANDI-->
    <!--AÇILIP KAPANABİLİR REKLAM ALANI-->

    <div class="container text-center mt-2 position-relative">
        <div class="row">
            <div class="col-12 padding-left">
                <div class="kapat float-left"><a id="kapat" class="kapat__link rounded" href="">X</a></div>
                <!-- <div class="kapat position-absolute float-right"><a id="ac" class="kapat__link" href="">Reklamı Aç</a></div> -->

                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($ad->type==1 && $ad->category_id==9): ?>
                        <a target="_blank" href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-3 lazyload" width="1140"
                                                                     height="250"
                                                                     data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                    <?php elseif($ad->type==2 && $ad->category_id==9): ?>
                        <div class="w-100"><?php echo $ad->ad_code; ?></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!--AÇILIP KAPANABİLİR REKLAM ALANI-->

    <!--SÜRMENŞET BAŞLAR-->
    <?php echo $__env->make('main.body.widget.surmanset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--SÜRMENŞET BİTER-->



    <!--SLİDER BAŞLAR-->
    <section class="w-100">
        <div class="container">
            <div class="row">
            <?php echo $__env->make('main.body.widget.anaslider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--YAN SLİDER ALANI BAŞLAR-->
                <?php echo $__env->make('main.body.widget.yanslider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </section>

    <!--DÖVİZ KURLARI BAŞLANGIÇ-->
    <?php echo $__env->make('main.body.widget.dovizkurlari', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--DÖVİZ KURLARI BİTİŞ-->

    <!--NAMAZ VAKİTLERİ BAŞLAR-->
    <?php echo $__env->make('main.body.widget.namazvakitleri', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--NAMAZ VAKİTLERİ BİTER-->


    <!--Youutube BAŞLAR-->
    <?php echo $__env->make('main.body.widget.youtube', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Youutube BİTER-->

    <?php echo $__env->make('main.body.widget.ilceler', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="reklam-alani mb-3 mt-3 text-center">
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->type==1 && $ad->category_id==19): ?>
                <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                             height="280"
                                             data-src="<?php echo e(asset($ad->ads)); ?>"></a>
            <?php elseif($ad->type==2 && $ad->category_id==19): ?>
                <div class="w-100"><?php echo $ad->ad_code; ?></div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!--VİDEO GALERİ ÜSTÜ REKLAM Biter-->
    <?php echo $__env->make('main.body.widget.uclukart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!--SLİDER ALT KARTLAR-->
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->
    <div class="reklam-alani mb-3 mt-3 text-center">
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->type==1 && $ad->category_id==15): ?>
                <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                             height="280"
                                             data-src="<?php echo e(asset($ad->ads)); ?>"></a>
            <?php elseif($ad->type==2 && $ad->category_id==15): ?>
                <div class="w-100"><?php echo $ad->ad_code; ?></div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!--VİDEO GALERİ ÜSTÜ REKLAM ALANI-->

    <?php echo $__env->make('main.body.widget.videogaleri', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->

    <section class="">
        <div class="container mt-3">
            <div class="row ">
            <?php echo $__env->make('main.body.widget.egitimkultur', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <?php echo $__env->make('main.body.widget.authorsList', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->

                <!--PUAN DURUMU-->
                <!--PUAN DURUMU-->
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                <div class="reklam-alani text-center">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ad->type==1 && $ad->category_id==18): ?>
                            <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                         height="280"
                                                         data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                        <?php elseif($ad->type==2 && $ad->category_id==18): ?>
                            <div class="w-100"><?php echo $ad->ad_code; ?></div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->

                <div class="spor mt-2">
                    <div class="card-header card-spor  position-relative">
                        <div class=" card-spor__link text-left pad"><b>Süper Lig</b> Puan Durumu</div>
                        <!-- <a href="#"><div class=" position-absolute ">Tümü</div></a> -->
                    </div>
                    <?php echo $__env->make('main.body.puan-durumu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ad->type==1 && $ad->category_id==22): ?>
                            <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                         height="280"
                                                         data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                        <?php elseif($ad->type==2 && $ad->category_id==22): ?>
                            <div class="w-100"><?php echo $ad->ad_code; ?></div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="reklam-alani text-center">

                </div>
            </div>
            <!--SAĞ TARAF TEK SUTUN YAZARLAR PUSNA DURUMU VS-->
        </div>
        </div>
    </section>

    <!--KARIŞIK HABERLER VE SPOR Ve YAZARLAR-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/home.blade.php ENDPATH**/ ?>