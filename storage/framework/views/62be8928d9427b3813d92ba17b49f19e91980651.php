<section class="ilceler container-fluid d-none d-md-block bg-light mt-2 mb-2 pb-4">


    <div class="container padding-left pt-2">
        <div class="card-header float-left ilceler__baslik">İLÇE HABERLERİ</div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <?php
                $i=0;
            ?>
            <?php $__currentLoopData = $ilceler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ilce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item ilceler__nav-item pr-0">

                    <a class="ilceler__nav-link  <?php if($i==0): ?>active <?php endif; ?>" id="pills-<?php echo e($ilce->id); ?>-tab"
                       data-toggle="pill"
                       href="#pills-<?php echo e($ilce->id); ?>" role="tab" aria-controls="pills-<?php echo e($ilce->id); ?>"
                       aria-selected="false"><?php echo e($ilce->subdistrict_tr); ?></a>
                </li>
                <?php
                    $i++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <div class="tab-content " id="pills-tabContent">

                <?php
                    $k=0;
                ?>

            <?php $__currentLoopData = $ilceler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ilce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="tab-pane fade <?php if($k==0): ?> show active <?php endif; ?> " id="pills-<?php echo e($ilce->id); ?>" role="tabpanel"
                     aria-labelledby="pills-profile-tab">


                    <div class="row  padding-left">
                        <div class="col-md-12">
                            <div class="ilcelers-<?php echo e($ilce->id); ?>">
                                <?php
                                      $Ilcehaberleri= App\Models\Post::where('subdistrict_id', $ilce->id)->limit(8)->get();
                                ?>
                                <?php $__currentLoopData = $Ilcehaberleri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $haber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(URL::to('/haber-'.str_slug($haber->title_tr).'-'.$haber->id)); ?>">
                                        <div class="card d-inline-block  ">
                                            <img class="card-img-top tns-lazy-img img-fluid"
                                                 data-src="<?php echo e($haber->image); ?>">
                                            <div class="card-body align-middle d-table-cell">
                                                <p class="card-baslik text-center d-table-cell"><b
                                                        class="card-kisalt"><?php echo e($haber->title_tr); ?></b></p>
                                                <span
                                                    class="card__kategori position-absolute"><?php echo e($ilce->subdistrict_tr); ?></span>
                                            </div>
                                        </div>
                                    </a>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                    $k++;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </div>
</section>
<?php $__currentLoopData = $ilceler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ilces): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script>
        $(document).ready(function () {
            tns({
                container: ".ilcelers-<?php echo e($ilces->id); ?>",
                items: 3,
                slideBy: "page",
                nav: !0,
                navPosition: "bottom",
                autoplay: !0,
                lazyload: true,
                controls: !1,
                autoplayButton: !1,
                mouseDrag: !0,
                autoplayTimeout: 3e5,
                autoplayButtonOutput: !1,
                gutter: 14,
                responsive: {
                    0: {
                        items: 1
                    },
                    640: {
                        items: 2
                    },
                    700: {
                        gutter: 14
                    },
                    900: {
                        items: 3
                    }
                }
            })
        })
    </script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/widget/ilceler.blade.php ENDPATH**/ ?>