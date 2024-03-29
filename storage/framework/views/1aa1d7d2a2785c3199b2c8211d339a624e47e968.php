
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    <?php if(session()->has('add')): ?>
        <script>
            window.onload = function() {
                notif({
                    msg: "<?php echo e(trans('Dashboard/messages.add')); ?>",
                    type: "success"
                });
            }

        </script>
    <?php endif; ?>

    <?php if(session()->has('edit')): ?>
        <script>
            window.onload = function() {
                notif({
                    msg: "<?php echo e(trans('Dashboard/messages.edit')); ?>",
                    type: "success"
                });
            }

        </script>
    <?php endif; ?>

    <?php if(session()->has('delete')): ?>
        <script>
            window.onload = function() {
                notif({
                    msg: "<?php echo e(trans('Dashboard/messages.delete')); ?>",
                    type: "success"
                });
            }

        </script>
    <?php endif; ?>
<?php /**PATH C:\xampp\htdocs\hospital\resources\views/Dashboard/messages_alert.blade.php ENDPATH**/ ?>