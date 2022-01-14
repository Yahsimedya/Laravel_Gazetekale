<?php $__env->startSection('content'); ?>
    <?php
        $webSiteSetting=\App\Models\WebsiteSetting::first();
    ?>

    <div class="container position-relative">
        <div class="row " style="right: 0">
            
            
            
            
            

            
            
            

            <form id="form" class="text-center pb-3 mt-4 " >
                <?php echo csrf_field(); ?>
                <div class="position-absolute col-md-2 col-12" style="right: 0">

                    <select id="district_id" name="district_id" class="form-control">
                        <option value="">Diğer İller</option>
                        <?php $__currentLoopData = $alldistrict; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option
                                value="<?php echo e($district->id); ?>"><?php echo e($district->district_tr); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

            </form>

        </div>
        <div class="row" id="gotur">


            <?php if($sehirsay!=0 & $sehir!=NULL): ?>


                <div class="col-md-8 pb-4 pt-4">
                    <h2><b><?php echo e($sehir->district_tr. " Haberleri"); ?></b></h2>
                    <h5><?php echo e($sehir->district_tr." haber , ".$sehir->district_tr." son dakika haberleri ve gelişmeleri."); ?></h5>


                </div>


                <div class="col-md-2 pb-4 pt-4">


                </div>


                <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 d-none d-md-block padding-left kartlar">
                        <a href="<?php echo e(URL::to('/haber-'.str_slug($row->title_tr).'-'.$row->id)); ?>">
                            <div class="card shadow  d-inline-block  ">
                                <img class="card-img-top" src="<?php echo e($row->image); ?>" onerror="this.onerror=null;this.src='<?php echo e($webSiteSetting->defaultImage); ?>';" alt="Card image cap">
                                <div class="card-body align-middle d-table-cell">
                                    <p class="card-baslik text-center d-table-cell"><b
                                            class="card-kisalt"><?php echo e($row->title_tr); ?></b></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="container ">
                    <div class="row shadow  mt-5 mb-5" style="height: 500px">
                        <div class="col-md-12 justify-content-center align-self-center">
                            <h5 class="mx-auto my-auto text-center"><?php echo e($sehir->district_tr." iline ait haber bulunamadı."); ?></h5>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
        <div class="row">
            <div class="w-100" id="al"></div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    <script>
        $(document).ready(function (e) {


            $('#form select').on('change', function () {
                e = $('#district_id').val();
// var str =$(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('il.yerel')); ?>",
                    headers: {'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'},
                    data: $('#form').serialize(),
                    // dataType:"json",
                    success: function (donen) {
                        veri = donen;

                        $('#sehirsec').attr("disabled", false);
                        $('#al').html(veri);
                        console.log(veri);
                    },
                })
                $('#gotur').hide();
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/main/body/district.blade.php ENDPATH**/ ?>