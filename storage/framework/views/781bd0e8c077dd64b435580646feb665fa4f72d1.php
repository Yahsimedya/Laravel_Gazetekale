<div class="col-md-8 padding-left mx-auto">

    <div class="card-header card-kutu position-relative"
         style="background-image:linear-gradient(-10deg, <?php echo e($themeSetting->economy); ?>, <?php echo e($themeSetting->politics); ?>);!important;border-bottom:3px solid <?php echo e($themeSetting->economy); ?> !important">
        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($categorys->id==$education[0]->category_id): ?>
                    <?php echo e($categorys->category_tr); ?>


                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a href="<?php echo e(URL::to('/Category/' . str_slug($education[0]->subcategory_tr) . $education[0]->category_id)); ?>">
            <div class="card-kutu__tum position-absolute ">Tümü</div>
        </a>
    </div>
    <div class="row padding-left mt-2">
        <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 padding-left mt-1">
                <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                    <div class="card   d-inline-block  ">
                        <img class="card-img-top lazyload img-fluid" src="<?php echo e($row->image); ?>"
                             onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                             alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt"><?php echo e($row->title_tr); ?></b></p>
                        </div>
                    </div>
                </a>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--REKLAM ALANI-->
        <div class="col-md-6 col-12 mt-2 text-center ">
            <div class="reklam-alani ">
                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($ad->type==1 && $ad->category_id==20): ?>
                        <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                     height="280"
                                                     data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                    <?php elseif($ad->type==2 && $ad->category_id==20): ?>
                        <div class="w-100"><?php echo $ad->ad_code; ?></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-md-6 col-12 mt-2 text-center ">
            <div class="reklam-alani ">
                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($ad->type==1 && $ad->category_id==21): ?>
                        <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                                     height="280"
                                                     data-src="<?php echo e(asset($ad->ads)); ?>"></a>
                    <?php elseif($ad->type==2 && $ad->category_id==21): ?>
                        <div class="w-100"><?php echo $ad->ad_code; ?></div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!--REKLAM ALANI-->
    </div>


    <div class="card-header card-kutu position-relative"
         style="background-image:linear-gradient(-10deg, <?php echo e($themeSetting->agenda); ?>, <?php echo e($themeSetting->sport); ?>);!important;border-bottom:3px solid <?php echo e($themeSetting->agenda); ?> !important">
        <div class="card-kutu__link"><i class="fa fa-align-left mr-2"></i>

            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($categorys->id==$kultur[0]->category_id): ?>
                    <?php echo e($categorys->category_tr); ?>


                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a href="<?php echo e(URL::to('/Category/' . str_slug($kultur[0]->subcategory_tr) . $kultur[0]->category_id)); ?>">
            <div class="card-kutu__tum position-absolute ">Tümü</div>
        </a>
    </div>
    <div class="row padding-left mt-2">
        <?php $__currentLoopData = $kultur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 padding-left mt-1">
                <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                    <div class="card   d-inline-block  ">
                        <img class="card-img-top lazyload img-fluid" src="<?php echo e($row->image); ?>"
                             onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                             alt="Card image cap">
                        <div class="card-body align-middle d-table-cell">
                            <p class="card-baslik text-center d-table-cell"><b
                                    class="card-kisalt"><?php echo e($row->title_tr); ?></b></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


</div>
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/widget/egitimkultur.blade.php ENDPATH**/ ?>