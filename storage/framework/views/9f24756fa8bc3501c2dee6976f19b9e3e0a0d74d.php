<?php $__env->startSection('admin'); ?>
    <?php
        // $category = DB::table('photocategories')->where('photocategory_id',$photo->photocategory_id)->get();
    ?>

    <!-- Page content -->
    <!-- Main content -->
    <div class="content-wrapper">




        <!-- Content area -->
        <div class="content">
            <!-- Basic responsive configuration -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Foto Galeri</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                    <a href="<?php echo e(route('add.authors')); ?>"><button type="button"
                            class="float-right btn bg-teal-400 btn-labeled btn-labeled-left"><b><i
                                    class="icon-pen-plus"></i></b>Yazar Ekle</button></a>

                </div>

                <table class="table datatable-responsive" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>İsim</th>
                            <th>Fotoğraf</th>
                            <th>Mail</th>
                            <th>Durum</th>
                            <th>Tarih</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                        ?>
                        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($row->name); ?></td>
                                

                                <td><img src="<?php echo e(asset($row->image)); ?>" width="100" alt=""></td>
                                <td><?php echo e($row->mail); ?></td>

                                
                                
                                

                                
                                

                                
                                
                                <td>
                                    <?php if($row->status == 1): ?>
                                        <form action="<?php echo e(route('active.authors', $row->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-success" name="aktif"
                                                value="0">Aktif</button>
                                        </form>
                                    <?php else: ?>
                                        <form action="<?php echo e(route('active.authors', $row->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-danger" name="aktif"
                                                value="1">Pasif</button>
                                        </form>
                                    <?php endif; ?>
                                </td>
                                
                                <td><?php echo e(Carbon\Carbon::parse($row->created_at)->diffForHumans()); ?></td>

                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="<?php echo e(route('edit.authors', $row)); ?>" class="dropdown-item"><i
                                                        class="icon-pencil6"></i> Düzenle</a>
                                                <a href="<?php echo e(route('delete.authors', $row->id)); ?>"
                                                    onclick="return confirm('Silmek istediğinizden emin misiniz ?')"
                                                    class="dropdown-item"><i class="icon-trash"></i>Sil</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                
                <?php echo e($authors->links('pagination-links')); ?>


            </div>
            <!-- /basic responsive configuration -->


        </div>
        <!-- /content area -->



    </div>
    <!-- /main content -->


    <!-- /page content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laravel_gazetekale\resources\views/backend/authors/listauthors.blade.php ENDPATH**/ ?>