<?php if(!empty($sondakika[0]->headline)): ?>

    <div id="nt-example2-container position-relative" class="container mt-1 padding-left">
        <ul id="nt-example2" class="p-0" style="height: 60px; overflow: hidden;">
            <div class="float-left h-100 d-inline" style="background-color: #f9df26;">
                <span class="p-2 align-middle" style="color:#262e62; line-height: 60px; font-weight: 500;">Son Dakika</span>
            </div>
            <?php $__currentLoopData = $sondakika; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(($row->headline==1)): ?>

                    <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                        <li>
                            <i class="fa fa-fw state fa-play"></i>
                            <span class="hour"><?php echo e(Carbon\Carbon::parse($row->created_at)->isoFormat('HH:mm')); ?></span> <?php echo e($row->title_tr); ?>

                        </li>
                    </a>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

<?php endif; ?>
<?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/widget/headline.blade.php ENDPATH**/ ?>