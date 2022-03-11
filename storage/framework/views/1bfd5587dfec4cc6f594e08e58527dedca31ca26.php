<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php
            date_default_timezone_set('Europe/Istanbul');
            setlocale(LC_TIME, "turkish"); //başka bir dil içinse burada belirteceksin.
            setlocale(LC_ALL, 'turkish'); //başka bir dil içinse burada belirteceksin.
            ?>
        </div>
        <div class="position-relative pt-4">

            <form action="<?php echo e(route('nobetciEczanePost')); ?>" method="POST" class="row">
                <?php echo csrf_field(); ?>
                <select name="sehir_ad" id="" class="form-control col-md-9 col-12">
                    <option value="kirikkale">KIRIKKALE</option>

                    <?php $__currentLoopData = $sehirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($row->district_tr); ?>"><?php echo e($row->district_tr); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <button type="submit" name="sehir_getir" class="button button--green col-md-3 col-12">GETİR</button>
            </form>

            <?php echo e(iconv('latin5', 'utf-8', strftime(' %d %B %Y %A '))); ?>

        </div>

        <div class="row mt-2">
            <div style="position: relative;top: 50%;left: 50%;transform: translate(-50%, -30%);color: #af0f0a;">
                <?php echo $data; ?></div>
            <?php $__currentLoopData = $data3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $row; ?>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>

    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('main.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/nobetcieczane.blade.php ENDPATH**/ ?>