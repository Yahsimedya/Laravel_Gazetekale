<?php
    $webSiteSetting=\App\Models\WebsiteSetting::first();
?>
<div class="container mt-2 ">
    <div class="row">
        <?php $__currentLoopData = $surmanset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-6 col-sm-12 d-none d-md-block padding-left kartlar">
                <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                    <div class="card shadow  d-inline-block  ">
                        <img class="card-img-top lazyload img-fluid" src="<?php echo e($row->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" alt="Card image cap">
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
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/widget/surmanset.blade.php ENDPATH**/ ?>