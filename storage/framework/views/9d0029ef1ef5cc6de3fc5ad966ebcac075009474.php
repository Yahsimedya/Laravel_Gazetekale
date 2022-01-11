<section class="video mt-3 pt-3 pb-3 bg-dark">
    <div class="container padding-left">
        <div class="card-header card-video position-relative">
            <div class="card-kutu__link"><i class="fa fa-video mr-2 "></i>Video Galeri</div>
            <a href="#">
                <div class="card-kutu__tum position-absolute ">Tümü</div>
            </a>
        </div>
        <div class="row  padding-left">
            <div class="col-md-6 mt-2 padding-left">
                <div class="video-slider">
                    <?php $__currentLoopData = $videogaleri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="position-relative">
                            <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                                <!-- <div class="kartlar__effect position-absolute"> -->
                                <div class="video-overlay"><i class="fa fa-play-circle"></i></div>
                                <!-- </div> -->
                                <img data-src="<?php echo e($row->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" height="" style="object-fit: cover;"
                                     class="video-image-slider lazyload img-fluid" alt="<?php echo e($row->image); ?>"></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="row ">
                    <?php for($i=0;$i<=3;$i++): ?>
                        <?php if($videogaleri[$i]->featured==1 && count($videogaleri)>4): ?>
                            <div class="col-md-6 mt-2 padding-left">
                                <a href="<?php echo e($videogaleri[$i]->image); ?>">

                                    <div class="position-relative">

                                        <div class="video-overlay__kucuk">
                                            <i class="fa fa-play-circle"></i>
                                        </div>

                                        <img data-src="<?php echo e($videogaleri[$i]->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" height=""
                                             class="video-image lazyload img-fluid" alt="<?php echo e($videogaleri[$i]->image); ?>">
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>











<?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/main/body/widget/videogaleri.blade.php ENDPATH**/ ?>