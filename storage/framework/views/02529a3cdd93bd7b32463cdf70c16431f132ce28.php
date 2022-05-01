<?php $__env->startSection('admin'); ?>

    <div class="content">

        <!-- 2 columns form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Reklam Ekle</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="<?php echo e(route('update.ads',$ads)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($ads->ads); ?>" name="old_image" class="form-control tokenfield">
                    <input type="text" value="<?php echo e($ads->ads1); ?>" name="old_image1" class="form-control tokenfield">
                    <input type="text" value="<?php echo e($ads->ads2); ?>" name="old_image2" class="form-control tokenfield">

                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i>Fotoğraf Ekle</legend>

                                <div class="form-group">
                                    <label>Reklam Linki:</label>
                                    <input type="text" name="link" class="form-control" value="<?php echo e($ads->link); ?>" placeholder="Link">
                                </div>
                                <div class="form-group">
                                    <label>Reklam Alanı:</label>
                                    <select data-placeholder="Select your state" name="category_id" class="form-control form-control-select2" data-fouc>
                                        <option disabled="" selected="">Kategori Seçiniz</option>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if($row->id == $ads->category_id ) { echo "selected";} ?> value="<?php echo e($row->id); ?>"><?php echo e($row->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($message); ?></span>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>




                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Diğer</legend>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Attach screenshot:</label>
                                            <input type="file" class="form-input-styled" multiple name="ads"  id="image" data-fouc>
                                            <?php $__errorArgs = ['ads'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Attach screenshot:</label>
                                            <input type="file" class="form-input-styled" multiple name="ads1"  id="image" data-fouc>
                                            <?php $__errorArgs = ['ads'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Attach screenshot:</label>
                                            <input type="file" class="form-input-styled" multiple name="ads2"  id="image" data-fouc>
                                            <?php $__errorArgs = ['ads'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Reklam Tip</label>
                                            <select data-placeholder="Select your state" name="type" class="form-control form-control-select2" data-fouc>
                                                <option <?php if( $ads->type == 1 ) { echo "selected";} ?> value="1">Banner Reklam</option>
                                                <option <?php if( $ads->type == 2 ) { echo "selected";} ?> value="2">Adsense Reklam</option>

                                            </select>
                                            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>

                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <img width="728" class="img-fluid text-center" src="<?php echo e(asset($ads->ads)); ?>" alt="">
                                        </div>
                                    </div>


                                </div>
                        </div>






                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="ad_code" rows="4" cols="4"><?php echo e($ads->ad_code); ?></textarea>

                    </div>




                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Reklam Ekle <i class="icon-paperplane ml-2"></i></button>
                    </div>

                </form>
            </div>
        </div>
        <!-- /2 columns form -->
    </div>
    <!--Yüklenen resmi otomatik olarak gösterir-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload =function(e) {
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_gazetekale\resources\views/backend/ads/edit_ads.blade.php ENDPATH**/ ?>