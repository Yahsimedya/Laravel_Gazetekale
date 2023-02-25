<?php $__env->startSection('title', ''); ?>
<?php $__env->startSection('meta_keywords', ''); ?>
<?php $__env->startSection('meta_description', ''); ?>


<?php $__env->startSection('content'); ?>

    <?php
        $webSiteSetting = DB::table('website_settings')->first();
    ?>

    <section class="">
        <div class="container bg-light mt-3 mb-3 shadow rounded ">
            <div class="row padding-left">
                <div class="col-md-12">
                    <div class=" bg-light mt-3 border-bottom pb-3 pt-3">
                        <div class=" ">
                            <h3 class="text-secondary"><i class="fa fa-align-left mr-2 text-danger"></i>Yazarlarımız</h3>
                        </div>
                    </div>
                </div>
                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-0">
                        <div class="row bg-dark m-2 padding-left p-0 rounded">
                            <div class="col-lg-4  col-md-4 col-sm-4 col-4  p-0">
                                <img src="<?php echo e(asset($author->image)); ?>"
                                    onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-8  col-md-8 col-sm-8 col-8">
                                <p class="mt-3 mb-0 text-light"><?php echo e(Str::limit($author->name, 17)); ?></p>
                                <p class="text-light pb-1 mb-0 border-secondary border-bottom"><?php echo e($author->title); ?></p>
                                <a href="<?php echo e(route('authors.yazilar', [str_slug($author->title), $author->id])); ?>"
                                    class=" position-relative text-light"><i class=" fa fa-caret-right mr-1"></i>Son
                                    Makaleyi Oku</a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_gazetekale\resources\views/main/body/authors.blade.php ENDPATH**/ ?>