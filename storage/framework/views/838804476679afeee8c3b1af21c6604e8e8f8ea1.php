<section class="">

    <div class="container padding-left mt-1 ">
        <div
            class="row kurlar text-center font-weight-bold  text-secondary mx-auto bg-gradient-light light border-top border-bottom p-0 position-relative">
            <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                <div class="mt-2">
                    <i class="fa fa-dollar-sign text-danger"></i><span class="text-danger ml-1">Dolar</span>
                    <div
                        class="kurfiyat"><?php echo e(number_format($kurlar['DOLAR']['satis'],3)); ?>   <?php if(number_format($kurlar['DOLAR']['oranyonu'],2)>0): ?>
                            <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                        <?php endif; ?></div>
                </div>
            </div>
            <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                <div class="mt-2">
                    <i class="fas fa-euro-sign text-danger"></i><span class="text-danger ml-1">Euro</span>
                    <div
                        class="kurfiyat"><?php echo e(number_format($kurlar['EURO']['satis'],3)); ?>  <?php if(number_format($kurlar['EURO']['oranyonu'],2)>0): ?>
                            <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                        <?php endif; ?></div>
                </div>
            </div>
            <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                <div class="mt-2">
                    <i class="fas fa-coins text-danger"></i><span class="text-danger ml-1">Ç.Altın</span>
                    <div
                        class="ku
                            rfiyat"><?php echo e(number_format((float)$kurlar['ceyrekaltin']['satis'],3)); ?>  <?php if(isset($kurlar['ceyrekaltin']['oranyonu'])>0): ?>
                            <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                        <?php endif; ?></div>
                </div>
            </div>
            <div class="col-sm-3 col-3 col-md-2 kurlar__col border-right">
                <div class="mt-2">
                    <i class="fas fa-chart-line text-danger"></i><span class="text-danger ml-1">Altın</span>
                    <div
                        class="kurfiyat"><?php echo e(number_format($kurlar['ALTIN']['satis'],3)); ?><?php if(isset($kurlar['ALTIN']['oranyonu'])>0): ?>
                            <i class="fa fa-sort-up align-middle pt-1 pr-1 text-success"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-down align-middle pt-1 pr-1 text-danger mb-3 "></i>
                        <?php endif; ?></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 col-sm-6 col-6 border-top p-2">Sosyal Medyadan Bizi Takip Edin!</div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 position-relative bg-light border-top">
                <div class="row position-absolute kurlar__sosyal mx-auto ">

                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-3 col-md-3 col-lg-3 border-right border-left p-0"><a
                                href="<?php echo e($social->facebook); ?>"
                                class="kurlar__sosyal-link "><i
                                    class="fa fa-facebook kurlar__sosyal-link-i-1"></i></a></div>
                        <div class="col-3 col-md-3 col-lg-3 border-right p-0"><a href="<?php echo e($social->twitter); ?>"
                                                                                 class="kurlar__sosyal-link "><i
                                    class="fa fa-twitter kurlar__sosyal-link-i-2"></i></a></div>
                        <div class="col-3 col-md-3 col-lg-3 border-right p-0"><a href="<?php echo e($social->instagram); ?>"
                                                                                 class="kurlar__sosyal-link "><i
                                    class="fa fa-instagram kurlar__sosyal-link-i-3"></i> </a>
                        </div>
                        <div class="col-3 col-md-3 col-lg-3 border-right p-0"><a href="<?php echo e($social->youtube); ?>"
                                                                                 class="kurlar__sosyal-link "><i
                                    class="fa fa-youtube kurlar__sosyal-link-i-4"></i> </a></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>

        </div>
    </div>
</section>

<?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/widget/dovizkurlari.blade.php ENDPATH**/ ?>