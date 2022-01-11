<?php $__env->startSection('content'); ?>
<div class="container mt-2 mb-2">
    <div class="row">
        <?php $__currentLoopData = $sondakika; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3 mb-5 mt-3" >
            <div class="card shadow  d-inline-block  " style="border-color: <?php echo e($row->category->categorycolor); ?>">
                
                <a href="<?php echo e(URL::to('/'.str_slug($row->title_tr).'/'.$row->id.'/'.'haberi')); ?>">

                    <img class="card-img-top lazy" height="180" src="<?php echo e(asset($row->image)); ?>"
                         onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                         alt="Kavga ettiği amcasını sokak ortasında tabancayla vurdu" style="">
                    <div class="card-body align-middle d-table-cell">
                        <p class="card-baslik text-left d-table-cell"><b class="card-kisalt"><?php echo e($row->title_tr); ?></b></p>
                        
                    </div>
                </a>
                <span class="breaking" style="color:<?php echo e($row->category->categorycolor); ?>"><u style="background-color: <?php echo e($row->category->categorycolor); ?>"></u><?php echo e(\Carbon\Carbon::parse($row->updated_at)->format('H:i')); ?></span>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/breakingnews.blade.php ENDPATH**/ ?>