
<div
    class="col-md-12 col-sm-12 col-xs-12 col-lg-4 d-none d-md-block text-center position-relative yanslider padding-left">

    <ul class="nav nav-tabs yan__kategori">
        <li class="active yan__kategori-li"><a class="yan__kategori-li-link" style="color: white!important;"
                                               data-toggle="tab" href="#home">Siyaset</a></li>
        <li class="yan__kategori-li"><a class="yan__kategori-li-link" style="color: white!important;" data-toggle="tab"
                                        href="#menu1">Spor</a></li>
        <li class="yan__kategori-li"><a class="yan__kategori-li-link" style="color: white!important;" data-toggle="tab"
                                        href="#menu2">3.Sayfa</a></li>
        <li class="yan__kategori-li"><a class="yan__kategori-li-link" style="color: white!important;" data-toggle="tab"
                                        href="#menu3">Özel</a></li>
    </ul>


    <div class="tab-content">
        <div id="home" class="tab-pane  active  in">

            <div class="owl-carousel owl-theme  shadow anaslider">
                <?php
                    $k=1;
                ?>
                <?php $__currentLoopData = $siyaset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <div class="item yanslider__yanitem position-relative" data-dot="<span><?php echo e($k); ?></span>">
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                            <?php if($webSiteSetting->slider_title==1): ?>
                                <div class="yanslider__effect position-absolute"></div>
                            <?php endif; ?>
                            <img data-src="<?php echo e($row->image); ?>"
                                 onerror="this.onerror=null;this.src='<?php echo e(asset($webSiteSetting->defaultImage)); ?>';"
                                 class="img-fluid owl-lazy" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class=" yanslider-link align-middle card-kisalt">
                                   <?php if($webSiteSetting->slider_title==1): ?> <?php echo e($row->title_tr); ?> <?php endif; ?>
                                </a>
                            </div>
                    </div>
                    </a>
                    <?php
                        $k++;
                    ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <div id="menu1" class="tab-pane ">
            <div class="owl-carousel owl-theme  shadow anaslider" id="">
                <?php
                    $k=1;
                ?>
                <?php $__currentLoopData = $spor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <div class="item yanslider__yanitem position-relative" data-dot="<span><?php echo e($k); ?></span>">
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                            <div class="yanslider__effect position-absolute"></div>
                            <img src="<?php echo e($row->image); ?>"
                                 onerror="this.onerror=null;this.src='<?php echo e(asset($webSiteSetting->defaultImage)); ?>';"
                                 class="img-fluid" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class=" yanslider-link align-middle card-kisalt">
                                    <?php echo e($row->title_tr); ?>

                                </a>
                            </div>
                    </div>
                    </a>
                    <?php
                        $k++;
                    ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="owl-carousel owl-theme  shadow anaslider" id="">
                <?php
                    $k=1;
                ?>
                <?php $__currentLoopData = $ucuncuSayfa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="item yanslider__yanitem position-relative" data-dot="<span><?php echo e($k); ?></span>">
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                            <div class="yanslider__effect position-absolute"></div>
                            <img src="<?php echo e($row->image); ?>"
                                 onerror="this.onerror=null;this.src='<?php echo e(asset($webSiteSetting->defaultImage)); ?>';"
                                 class="img-fluid" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class=" yanslider-link align-middle card-kisalt">
                                    <?php echo e($row->title_tr); ?>

                                </a>
                            </div>
                    </div>
                    </a>
                    <?php
                        $k++;
                    ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
        <div id="menu3" class="tab-pane fade">
            <div class="owl-carousel owl-theme  shadow anaslider" id="">
                <?php
                    $k=1;
                ?>
                <?php $__currentLoopData = $ozel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="item yanslider__yanitem position-relative" data-dot="<span><?php echo e($k); ?></span>">
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">

                            <div class="yanslider__effect position-absolute"></div>
                            <img src="<?php echo e($row->image); ?>"
                                 onerror="this.onerror=null;this.src='<?php echo e(asset($webSiteSetting->defaultImage)); ?>';"
                                 class="img-fluid" alt="">
                            <div class="yanslider__aciklama d-table-cell position-absolute">
                                <a href="" class="yanslider-link align-middle card-kisalt">
                                    <?php echo e($row->title_tr); ?>

                                </a>
                            </div>
                        </a>
                    </div>
                    <?php
                        $k++;
                    ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>
    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($ad->type==1 && $ad->category_id==17): ?>
            <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload"  onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                         data-src="<?php echo e(asset($ad->ads)); ?>"></a>
        <?php elseif($ad->type==2 && $ad->category_id==17): ?>
            <div class="w-100"><?php echo $ad->ad_code; ?></div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/widget/yanslider.blade.php ENDPATH**/ ?>