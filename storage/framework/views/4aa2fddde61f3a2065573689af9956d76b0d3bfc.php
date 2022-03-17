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
                    <h5 class="card-title">Reklam Alanları</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    
                    <a href="<?php echo e(route('add.ads')); ?>"><button type="button" class="float-right btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-pen-plus"></i></b>Reklam Ekle</button></a>

                </div>

                <table class="table datatable-responsive" id="example">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Link</th>
                        <th>Alan</th>
                        <th>Reklam Görseli</th>
                        <th>Durum</th>
                        <th>Tip</th>
                        <th>Tarih</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                    ?>
                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($ad->link); ?></td>
                            <td><?php echo e($ad->title); ?></td>
                            <td><?php echo e($ad->title); ?></td>


                            <td><?php if($ad->status==1): ?>
                                    <form action="<?php echo e(route('update.adsStatus',$ad->id,0)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-success" name="aktif" value="0">Aktif
                                        </button>
                                    </form>
                                <?php else: ?>
                                    <form action="<?php echo e(route('update.adsStatus',$ad->id,1)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger" name="aktif" value="1">Pasif
                                        </button>
                                    </form>

                                <?php endif; ?></td>


                            <td>
                                <?php if($ad->type ==2): ?>
                                    <span class="badge badge-success">kod</span>

                                <?php else: ?>
                                    <span class="badge badge-success">Banner</span>

                                <?php endif; ?>
                            </td>













                            <td><?php echo e(Carbon\Carbon::parse($ad->created_at)->diffForHumans()); ?></td>

                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="<?php echo e(route('edit.ads',$ad)); ?>" class="dropdown-item"><i class="icon-pencil6"></i> Düzenle</a>
                                            <a href="<?php echo e(route('delete.ads',$ad)); ?>" onclick="return confirm('Silmek istediğinizden emin misiniz ?')" class="dropdown-item"><i class="icon-trash"></i>Sil</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                
                <?php echo e($ads->links('pagination-links')); ?>


            </div>
            <!-- /basic responsive configuration -->


        </div>
        <!-- /content area -->



    </div>
    <!-- /main content -->


    <!-- /page content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/backend/ads/listads.blade.php ENDPATH**/ ?>