<?php $__env->startSection('admin'); ?>
    <div class="content">

        <div class="card">

            <div class="card-body">
                <form action="<?php echo e(route('websetting.update', $websetting)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($websetting->logo); ?>" name="old_image" class="form-control tokenfield">
                    <input type="hidden" value="<?php echo e($websetting->logowhite); ?>" name="old_logowhite"
                        class="form-control tokenfield">
                    <input type="hidden" value="<?php echo e($websetting->defaultImage); ?>" name="old_defaultImage"
                        class="form-control tokenfield">
                    <input type="hidden" value="<?php echo e($websetting->video_logo); ?>" name="old_videoLogo"
                        class="form-control tokenfield">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Web Site Ayarları</legend>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Logo</label>
                            <div class="col-lg-10">

                                <img src="<?php echo e(asset($websetting->logo)); ?>" width="200" alt="">
                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-form-label col-lg-2"> Logo</label>

                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="logo" class="form-control">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"> Beyaz Logo <br>
                                <p class="text-muted">Koyu zeminde gözükecek olan logo</p>
                            </label>

                            <div class="col-lg-10">

                                <img src="<?php echo e(asset($websetting->logowhite)); ?>" width="200" alt="">
                            </div>
                        </div>


                        <div class="form-group row">

                            <label class="col-form-label col-lg-2"> Beyaz Logo</label>

                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="logowhite" class="form-control">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2"> Video Logo <br>
                                <p class="text-muted">Ana sayfa video bölümünde gözükecek olan logo</p>
                            </label>

                            <div class="col-lg-10">

                                <img src="<?php echo e(asset($websetting->video_logo)); ?>" width="200" alt="">
                            </div>
                        </div>
                        <div class="form-group row">

                            <label class="col-form-label col-lg-2"> Video Section Logo</label>

                            <div class="col-lg-10">
                                <input type="file" class="form-control" name="video_logo" class="form-control">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Adres</label>
                            <div class="col-lg-10">
                                <input type="text" name="adress" value="<?php echo e($websetting->adress); ?>" class="form-control">
                                <?php $__errorArgs = ['adress'];
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
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email</label>
                            <div class="col-lg-10">
                                <input type="text" name="email" value="<?php echo e($websetting->email); ?>" class="form-control">
                                <?php $__errorArgs = ['youtube'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($email); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Telefon</label>
                            <div class="col-lg-10">
                                
                                <input type="text" name="phone" class="form-control" value="<?php echo e($websetting->phone); ?>">

                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($phone); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Hakkımızda</label>
                            <div class="col-lg-10">
                                
                                <textarea name="about" cols="30" class="form-control" rows="10"><?php echo e($websetting->about); ?></textarea>
                                <?php $__errorArgs = ['about'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-danger"><?php echo e($about); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Varsayılan Resim</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-input-styled" name="defaultImage" id="image"
                                        data-fouc>

                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <img width="100%" src="<?php echo e(asset($websetting->defaultImage)); ?>" id="showImage"
                                        alt="">
                                </div>

                            </div>


                        </div>


                        
                        <button type="submit" class="btn bg-success float-right">Düzenle</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_gazetekale\resources\views/backend/setting/webisitesetting.blade.php ENDPATH**/ ?>