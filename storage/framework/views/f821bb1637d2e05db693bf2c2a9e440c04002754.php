

<?php if($paginator->hasPages()): ?>

<div class="dataTables_paginate paging_simple_numbers pagination" >
     <?php if($paginator->onFirstPage()): ?>
     <a href="#" class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a>
     <?php else: ?>
     <a  href="<?php echo e($paginator->previousPageUrl()); ?>" class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">←</a>

        <?php endif; ?>



        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if(is_string($element)): ?>
            <li class="disabled"><span><?php echo e($element); ?></span></li>
        <?php endif; ?>



        <?php if(is_array($element)): ?>
            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $paginator->currentPage()): ?>
                <span><a class="paginate_button current active" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"><?php echo e($page); ?></a></span>

                    
                <?php else: ?>
                <span><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></span>

                

                    
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






    <?php if($paginator->hasMorePages()): ?>
    
    <a  href="<?php echo e($paginator->nextPageUrl()); ?>" class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">→</a>

<?php else: ?>
<a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">→</a>

<?php endif; ?>
</div>
<?php endif; ?>

<?php /**PATH C:\laragon\www\Laravel_Gazetekale\resources\views/pagination-links.blade.php ENDPATH**/ ?>