<?php $__env->startSection('admin'); ?>
	<!-- Page content -->

    <script>
        $(document).ready(function(e){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#haberara").keyup(function() {
                $("#goster").show();
                var text = $(this).val();

                $.ajax({
                    type: 'get',
                    url: "<?php echo e(route('haberbul')); ?>",
                    data: 'haber='+ text,
                    // dataType:"json",
                    headers: {'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'},
                    success: function(data) {
                        // console.log(data);
                        $("#goster").html(data);
                        // alert("The souce of the image is " + data);
                        // alert(data);
                    }

                });
                
                
                
                
                
                
                
                
                
                
                

                


            })

        });
    </script>

		<!-- Main content -->
		<div class="content-wrapper">




			<!-- Content area -->
			<div class="content">
	<!-- Basic responsive configuration -->
    <div class="card">

            <div class="card-header header-elements-inline">
            <h5 class="card-title">Tüm Haberler</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            
            <a href="<?php echo e(route('add.post')); ?>"><button type="button" class="float-right btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-pen-plus"></i></b> Haber Ekle</button></a>

        </div>




        <div class="card-body">
    <h5 class="card-title">Tüm Haberlerde Ara</h5>

    <div class="col-md-12 mb-4"><input type="text" class="form-control"  placeholder="Haber İsmi Giriniz " id="haberara">

    </div>


        <table class="table datatable-responsive" id="example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Haber Başlığı</th>
                    <th>Kategori</th>
                    <th>Bölge</th>
                    <th>Fotoğraf</th>
                    <th>Tarih</th>


                    <th>Çoklu Foto</th>
                    <th>Durum</th>

                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
<?php
    $i=1;
?>

                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <div id="goster"></div>

                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e(Str::limit($row->title_tr,80)); ?></td>
                    <td><?php echo e($row->category_tr); ?></td>
                    <td><?php echo e($row->district_tr); ?></td>
                    

                    <td><img src="<?php echo e(asset($row->image)); ?>" width="150" height="100" alt=""></td>

                    <td><?php echo e(Carbon\Carbon::parse($row->created_at)->diffForHumans()); ?></td>

                <td>
                        <a href="<?php echo e(route('all.orderImagesPage',$row->id)); ?>">
                        <i class="icon-images2"></i>
                        </a>
                    </td>



                    <td> <?php if($row->status == 1): ?>
                        <form action="<?php echo e(route('active.post', $row->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-success" name="aktif"
                                value="0">Aktif</button>
                        </form>
                    <?php else: ?>
                    <form action="<?php echo e(route('active.post', $row->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        <button type="submit" class="btn btn-danger" name="aktif" value="1">Pasif</button>
                        </form>

                    <?php endif; ?></td>

                    <td class="text-center">
                        <div class="list-icons">
                            <div class="dropdown">
                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo e(route('edit.post',$row)); ?>" class="dropdown-item"><i class="icon-pencil6"></i> Düzenle</a>
                                    <a href="<?php echo e(route('delete.post',$row)); ?>" onclick="return confirm('Silmek istediğinizden emin misiniz ?')" class="dropdown-item"><i class="icon-trash"></i>Sil</a>
                                    
                                </div>
                            </div>
                        </div>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <?php echo e($post->links('pagination-links')); ?>


    </div>

    <!-- /basic responsive configuration -->


			</div>
			<!-- /content area -->



		</div>
		<!-- /main content -->


	<!-- /page content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/yahsimedya/Desktop/onur deneme/Laravel_Gazetekale/resources/views/backend/post/index.blade.php ENDPATH**/ ?>