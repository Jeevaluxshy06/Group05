
<?php $__env->startSection("menu"); ?>
<a href="<?php echo e(url('content1')); ?>">content1</a>
<a href="<?php echo e(url('content2')); ?>">content2</a>
<br><br><br><br>
<?php echo $__env->yieldContent('content'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("example.title", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\E-Lab Staff\Documents\2019sp090\HelloApp\resources\views/example/menu.blade.php ENDPATH**/ ?>