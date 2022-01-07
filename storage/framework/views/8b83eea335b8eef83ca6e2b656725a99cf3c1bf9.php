<?php
    $webSiteSetting=\App\Models\WebsiteSetting::first();
?>
<div class="container mt-3 kartlar">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 padding-left ">
            <div class="card font-weight-light shadow">
                <h5 class="card-header kartlar__header bg-white">Gündem</h5>

                <div class="position-relative">
                    <a href="<?php echo e(URL::to('/haber-'.str_slug($gundemcard[0]->title_tr).'-'.$gundemcard[0]->id)); ?>" class="kartlar__link">
                        <img class="card-img-top position-relative rounded-0 lazyload img-fluid" src="<?php echo e($gundemcard[0]->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                             alt="Card image cap">
                        <?php if($webSiteSetting->slider_title==1): ?>
                        <div class="kartlar__effect position-absolute"></div>
                        <?php endif; ?>
                    </a>
                </div>
                <?php if($webSiteSetting->slider_title==1): ?>
                <div class="card-body kartlar__body position-absolute" style="top:30%!important;">
                    <h5 class="card-title">
                        <?php echo e($gundemcard[0]->title_tr); ?>


                    </h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
                <?php endif; ?>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $gundemcard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="<?php echo e(asset($row->image)); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" width="150" class="float-left p-2 lazyload img-fluid" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt "> <?php echo e($row->title_tr); ?> </p>
                                </div>
                            </li>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 padding-left ">
            <div class="card font-weight-light shadow">
                <h5 class="card-header kartlar__header bg-white">Siyaset</h5>

                <div class="position-relative">
                    <a href="<?php echo e(URL::to('/haber-'.str_slug($siyasetcard[0]->title_tr).'-'.$siyasetcard[0]->id)); ?>" class="kartlar__link">
                        <img class="card-img-top position-relative rounded-0 lazyload img-fluid" src="<?php echo e($siyasetcard[0]->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                             alt="Card image cap">
                        <?php if($webSiteSetting->slider_title==1): ?>
                            <div class="kartlar__effect position-absolute"></div>
                        <?php endif; ?>
                    </a>
                </div><?php if($webSiteSetting->slider_title==1): ?>
                <div class="card-body kartlar__body position-absolute" style="top:30%!important;">
                    <h5 class="card-title">

                        <?php echo e($siyasetcard[0]->title_tr); ?>


                    </h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>   <?php endif; ?>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $siyasetcard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="<?php echo e(asset($row->image)); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" width="150" class="float-left p-2 lazyload img-fluid" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">
                                        <?php echo e($row->title_tr); ?> </p>
                                </div>
                            </li>
                        </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </ul>

            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 padding-left ">
            <div class="card font-weight-light shadow">
                <h5 class="card-header kartlar__header bg-white">Ekonomi</h5>

                <div class="position-relative">
                    <a href="<?php echo e(URL::to('/haber-'.str_slug($ekonomicard[0]->title_tr).'-'.$ekonomicard[0]->id)); ?>" class="kartlar__link">
                        <img class="card-img-top position-relative rounded-0 lazyload img-fluid" src="<?php echo e($ekonomicard[0]->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                             alt="Card image cap">
                        <?php if($webSiteSetting->slider_title==1): ?>
                            <div class="kartlar__effect position-absolute"></div>
                        <?php endif; ?>
                    </a>
                </div> <?php if($webSiteSetting->slider_title==1): ?>
                <div class="card-body kartlar__body position-absolute" style="top:30%!important;">
                    <h5 class="card-title">

                        <?php echo e($ekonomicard[0]->title_tr); ?>


                    </h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div> <?php endif; ?>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $ekonomicard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>" class="kartlar__link">
                            <li class="list-group-item p-0">
                                <img src="<?php echo e(asset($row->image)); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" width="150" class="float-left p-2 lazyload img-fluid" alt="">
                                <div class="d-table-cell">
                                    <p class="pl-1 kartlar__tittle card-kisalt ">
                                       <?php echo e($row->title_tr); ?>

                                    </p>
                                </div>
                            </li>
                        </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </ul>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/widget/uclukart.blade.php ENDPATH**/ ?>