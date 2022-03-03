<?php $__env->startSection('content'); ?>
    <?php
        $webSiteSetting=\App\Models\WebsiteSetting::first();
    ?>
    <div class="container mt-3">

        <?php if($count!=0): ?>
            <section class="">
                <div class="container bg-light mt-3 mb-3 shadow rounded">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" bg-light mt-3 border-bottom pb-3 pt-3">
                                <div class=" "><h3 class="text-secondary">

                                        <i class="fa fa-align-left mr-2 text-danger"
                                           style="color:<?php echo e($category->categorycolor); ?>!important;"></i><?php echo e($category->category_tr); ?>

                                        Haberleri</h3>
                                    <p><?php echo e($category->category_description); ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 kategori mt-3">
                            <div class="kategori-slider"
                                 style="background-color:<?php echo e($category->categorycolor); ?>!important;">

                                <?php $__currentLoopData = $manset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="position-relative">

                                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                                            <div class="kategori-text position-absolute"></div>
                                            <div class="kartlar__effect position-absolute">
                                                <div class="kategori-overlay"></div>
                                            </div>
                                            <img data-lazy="" src="<?php echo e(asset($row->image)); ?>"
                                                 onerror="this.onerror=null;this.src='<?php echo e(asset($webSiteSetting->defaultImage)); ?>';"
                                                 class="kategori-image w-100" alt=""
                                                 style="max-height: 460px !important;">
                                        </a>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                            <!------------------728x90 REKLAM ALANI -------------------->

                            <div class="reklam-alani mt-3 mb-3 text-center">
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ad->type==1 && $ad->category_id==14): ?>
                                        <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                                     height="280"
                                                                     onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                                                     data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                                    <?php elseif($ad->type==2 && $ad->category_id==14): ?>
                                        <div class="w-100"><?php echo $ad->ad_code; ?></div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <?php $__currentLoopData = $catpost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 padding-left">

                                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                                            <div
                                                class="card shadow border-top-0 border-right-0 border-left-0 border-bottom-1 border-danger  d-inline-block  " style="color:<?php echo e($category->categorycolor); ?>!important;">
                                                <div class="position-relative">
                                                    <div class="kartlar__effect position-absolute">
                                                    </div>
                                                    <img class="card-img-top" src="<?php echo e(asset($row->image)); ?>"
                                                         onerror="this.onerror=null;this.src='<?php echo e(asset($webSiteSetting->defaultImage)); ?>';"
                                                         alt="img">
                                                </div>
                                                <div class="card-body align-middle d-table-cell">
                                                    <p class="card-baslik text-center d-table-cell"><b
                                                            class="card-kisalt"><?php echo e($row->title_tr); ?></b>
                                                    </p>
                                                    <span
                                                        class="card__kategori position-absolute" style="color: <?php echo e($category->categorycolor); ?>!important;"><?php echo e($category->category_tr); ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                            <!--REKLAM ALANI-->
                            <div class="reklam-alani mb-2 col-md-4 mt-1 padding-left text-center">
                                <!------------------250x250  KATEGORİ LİSTELEME REKLAM ALANI -------------------->
                                <!------------------728x90 REKLAM ALANI -------------------->

                                <div class="reklam-alani mt-3 mb-3 text-center">
                                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($ad->type==1 && $ad->category_id==10): ?>
                                            <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload"
                                                                         width="336"
                                                                         height="280"
                                                                         onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                                                         data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                                        <?php elseif($ad->type==2 && $ad->category_id==10): ?>
                                            <div class="w-100"><?php echo $ad->ad_code; ?></div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            <?php echo e($catpost->links('pagination-links')); ?>



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
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ad->type==1 && $ad->category_id==11): ?>
                                        <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                                     height="280"
                                                                     onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                                                     data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                                    <?php elseif($ad->type==2 && $ad->category_id==11): ?>
                                        <div class="w-100"><?php echo $ad->ad_code; ?></div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="reklam-alani mt-3 text-center">

                            </div>

                            <div class="position-relative">
                                <p class="detay__sidebar-baslik mt-3"><b>SIRADAKİ</b> <span>HABERLER</span></p>
                            </div>
                            <div class="list-group detay__liste mt-4">
                                <?php
                                    $i=0;
                                ?>
                                <?php $__currentLoopData = $nextnews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $i++;
                                    ?>
                                    <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>"
                                       class="list-group-item list-group-item-action detay__liste-item ">
                                        <i class="detay__liste-rakam d-table-cell align-middle"
                                           style="color:<?php echo e($category->categorycolor); ?>!important;"><?php echo e($i); ?></i>
                                        <span class="d-table-cell"><?php echo e($news->title_tr); ?></span>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="reklam-alani mt-3 mb-3 text-center">
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ad->type==1 && $ad->category_id==13): ?>
                                        <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                                     height="280"
                                                                     onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                                                     data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                                    <?php elseif($ad->type==2 && $ad->category_id==13): ?>
                                        <div class="w-100"><?php echo $ad->ad_code; ?></div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="col-md-12 padding-left position-relative">
                                <div class="card-header card-yazarlar position-relative ">


                                    <div class="card-yazarlar__link text-left pad"><b>Köşe</b> Yazarlarımız</div>
                                    <a href="<?php echo e(route('author')); ?>">
                                        <div class="card-yazarlar__tum position-absolute ">Tümü</div>
                                    </a>
                                </div>
                                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="">
                                        <div class="row  mt-2">

                                            <div class="col-md-4 col-4 col-sm-4">
                                                <img src="<?php echo e(asset($author->image)); ?>"
                                                     onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                                     class="rounded card-yazarlar__image" alt="">
                                            </div>
                                            <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                                                <div class="d-inline-block align-middle">
                                                    <div
                                                        class="card-yazarlar__isim d-inline-block"><?php echo e(Str::limit($author->name,17)); ?></div>
                                                    <div class="card-yazarlar__baslik d-table-cell "><p
                                                            class="card-kisalt"><?php echo e($author->title); ?></p></div>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                        </div>
                    </div>

            </section>






        <?php else: ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12  bg-light shadow d-flex w-100 mb-5" style="min-height: 400px;">
                        <h3 class="text-secondary text-center mx-auto my-auto">Kategoride Haber Bulunamadı</h3>
                    </div>

                </div>
            </div>
        <?php endif; ?>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/category_post.blade.php ENDPATH**/ ?>