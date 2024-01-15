<!-- Modal -->
<div class="modal fade" id="delete<?php echo e($section->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(trans('Dashboard/sections_trans.delete_sections')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('Sections.destroy', 'test')); ?>" method="post">
                <?php echo e(method_field('delete')); ?>

                <?php echo e(csrf_field()); ?>

            <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo e($section->id); ?>">
                <h5><?php echo e(trans('Dashboard/sections_trans.Warning')); ?></h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(trans('Dashboard/sections_trans.Close')); ?></button>
                <button type="submit" class="btn btn-danger"><?php echo e(trans('Dashboard/sections_trans.submit')); ?></button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\hospital\resources\views/Dashboard/Sections/delete.blade.php ENDPATH**/ ?>