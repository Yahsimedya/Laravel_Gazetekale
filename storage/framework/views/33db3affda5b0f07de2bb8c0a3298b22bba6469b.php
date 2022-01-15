<?php $__env->startSection('title',$post->title_tr); ?>
<?php $__env->startSection('meta_keywords',$post->keywords_tr); ?>
<?php $__env->startSection('meta_description',$post->description_tr); ?>
<?php $__env->startSection('google_analytics',$seoset->google_analytics); ?>
<?php $__env->startSection('og:site_name',$seoset->meta_title); ?>
<?php $__env->startSection('og:title',$post->title_tr); ?>
<?php $__env->startSection('og:description',$post->title_tr); ?>
<?php $__env->startSection('og:image',asset($post->image)); ?>
<?php $__env->startSection('og:url',url()->current()); ?>
<?php $__env->startSection('twitter:url',url()->current()); ?>
<?php $__env->startSection('twitter:domain',Request::root()); ?>
<?php $__env->startSection('twitter:site',$seoset->meta_title); ?>
<?php $__env->startSection('twitter:title',$post->title_tr); ?>
<?php $__env->startSection('content'); ?>
<?php
        $webSiteSetting=\App\Models\WebsiteSetting::first();
    $themeSetting=DB::table('themes')->get();

    ?>
    <style>
    .detay__icon::before{
    color: <?php echo e($themeSetting[0]->siteColorTheme); ?>  !important;
    }
    .detay__liste-rakam{
        color: <?php echo e($themeSetting[0]->siteColorTheme); ?>  !important;

    }
    .slick-active, .slick li{
        background-image:radial-gradient(farthest-side at 102% 2%, <?php echo e($themeSetting[0]->siteColorTheme); ?>, <?php echo e($themeSetting[0]->siteColorTheme); ?>);
    }
    .detay li{
        border:1px solid <?php echo e($themeSetting[0]->siteColorTheme); ?>  !important;
    }
    </style>
    <div class="container bg-light mt-4 mb-4 rounded shadow">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="detay__baslik"><h1><?php echo e($post->title_tr); ?></h1></div>
                <p class="detay__spot"><?php echo e($post->subtitle_tr); ?></p>
                <ul class="detay__kategori list-unstyled">
                    <li class="float-left mr-2"><i class="far fa-circle detay__icon"></i><?php echo e($post->category->category_tr); ?>

                    </li>
                    <li class="float-left mr-2"><i
                            class="far fa-calendar-alt detay__icon"></i><?php echo e(\Carbon\Carbon::parse($post->created_at)->isoFormat('DD MMMM YYYY')); ?>

                    </li>
                    <li class="float-left mr-2"><i
                            class="far fa-clock detay__icon"></i><?php echo e(Carbon\Carbon::parse($post->created_at)->isoFormat('HH:mm')); ?>

                    </li>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-2 mb-4">
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                <?php if(!empty($post->posts_video)): ?>
                    <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/<?php echo e($post->posts_video); ?>"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                <?php else: ?>
                    <img src="<?php echo e($post->image); ?>"  onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" class="img-fluid w-100" alt="<?php echo e($post->title_tr); ?>">
                <?php endif; ?>

                <div class="wrapper">
                </div>

                <!--BU ALANA PHP SORGUSU İLE ÇOKLU RESİMLERDE SLİDER GÖSTERİLECEK-->
                <p class="detay__icerik mt-4">
                    <?php echo $post->details_tr; ?>

                </p>

                <p class="detay__icerik mt-4">
                   <?php $__currentLoopData = $orderImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset($Images->image)); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" class="img-fluid w-100 mb-3">


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>


                <div class="wrapper">

                    <div class="navbar-social">
                        <a href="https://twitter.com/share?url=<?php echo e(URL::to('/haber-'.str_slug($post->title_tr).'-'.$post->id)); ?>" class="icon-button twitter"><i class="icon-twitter fa fa-twitter"></i><span></span></a>
                        <a href="https://www.facebook.com/sharer.php?u=<?php echo e(URL::to('/haber-'.str_slug($post->title_tr).'-'.$post->id)); ?>" class="icon-button facebook"><i class="icon-facebook fa fa-facebook"></i><span></span></a>
                        <a href="https://youtube.com/gazetekale" target="_blank" class="icon-button google-plus"><i class="icon-youtube fa fa-youtube"></i><span></span></a>
                    </div>
                </div>










                <?php if($tagCount>=1): ?>

                    <?php $__currentLoopData = $maybeRelated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->post_id)); ?>">
                            <div class="row p-3 border-top">
                                <div class="col-md-5"><img height="200" class="img-fluid lazyload" src="<?php echo e(asset($row->image)); ?>"></div>
                                <div class="col-md-7 my-auto">
                                    <small class="font-weight-bold text-secondary">İlginizi Çekebilir</small>
                                    <p class="card-kisalt font-weight-bold"><?php echo e($row->title_tr); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                <div class="reklam-alani mb-2 text-center">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ad->type==1 && $ad->category_id==12): ?>
                            <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                         height="280"
                                                         data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                        <?php elseif($ad->type==2 && $ad->category_id==12): ?>
                            <div class="w-100"><?php echo $ad->ad_code; ?></div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 bg-light  border-bottom">

                        <p class="">
                            <i class="fa fa-user"></i> <?php echo e($comment->name); ?><br/>


                            <i class="fa fa-envelope"></i> <?php echo e($comment->details); ?><br/></p>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="card bg-light mb-2" style="min-height:0;">
                    <div class="card-header">
                        <h3 class="text-secondary"><i class="fa fa-commenting mr-2"></i>YORUM EKLE</h3>
                    </div>
                </div>


                <form action="<?php echo e(route('add.comments',$post->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group w-100">
                        <input type="hidden" name="posts_id" value="<?php echo e($post->id); ?>">
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
                        <?php
                            $k=1;
                        ?>
                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="position-relative d-table-cell align-middle">

                                <div class="kapsayici position-relative">
                                    <a href="<?php echo e(URL::to('/haber-'.str_slug($sliders->title_tr).'-'.$sliders->id)); ?>">

                                        <div class="kartlar__effect position-absolute">
                                        </div>
                                        <img src="<?php echo e($sliders->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" class="detay-image ls-is-cached lazyloaded"
                                             alt="">
                                    </a>

                                </div>

                                <div class="position-relative bg-light text-dark" style="height: 60px"><p
                                        class=" detay-text d-table-cell align-middle"><?php echo e($sliders->title_tr); ?></p></div>
                            </div>

                            <?php
                                $k++;
                            ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="reklam-alani mb-2 text-center">
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ad->type==1 && $ad->category_id==1): ?>
                            <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                         height="280"
                                                         data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                        <?php elseif($ad->type==2 && $ad->category_id==1): ?>
                            <div class="w-100"><?php echo $ad->ad_code; ?></div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="position-relative">
                    <p class="detay__sidebar-baslik mt-3"><b>SIRADAKİ</b> <span>HABERLER</span></p>
                </div>
                <div class="list-group detay__liste mt-4">
                    <?php
                        $k=1;
                    ?>
                    <?php $__currentLoopData = $nextrelated; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siradaki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($siradaki->title_tr).'-'.$siradaki->id)); ?>" class="list-group-item list-group-item-action detay__liste-item ">
                            <i class="detay__liste-rakam d-table-cell align-middle"><?php echo e($k); ?></i>
                            <span class="d-table-cell"><?php echo e($siradaki->title_tr); ?></span>
                        </a>
                        <?php
                            $k++;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!--REKLAM ALANI BAL LİGİ ÜSTÜ-->
                        <div class="reklam-alani mt-2 text-center">
                            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ad->type==1 && $ad->category_id==3): ?>
                                    <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                                 height="280"
                                                                 data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                                <?php elseif($ad->type==2 && $ad->category_id==3): ?>
                                    <div class="w-100"><?php echo $ad->ad_code; ?></div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/single_post.blade.php ENDPATH**/ ?>