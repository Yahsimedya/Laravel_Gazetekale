<div class="col-md-4 padding-left position-relative">
    <div class="reklam-alani text-center">
        <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ad->type==1 && $ad->category_id==16): ?>
                <a href="<?php echo e($ad->link); ?>"><img class="img-fluid pb-1 pt-2 lazyload" width="336"
                                             height="280"
                                             data-src="<?php echo e(asset($ad->ads)); ?>"></a>
            <?php elseif($ad->type==2 && $ad->category_id==16): ?>
                <div class="w-100"><?php echo $ad->ad_code; ?></div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="card-header card-yazarlar position-relative ">


        <div class="card-yazarlar__link text-left pad"><b>Köşe</b> Yazarlarımız</div>
        <a href="<?php echo e(route('author')); ?>">
            <div class="card-yazarlar__tum position-absolute ">Tümü</div>
        </a>
    </div>
    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('authors.yazilar',$author->id)); ?>">
            <div class="row  mt-2">

                <div class="col-md-4 col-4 col-sm-4">
                    <img src="<?php echo e(asset($author->image)); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" class="rounded card-yazarlar__image lazyload img-fluid" alt="">
                </div>
                <div class="col-md-8 col-8 col-sm-8 align-middle d-inline-block">
                    <div class="d-inline-block align-middle">
                        <div class="card-yazarlar__isim d-inline-block"><?php echo e(Str::limit($author->name,17)); ?></div>
                        <div class="card-yazarlar__baslik d-table-cell "><p class="card-kisalt"><?php echo e($author->title); ?></p></div>
                    </div>
                </div>

            </div>
        </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/widget/authorsList.blade.php ENDPATH**/ ?>