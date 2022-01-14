<section class="video mt-3 pt-3 pb-3 bg-dark">

    <div class="container padding-left">
        <div class="card-header card-youtube position-relative ">
            <div class="row">
                <div class="col-md-6"><img class="img-fluid lazyload" width="180" data-src="<?php echo e(asset('icon/gazetekaletv.png')); ?> " >
                    <div class="card-kutu__link">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ytube">
                        <img src="<?php echo e(asset('icon/icon-youtube-white.svg')); ?>" class="lazyload img-fluid" style="color: white" alt="youtube" width="75" height="21">
                        <a href="https://www.youtube.com/channel/UCUUeGmpEvlPFjRSeOYevzag" target="_blank"
                           rel="nofollow" class="ytube-subscriber" title="Haberler.com Youtube">
                            <span>Abone Ol</span></a>
                    </div>
                </div>
            </div>




        </div>

        <div class="row  padding-left">

            <div class="col-md-12 mt-2 padding-left">
                <div class="keskin">


                    <?php $__currentLoopData = $youtube; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div>

                            <a target="_blank" href="https://www.youtube.com/watch?v=<?php echo e($row->posts_video); ?>">
                                <div class="card   d-inline-block  ">
                                    <img data-src="<?php echo e(asset('icon/icon-youtube.png')); ?>" class="lazyload position-absolute ytube-icon img-fluid"
                                         alt="youtube" width="70" height="45">
                                    <img class="card-img-top tns-lazy-img lazyload img-fluid" data-src="<?php echo e($row->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';"
                                         alt="<?php echo e($row->title_tr); ?>">
                                    <div class="card-body align-middle d-table-cell" >
                                        <p class="card-baslik text-center d-table-cell"><b
                                                class="card-kisalt"><?php echo e($row->title_tr); ?></b></p>
                                        <img data-src="<?php echo e(asset('icon/icon-youtube.svg')); ?>" class="lazyload float-right img-fluid"
                                             alt="youtube" width="75" height="21">
                                        <span class="card__tv position-absolute text-dark">Gazetekale TV
</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>


            </div>


        </div>
        </div>
</section>
<script>
    $(document).ready(function() {
         tns({
             container: ".keskin",
             items: 3,
             slideBy: "page",
             nav: !0,
             navPosition: "bottom",
             autoplay: !0,
             lazyload:true,
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
<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/widget/youtube.blade.php ENDPATH**/ ?>