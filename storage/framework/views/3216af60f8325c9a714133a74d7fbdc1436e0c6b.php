<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(trans('Dashboard/sections_trans.add_sections')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo e(route('Sections.store')); ?>" method="post" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <label for="exampleInputPassword1"><?php echo e(trans('Dashboard/sections_trans.name_sections')); ?></label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="modal-body">
                    <label for="exampleInputPassword2"><?php echo e(trans('Dashboard/sections_trans.description_sections')); ?></label>
                    <textarea type="text" name="description" class="form-control"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(trans('Dashboard/sections_trans.Close')); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo e(trans('Dashboard/sections_trans.submit')); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\hospital\resources\views/Dashboard/Sections/add.blade.php ENDPATH**/ ?>