
<?php $__env->startSection('admin'); ?>

    <div class="content">

        <!-- 2 columns form -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Yazar Ekle</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('update.authors',$authors)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($authors->image); ?>" name="old_image" class="form-control tokenfield">

                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Yazar Fotoğraf</label>
                                            <input type="file" class="form-input-styled" multiple name="image" id="image" data-fouc>

                                            <?php $__errorArgs = ['image'];
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
                                            <label>Yazar İsmi</label>
                                            <input type="text" name="name" value="<?php echo e($authors->name); ?>" class="form-control">
                                            <?php $__errorArgs = ['name'];
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


                                </div>
                            </fieldset>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <label>Mail Adresi</label>
                            <input type="text" name="mail" value="<?php echo e($authors->mail); ?>" class="form-control">
                            <?php $__errorArgs = ['mail'];
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
                        <div class="col-md-3 form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" value="<?php echo e($authors->facebook); ?>" class="form-control">
                            <?php $__errorArgs = ['facebook'];
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
                        <div class="col-md-3 form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" value="<?php echo e($authors->twitter); ?>" class="form-control">
                            <?php $__errorArgs = ['twitter'];
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

                        <div class="col-md-3 form-group">
                            <label>Youtube</label>
                            <input type="text" name="youtube" value="<?php echo e($authors->youtube); ?>" class="form-control">
                            <?php $__errorArgs = ['youtube'];
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



                    <div class="text-right">
                        <button type="submit" class="btn btn-primary ">Yazar Düzenle <i class="icon-paperplane ml-2"></i></button>
                    </div>

                </form>
            </div>
        </div>

        <!-- /2 columns form -->
    </div>
    <!--Yüklenen resmi otomatik olarak gösterir-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_gazetekale\resources\views/backend/authors/edit_authors.blade.php ENDPATH**/ ?>